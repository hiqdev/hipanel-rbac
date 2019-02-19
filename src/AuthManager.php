<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2019, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac;

use yii\helpers\Yii;
use yii\rbac\RuleFactory;

/**
 * HiPanel AuthManager.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class AuthManager extends \yii\rbac\PhpManager
{
    use SetterTrait;

    public function __construct()
    {
        $dir = __DIR__ . '/files';
        parent::__construct($dir, new RuleFactory);
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

        if (isset(Yii::getApp()->user)) {
            $user = Yii::getApp()->user->identity;
            if ((!$user || $user->id !== $userId) && $userId) {
                $user = call_user_func([Yii::getApp()->user->identityClass, 'findIdentity'], $userId);
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
