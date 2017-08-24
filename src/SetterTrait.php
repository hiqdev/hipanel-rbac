<?php
/**
 * RBAC implementation for HiPanel.
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac;

use Yii;
use yii\base\InvalidParamException;
use yii\rbac\Assignment;
use yii\rbac\Item;

/**
 * Smart setters for AuthManager.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
trait SetterTrait
{
    /**
     * Set permission.
     * @param string $name
     * @param string $description
     * @return Item
     */
    public function setPermission($name, $description = null)
    {
        $permission = $this->getPermission($name) ?: $this->createPermission($name);
        if ($description) {
            $permission->description = $description;
        }
        $this->add($permission);

        return $permission;
    }

    /**
     * Set role.
     * @param string $name
     * @param string $description
     * @return Item
     */
    public function setRole($name, $description = null)
    {
        $role = $this->getRole($name) ?: $this->createRole($name);
        if ($description) {
            $role->description = $description;
        }
        $this->add($role);

        return $role;
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
     * Assigns an item (role or permission) to a user.
     * @param string|Item $item
     * @param string|integer $userId the user ID (see [[\yii\web\User::id]])
     * @throws \Exception when given wrong item name
     * @return Assignment|null the assignment object or `null` when assignment was not found by name
     */
    public function setAssignment($item, $userId)
    {
        try {
            if (is_string($item)) {
                $item = $this->findItem($item);
            }
        } catch (InvalidParamException $e) {
            Yii::warning('Role or permission "' . $item . '" does not exist');
            return null;
        }

        if (isset($this->assignments[$userId][$item->name])) {
            return $this->assignments[$userId][$item->name];
        }

        return $this->assign($item, $userId);
    }

    protected function findItem($name, $description = null)
    {
        $item = $this->getItem($name);
        if ($item) {
            return $item;
        }
        if (strncmp($name, 'deny:', 5) === 0) {
            return $this->setPermission($name, $description);
        }

        throw new InvalidParamException("Unknown item:$name at findItem");
    }

    /**
     * Assigns items to a user.
     * @param string|array $items
     * @param string|integer $userId
     */
    public function setAssignments($items, $userId)
    {
        if (is_string($items)) {
            $items = explode(',', $items);
        }
        foreach ($items as $item) {
            $this->setAssignment($item, $userId);
        }
    }

    /**
     * Returns all assignments in the system.
     * @return array
     */
    public function getAllAssignments()
    {
        return $this->assignments;
    }

    /**
     * Returns all items in the system.
     * @return array
     */
    public function getAllItems()
    {
        return $this->items;
    }
}
