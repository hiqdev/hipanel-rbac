<?php

/*
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac;

use yii\base\InvalidParamException;
use yii\rbac\Item;
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
        if (isset(Yii::$app->user)) {
            $user = Yii::$app->user->identity;
            if (!$user || $user->id != $userId) {
                $user = call_user_func([Yii::$app->user->identityClass, 'findIdentity'], $userId);
            }
            if (isset($user->username)) {
                $userId = $user->username;
            }
            if (isset($user->roles)) {
                $this->setSmartAssignments($user->roles, $userId);
            }
        }

        return parent::checkAccess($userId, $permission, $params);
    }

    public function setSmartAssignments(array $items, $userId)
    {
        $roles = [];
        foreach ($items as $item) {
            $roles[] = $this->getSmartRole($item);
        }

        $this->setAssignments($roles, $userId);
    }

    public function getSmartRole($item)
    {
        if (is_string($item)) {
            $name = $item;
            $item = $this->getItem('role:' . $name) ?: $this->getItem($name);
        }
        if (is_null($item)) {
            throw new InvalidParamException("Unknown item:$name at getSmartRole");
        }

        return $item;
    }
}
