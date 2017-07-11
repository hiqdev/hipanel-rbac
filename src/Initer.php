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
    protected static $tree = [
        'role:client' => [
            'restore-password', 'deposit',
            'domain.pay', 'domain.push',
            'server.pay',
        ],
        'role:support' => [
            'support',
        ],
        'role:admin' => [
            'role:support',
            'admin',
            'contact.force-verify',
        ],
        'role:manager' => [
            'role:support', 'role:document.manager',
            'manage',
            'domain.pay', 'domain.push',
            'server.pay',
            'contact.force-verify',
            'mailing.prepare', 'mailing.send',
            'server.sell'
        ],
        'role:reseller' => [
            'role:manager', 'role:bill.manager',
            'resell',
            'deposit',
        ],
        'role:owner' => [
            'role:manager', 'role:bill.manager',
            'resell', 'own',
        ],
        'role:employee' => [
            'role:client',
            'employee.read',
        ],
        'role:domain.master' => [
            'domain.delete', 'domain.freeze', 'domain.unfreeze',
            'domain.push', 'domain.force-push',
        ],
        'role:bill.manager' => [
            'bill.create', 'bill.update', 'bill.delete',
        ],
        'role:employee.manager' => [
            'employee.read', 'employee.create', 'employee.update', 'employee.delete',
        ],
        'role:document.manager' => [
            'document.manage',
        ],
    ];

    public static function init(AuthManager $auth)
    {
        foreach (array_keys(static::$tree) as $role) {
            $auth->setRole($role);
        }

        foreach (static::$tree as $role => $items) {
            foreach ($items as $name) {
                $item = $auth->getItem($name);
                if ($item === null) {
                    $item = $auth->setPermission($name);
                }
                $auth->setChild($role, $item);
            }
        }
    }

    public static function reinit(AuthManager $auth)
    {
        $auth->removeAll();
        static::init($auth);
    }
}
