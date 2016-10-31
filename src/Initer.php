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
        $auth->setRole('support');
        $auth->setRole('admin');
        $auth->setRole('manager');
        $auth->setRole('reseller');
        $auth->setRole('owner');
        $auth->setRole('freezer');
        $auth->setRole('billCreator');
        $auth->setRole('billDeleter');
        $auth->setRole('billManager');

        $auth->setPermission('restore-password');
        $auth->setPermission('deposit');
        $auth->setPermission('do-support');
        $auth->setPermission('manage');
        $auth->setPermission('administrate');
        $auth->setPermission('resell');
        $auth->setPermission('own');

        $auth->setPermission('freeze');
        $auth->setPermission('unfreeze');
        $auth->setPermission('create-bills');
        $auth->setPermission('update-bills');
        $auth->setPermission('delete-bills');

        $auth->setChild('client',           'restore-password');
        $auth->setChild('client',           'deposit');

        $auth->setChild('support',          'do-support');

        $auth->setChild('admin',            'support');
        $auth->setChild('admin',            'administrate');

        $auth->setChild('manager',          'support');
        $auth->setChild('manager',          'manage');

        $auth->setChild('reseller',         'billManager');
        $auth->setChild('reseller',         'resell');
        $auth->setChild('reseller',         'deposit');

        $auth->setChild('owner',            'billManager');
        $auth->setChild('owner',            'resell');
        $auth->setChild('owner',            'own');

        $auth->setChild('freezer',          'freeze');
        $auth->setChild('freezer',          'unfreeze');

        $auth->setChild('billCreator',      'create-bills');
        $auth->setChild('billDeleter',      'delete-bills');

        $auth->setChild('billManager',      'manager');
        $auth->setChild('billManager',      'create-bills');
        $auth->setChild('billManager',      'update-bills');
        $auth->setChild('billManager',      'delete-bills');

        $auth->setAssignment('freezer',     'sol');
        $auth->setAssignment('freezer',     'andre');

        $auth->setAssignment('billManager', 'sol');
        $auth->setAssignment('billManager', 'margo');
        $auth->setAssignment('billManager', 'dsr');
        $auth->setAssignment('billManager', 'olgadsr');

        $auth->persistAssignments();
    }

    public static function reinit(AuthManager $auth)
    {
        $auth->removeAll();
        static::init($auth);
    }
}
