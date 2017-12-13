<?php
/**
 * RBAC implementation for HiPanel
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
        'role:nobody' => [
            'nothing',
        ],
        'role:unauthorized' => [
            'restore-password', 'deposit',
        ],
        'role:client' => [
            'role:unauthorized',
            'role:ticket.client',
            'role:domain.client', 'domain.pay', 'domain.push',
            'role:server.client', 'server.pay',
            'bill.read',
        ],
        'role:support' => [
            'support',
            'role:ticket.manager',
            'role:domain.client',
            'role:server.client',
        ],
        'role:admin' => [
            'role:support',
            'role:server.manager',
            'admin',
            'contact.force-verify',
        ],
        'role:manager' => [
            'role:support', 'role:document.manager', 'role:stock.manager',
            'role:domain.manager', 'domain.pay', 'domain.push',
            'manage',
            'bill.read',
            'server.pay', 'server.sell',
            'contact.force-verify',
            'mailing.prepare', 'mailing.send',
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
            'restore-password', 'deposit',
            'bill.read', 'employee.read',
        ],
        'role:domain.client' => [
            'domain.read', 'domain.update',
        ],
        'role:domain.manager' => [
            'role:domain.client', 'domain.delete',
        ],
        'role:domain.master' => [
            'role:domain.manager',
            'domain.freeze', 'domain.unfreeze',
            'domain.push', 'domain.force-push',
        ],
        'role:server.client' => [
            'server.read',
        ],
        'role:server.manager' => [
            'role:server.client', 'server.create', 'server.update', 'server.delete',
        ],
        'role:ticket.client' => [
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close',
        ],
        'role:ticket.manager' => [
            'role:ticket.client', 'ticket.update', 'ticket.delete',
        ],
        'role:bill.manager' => [
            'bill.read', 'bill.create', 'bill.update', 'bill.delete',
        ],
        'role:employee.manager' => [
            'employee.read', 'employee.create', 'employee.update', 'employee.delete',
        ],
        'role:stock.manager' => [
            'stock.read', 'stock.create', 'stock.update', 'stock.delete',
        ],
        'role:document.manager' => [
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.manage', 'document.generate',
        ],
        'role:document.master' => [
            'document.generate-all',
        ],
        'role:beta-tester' => [
            'test.beta',
        ],
        'role:alpha-tester' => [
            'role:beta-tester',
            'test.alpha',
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
