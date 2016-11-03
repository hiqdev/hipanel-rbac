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
        $auth->setRole('role:client');
        $auth->setRole('role:support');
        $auth->setRole('role:admin');
        $auth->setRole('role:manager');
        $auth->setRole('role:reseller');
        $auth->setRole('role:owner');

        $auth->setRole('role:domain.freezer');
        $auth->setRole('role:bill.manager');

        $auth->setPermission('restore-password');
        $auth->setPermission('deposit');
        $auth->setPermission('support');
        $auth->setPermission('manage');
        $auth->setPermission('admin');
        $auth->setPermission('resell');
        $auth->setPermission('own');

        $auth->setPermission('domain.freeze');
        $auth->setPermission('domain.unfreeze');
        $auth->setPermission('domain.set-contacts');

        $auth->setPermission('bill.create');
        $auth->setPermission('bill.update');
        $auth->setPermission('bill.delete');

        $auth->setChild('role:client',                  'restore-password');
        $auth->setChild('role:client',                  'deposit');

        $auth->setChild('role:support',                 'support');

        $auth->setChild('role:admin',                   'role:support');
        $auth->setChild('role:admin',                   'admin');

        $auth->setChild('role:manager',                 'role:support');
        $auth->setChild('role:manager',                 'manage');

        $auth->setChild('role:reseller',                'role:manager');
        $auth->setChild('role:reseller',                'role:bill.manager');
        $auth->setChild('role:reseller',                'deposit');
        $auth->setChild('role:reseller',                'resell');

        $auth->setChild('role:owner',                   'role:manager');
        $auth->setChild('role:owner',                   'role:bill.manager');
        $auth->setChild('role:owner',                   'resell');
        $auth->setChild('role:owner',                   'own');

        $auth->setChild('role:domain.freezer',          'domain.freeze');
        $auth->setChild('role:domain.freezer',          'domain.unfreeze');

        $auth->setChild('role:bill.manager',            'bill.create');
        $auth->setChild('role:bill.manager',            'bill.update');
        $auth->setChild('role:bill.manager',            'bill.delete');

        $auth->setAssignment('role:domain.freezer',     'sol');
        $auth->setAssignment('role:domain.freezer',     'andre');

        $auth->setAssignment('role:bill.manager',       'sol');
        $auth->setAssignment('role:bill.manager',       'olgadsr');

        $auth->persistAssignments();
    }

    public static function reinit(AuthManager $auth)
    {
        $auth->removeAll();
        static::init($auth);
    }
}
