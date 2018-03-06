<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac;

/**
 * Initer for AuthManager.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
abstract class AbstractIniter implements RbacIniterInterface
{
    /**
     * Provides a tree of permissions to be set in AuthManager.
     *
     * @return array where:
     * - key: role name
     * - value: role items
     */
    abstract public function getTree();

    /**
     * {@inheritdoc}
     */
    public function init(AuthManager $auth)
    {
        foreach (array_keys($this->getTree()) as $role) {
            $auth->setRole($role);
        }

        foreach ($this->getTree() as $role => $items) {
            foreach ($items as $name) {
                $item = $auth->getItem($name);
                if ($item === null) {
                    $item = $auth->setPermission($name);
                    $auth->setPermission("deny:$name");
                }
                $auth->setChild($role, $item);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reinit(AuthManager $auth)
    {
        $auth->removeAll();
        $this->init($auth);
    }
}
