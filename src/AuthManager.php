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
        $this->setCurrentUserRole();
        if ($userId === $this->getIdentity()->id) {
            $userId = $this->getIdentity()->username;
        }

        return parent::checkAccess($userId, $permission, $params);
    }

    protected $_currentUserRole;

    public function setCurrentUserRole()
    {
        if ($this->_currentUserRole === null) {
            $this->_currentUserRole = $this->getIdentity()->type ?: '';
            if ($this->_currentUserRole) {
                $this->setAssignment($this->_currentUserRole, $this->getIdentity()->username);
            }
        }
    }

    public function getIdentity()
    {
        return Yii::$app->user->identity;
    }
}
