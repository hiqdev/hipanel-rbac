<?php
/**
 * RBAC implementation for HiPanel.
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
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
        $auth->setRole('role:employee');

        $auth->setRole('role:domain.master');
        $auth->setRole('role:bill.manager');
        $auth->setRole('role:employee.manager');
        $auth->setRole('role:document.manager');

        $auth->setPermission('restore-password');
        $auth->setPermission('deposit');
        $auth->setPermission('support');
        $auth->setPermission('manage');
        $auth->setPermission('admin');
        $auth->setPermission('resell');
        $auth->setPermission('own');

        $auth->setPermission('employee.read');
        $auth->setPermission('employee.create');
        $auth->setPermission('employee.update');
        $auth->setPermission('employee.delete');

        $auth->setPermission('domain.pay');
        $auth->setPermission('domain.delete');
        $auth->setPermission('domain.freeze');
        $auth->setPermission('domain.unfreeze');
        $auth->setPermission('domain.set-contacts');
        $auth->setPermission('domain.force-push');

        $auth->setPermission('document.manage');

        $auth->setPermission('mailing.prepare');
        $auth->setPermission('mailing.send');

        $auth->setPermission('contact.force-verify');

        $auth->setPermission('server.pay');

        $auth->setPermission('bill.create');
        $auth->setPermission('bill.update');
        $auth->setPermission('bill.delete');

        $auth->setChild('role:client',                  'restore-password');
        $auth->setChild('role:client',                  'deposit');
        $auth->setChild('role:client',                  'domain.pay');
        $auth->setChild('role:client',                  'server.pay');

        $auth->setChild('role:support',                 'support');

        $auth->setChild('role:admin',                   'role:support');
        $auth->setChild('role:admin',                   'admin');
        $auth->setChild('role:admin',                   'contact.force-verify');

        $auth->setChild('role:manager',                 'role:support');
        $auth->setChild('role:manager',                 'role:document.manager');
        $auth->setChild('role:manager',                 'manage');
        $auth->setChild('role:manager',                 'domain.pay');
        $auth->setChild('role:manager',                 'server.pay');
        $auth->setChild('role:manager',                 'contact.force-verify');
        $auth->setChild('role:manager',                 'mailing.prepare');
        $auth->setChild('role:manager',                 'mailing.send');

        $auth->setChild('role:reseller',                'role:manager');
        $auth->setChild('role:reseller',                'role:bill.manager');
        $auth->setChild('role:reseller',                'resell');
        $auth->setChild('role:reseller',                'deposit');

        $auth->setChild('role:owner',                   'role:manager');
        $auth->setChild('role:owner',                   'role:bill.manager');
        $auth->setChild('role:owner',                   'resell');
        $auth->setChild('role:owner',                   'own');

        $auth->setChild('role:employee',                'role:client');
        $auth->setChild('role:employee',                'employee.read');

        $auth->setChild('role:domain.master',           'domain.delete');
        $auth->setChild('role:domain.master',           'domain.freeze');
        $auth->setChild('role:domain.master',           'domain.unfreeze');
        $auth->setChild('role:domain.master',           'domain.force-push');

        $auth->setChild('role:bill.manager',            'bill.create');
        $auth->setChild('role:bill.manager',            'bill.update');
        $auth->setChild('role:bill.manager',            'bill.delete');

        $auth->setChild('role:employee.manager',        'employee.read');
        $auth->setChild('role:employee.manager',        'employee.create');
        $auth->setChild('role:employee.manager',        'employee.update');
        $auth->setChild('role:employee.manager',        'employee.delete');

        $auth->setChild('role:document.manager',        'document.manage');
    }

    public static function reinit(AuthManager $auth)
    {
        $auth->removeAll();
        static::init($auth);
    }
}
