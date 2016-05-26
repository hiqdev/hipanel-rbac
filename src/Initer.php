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
        $auth->setRole('client');
        $auth->setRole('supportRole');
        $auth->setRole('adminRole');
        $auth->setRole('manager');
        $auth->setRole('reseller');
        $auth->setRole('owner');
        $auth->setRole('freezer');

        $auth->setPermission('deposit');
        $auth->setPermission('support');
        $auth->setPermission('manage');
        $auth->setPermission('admin');
        $auth->setPermission('resell');
        $auth->setPermission('own');
        $auth->setPermission('root');
        $auth->setPermission('freeze');
        $auth->setPermission('unfreeze');

        $auth->setChild('client',           'deposit');

        $auth->setChild('supportRole',      'support');

        $auth->setChild('adminRole',        'admin');
        $auth->setChild('adminRole',        'support');

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
