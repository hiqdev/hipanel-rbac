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
        $auth->setRole('billManager');

        $auth->setPermission('deposit');
        $auth->setPermission('supporting');
        $auth->setPermission('manage');
        $auth->setPermission('administrate');
        $auth->setPermission('resell');
        $auth->setPermission('own');
        $auth->setPermission('root');
        $auth->setPermission('freeze');
        $auth->setPermission('unfreeze');
        $auth->setPermission('delete-bills');
        $auth->setPermission('edit-bills');

        $auth->setChild('client',           'deposit');

        $auth->setChild('support',          'supporting');

        $auth->setChild('admin',            'support');
        $auth->setChild('admin',            'administrate');

        $auth->setChild('manager',          'support');
        $auth->setChild('manager',          'manage');

        $auth->setChild('reseller',         'manager');
        $auth->setChild('reseller',         'resell');

        $auth->setChild('owner',            'reseller');
        $auth->setChild('owner',            'own');

        $auth->setChild('freezer',          'freeze');
        $auth->setChild('freezer',          'unfreeze');

        $auth->setChild('billManager',      'delete-bills');
        $auth->setChild('billManager',      'edit-bills');

        $auth->setAssignment('freezer',     'sol');
        $auth->setAssignment('freezer',     'andre');

        $auth->setAssignment('manager',     'sol');

        $auth->setAssignment('billManager', 'sol');
        $auth->setAssignment('billManager', 'margo');
        $auth->setAssignment('billManager', 'dsr');
        $auth->setAssignment('billManager', 'olgadsr');

        $auth->saveBasicAssignments();
    }

    public static function reinit(AuthManager $auth)
    {
        $auth->removeAll();
        static::init($auth);
    }
}
