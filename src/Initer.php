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

/**
 * Initer for AuthManager.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Initer
{
    public static function init(AuthManager $auth)
    {
        $auth->setRole('guest');
        $auth->setRole('loggedin');
        $auth->setRole('client');
        $auth->setRole('supportRole');
        $auth->setRole('admin');
        $auth->setRole('manager');
        $auth->setRole('reseller');
        $auth->setRole('owner');
        $auth->setRole('freezer');

        $auth->setPermission('support');
        $auth->setPermission('manage');
        $auth->setPermission('administer');
        $auth->setPermission('resell');
        $auth->setPermission('own');
        $auth->setPermission('root');
        $auth->setPermission('freeze');
        $auth->setPermission('unfreeze');
        $auth->setPermission('deposit');

        $auth->setPermission('domainSetNSs');

        $auth->setChild('loggedin',         'guest');
        $auth->setChild('loggedin',         'domainSetNSs');

        $auth->setChild('client',           'loggedin');
        $auth->setChild('client',           'deposit');

        $auth->setChild('supportRole',      'loggedin');
        $auth->setChild('supportRole',      'support');

        $auth->setChild('admin',            'supportRole');
        $auth->setChild('admin',            'administer');

        $auth->setChild('manager',          'supportRole');
        $auth->setChild('manager',          'manage');

        $auth->setChild('reseller',         'manager');
        $auth->setChild('reseller',         'resell');

        $auth->setChild('owner',            'reseller');
        $auth->setChild('owner',            'own');

        $auth->setChild('freezer',          'freeze');
        $auth->setChild('freezer',          'unfreeze');
    }

    public static function reinit(AuthManager $auth)
    {
        $auth->removeAll();
        static::init($auth);
    }
}
