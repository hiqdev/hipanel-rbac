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
 * @author Dmytro Naumenko <d.naumenko.a@gmail.com>
 */
interface RbacIniterInterface
{
    /**
     * Adds items to AuthManager.
     *
     * @param AuthManager $auth
     */
    public function init(AuthManager $auth);

    /**
     * Drops all the items in AuthManager and recreates them.
     *
     * @param AuthManager $auth
     */
    public function reinit(AuthManager $auth);
}
