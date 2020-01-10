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
 * Non-obvious permissions:
 * - have-goods - permission to have anything, inherent to clients and resellers only.
 *   Serfvice staff (supports, managers) can't have anything.
 * - see-no-mans - see no man's objects - not belonging to anybody
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Initer extends AbstractIniter
{
    public function getTree()
    {
        return include __DIR__ . '/files/source/tree.php';
    }

    /**
     * @inheritDoc
     */
    public function getMetadata()
    {
        return include __DIR__ . '/files/source/metadata.php';
    }
}
