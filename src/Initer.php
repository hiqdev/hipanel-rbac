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
            'role:ticket.user',
            'role:domain.user', 'domain.pay', 'domain.push',
            'role:server.user', 'server.pay',
            'role:account.user',
            'bill.read',
        ],
        'role:support' => [
            'support',
            'role:ticket.manager',
            'role:client.support',
            'role:domain.user',
            'role:server.user',
            'role:account.user',
        ],
        'role:admin' => [
            'role:support', 'admin',
            'role:server.admin',
        ],
        'role:manager' => [
            'role:support', 'manage',
            'role:document.manager', 'role:stock.manager',
            'role:domain.manager', 'domain.pay', 'domain.push',
            'role:client.manager',
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
        /// SUBROLES
        'role:domain.user' => [
            'domain.read', 'domain.update',
        ],
        'role:domain.manager' => [
            'role:domain.user', 'domain.delete',
        ],
        'role:domain.master' => [
            'role:domain.manager',
            'domain.freeze', 'domain.unfreeze',
            'domain.push', 'domain.force-push',
        ],
        'role:account.user' => [
            'account.read', 'account.create', 'account.update', 'account.delete',
        ],
        'role:server.user' => [
            'server.read',
        ],
        'role:server.admin' => [
            'role:server.user', 'server.create', 'server.update', 'server.delete',
        ],
        'role:ticket.user' => [
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close',
        ],
        'role:ticket.manager' => [
            'role:ticket.user', 'ticket.update', 'ticket.delete',
        ],
        'role:client.support' => [
            'client.read',
        ],
        'role:client.manager' => [
            'role:client.support', 'client.create', 'client.update', 'client.delete',
        ],
        'role:employee.manager' => [
            'employee.read', 'employee.create', 'employee.update', 'employee.delete',
        ],
        'role:bill.manager' => [
            'bill.read', 'bill.create', 'bill.update', 'bill.delete',
        ],
        'role:stock.manager' => [
            'stock.read', 'stock.create', 'stock.update', 'stock.delete',
        ],
        'role:document.user' => [
            'document.read', 'document.create',
        ],
        'role:document.manager' => [
            'role:document.user', 'document.update', 'document.delete', 'document.generate',
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
