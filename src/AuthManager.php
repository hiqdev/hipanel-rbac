<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2020, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac;

use hiqdev\yii\compat\yii;
use yii\base\Configurable;
use yii\rbac\RuleFactory;

/**
 * HiPanel AuthManager.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class AuthManager extends \yii\rbac\PhpManager implements Configurable
{
    use SetterTrait;

    public $itemFile       = __DIR__ . '/files/items.php';
    public $ruleFile       = __DIR__ . '/files/rules.php';
    public $assignmentFile = __DIR__ . '/files/assignments.php';

    public function __construct(array $config = [])
    {
        if (yii::is2()) {
            parent::__construct($config);
            parent::init();
        } else {
            $dir = __DIR__ . '/files';
            parent::__construct($dir, new RuleFactory());
        }
    }

    /**
     * We don't keep all the assignments, only persistent.
     * @see persistAssignments
     */
    protected function saveAssignments()
    {
    }

    /**
     * Does real assignments saving.
     * The idea is to split persistent assignments from session only.
     */
    public function persistAssignments()
    {
        parent::saveAssignments();
    }

    public function checkAccess($userId, $permission, $params = [])
    {
        if (empty($this->getAssignments($userId))) {
            $this->applyUserAssignments($userId);
        }

        return parent::checkAccess($userId, $permission, $params)
            && !parent::checkAccess($userId, "deny:$permission", $params);
    }

    public function applyUserAssignments($userId)
    {
        $roles = '';

        if (isset(yii::getApp()->user)) {
            $user = yii::getApp()->user->identity;
            if ((!$user || $user->id !== $userId) && $userId) {
                $user = call_user_func([yii::getApp()->user->identityClass, 'findIdentity'], $userId);
            }
            if (isset($user->roles)) {
                $roles = $user->roles;
            }
        }

        if (empty($userId)) {
            $userId = '';
            $roles = 'role:unauthorized';
        }

        if ($roles) {
            $this->setAssignments($roles, $userId);
        }
    }
}
