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
use yii\rbac\Assignment;
use yii\rbac\Item;
use yii\rbac\Permission;
use yii\rbac\Role;
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

    public function getAllChildren(): array
    {
        return $this->children;
    }

    /**
     * Loads authorization data from persistent storage.
     * The original library doesn't changed more than 11 years, so just overwrote the original method
     */
    protected function load()
    {
        $this->children = [];
        $this->rules = [];
        $this->assignments = [];
        $this->items = [];

        $items = $this->loadFromFile($this->itemFile);
        $itemsMtime = @filemtime($this->itemFile);
        $assignments = $this->loadFromFile($this->assignmentFile);
        $assignmentsMtime = @filemtime($this->assignmentFile);
        $rules = $this->loadFromFile($this->ruleFile);

        foreach ($items as $name => $item) {
            $class = $item['type'] == Item::TYPE_PERMISSION ? Permission::class : Role::class;

            $this->items[$name] = new $class([
                'name' => $name,
                'description' => isset($item['description']) ? $item['description'] : null,
                'ruleName' => isset($item['ruleName']) ? $item['ruleName'] : null,
                'data' => isset($item['data']) ? $item['data'] : null,
                'createdAt' => $itemsMtime,
                'updatedAt' => $itemsMtime,
                'internal' => $item['internal'] ?? null,
            ]);
        }

        foreach ($items as $name => $item) {
            if (isset($item['children'])) {
                foreach ($item['children'] as $childName) {
                    if (isset($this->items[$childName])) {
                        $this->children[$name][$childName] = $this->items[$childName];
                    }
                }
            }
        }

        foreach ($assignments as $userId => $roles) {
            foreach ($roles as $role) {
                $this->assignments[$userId][$role] = new Assignment([
                    'userId' => $userId,
                    'roleName' => $role,
                    'createdAt' => $assignmentsMtime,
                ]);
            }
        }

        foreach ($rules as $name => $ruleData) {
            $this->rules[$name] = unserialize($ruleData);
        }
    }
}
