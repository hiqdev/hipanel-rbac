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
     * Provides a tree of permissions to be set in AuthManager.
     *
     * @return array where:
     * - key: permission or role name
     * - array: role additional data according to `\yii\rbac\Permission` properties
     */
    abstract public function getMetadata();

    /**
     * {@inheritdoc}
     */
    public function init(AuthManager $auth)
    {
        $metadata = $this->getMetadata();

        foreach (array_keys($this->getTree()) as $roleName) {
            $roleMeta = $metadata[$roleName];
            $auth->setRole($roleName, $roleMeta['description'] ?? null);
        }

        foreach ($this->getTree() as $roleName => $items) {
            foreach ($items as $name) {
                $item = $auth->getItem($name);
                if ($item === null) {
                    $itemMeta = $metadata[$name];
                    $item = $auth->setPermission($name, $itemMeta['description'] ?? null);

                    $itemMeta = $metadata["deny:$name"];
                    $auth->setPermission("deny:$name", $itemMeta['description'] ?? null);
                }
                $auth->setChild($roleName, $item);
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
