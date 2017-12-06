<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac;

use Yii;

/**
 * HiPanel AuthManager.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class AuthManager extends \yii\rbac\PhpManager
{
    public $itemFile       = '@hipanel/rbac/files/items.php';
    public $ruleFile       = '@hipanel/rbac/files/rules.php';
    public $assignmentFile = '@hipanel/rbac/files/assignments.php';

    use SetterTrait;

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

        if (isset(Yii::$app->user)) {
            $user = Yii::$app->user->identity;
            if (!$user || $user->id !== $userId) {
                $user = call_user_func([Yii::$app->user->identityClass, 'findIdentity'], $userId);
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
