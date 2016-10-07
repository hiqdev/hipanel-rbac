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

    /**
     * Set permission.
     * @param string $name
     * @param string $description
     * @return Item
     */
    public function setPermission($name, $description = null)
    {
        return $this->setItem('permission', $name, $description);
    }

    /**
     * Set role.
     * @param string $name
     * @param string $description
     * @return Item
     */
    public function setRole($name, $description = null)
    {
        return $this->setItem('role', $name, $description);
    }

    /**
     * Set item by type and name.
     * Created if not exists else updates.
     * @param string $type
     * @param string $name
     * @param string $description
     * @return Item
     */
    public function setItem($type, $name, $description = null)
    {
        $item = $this->getItem($name) ?: $this->createItem($type, $name);
        if ($description) {
            $item->description = $description;
        }
        $this->add($item);

        return $item;
    }

    /**
     * Create item by type and name.
     * @param string $type
     * @param string $name
     * @throws InvalidParamException
     * @return Item
     */
    public function createItem($type, $name)
    {
        if ('role' === $type) {
            return $this->createRole($name);
        } elseif ('permission' === $type) {
            return $this->createPermission($name);
        } else {
            throw new InvalidParamException('Creating unsupported item type: ' . $type);
        }
    }

    /**
     * Set child.
     * @param string|Item $parent
     * @param string|Item $child
     * @return bool
     */
    public function setChild($parent, $child)
    {
        if (is_string($parent)) {
            $name   = $parent;
            $parent = $this->getItem($parent);
            if (is_null($parent)) {
                throw new InvalidParamException("Unknown parent:$name at setChild");
            }
        }
        if (is_string($child)) {
            $name  = $child;
            $child = $this->getItem($child);
            if (is_null($child)) {
                throw new InvalidParamException("Unknown child:$name at setChild");
            }
        }
        if (isset($this->children[$parent->name][$child->name])) {
            return false;
        }

        return $this->addChild($parent, $child);
    }

    /**
     * Assigns a role to a user.
     * @param Role $role
     * @param string|integer $userId the user ID (see [[\yii\web\User::id]])
     * @throws \Exception when given wrong role name or the role has already been assigned to the user
     * @return Assignment the role assignment information
     */
    public function setAssignment($role, $userId)
    {
        if (is_string($role)) {
            $name = $role;
            $role = $this->getRole($role);
            if (is_null($role)) {
                throw new InvalidParamException("Unknown role:$name at setAssignment");
            }
        }
        if (isset($this->assignments[$userId][$role->name])) {
            return false;
        }

        return $this->assign($role, $userId);
    }

    public function getAllAssignments()
    {
        return $this->assignments;
    }

    /**
     * We don't keep all the assignments, only basic.
     * @see forceSaveAssignments
     */
    protected function saveAssignments()
    {
    }

    /**
     * Create only basic assignments before saving.
     */
    public function saveBasicAssignments()
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
