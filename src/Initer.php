<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac;

/**
 * Initer for AuthManager.
 *
 * Non-obvious permissions:
 * - have-goods - permission to have anything, inherent to clients and resellers only.
 *   Serfvice staff (supports, managers) can't have anything.
 * - see-no-mans - see no man's objects - not belonging to anybody
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Initer extends AbstractIniter
{
    public function getTree()
    {
        return [
            'role:nobody' => [
                'nothing',
            ],
            'role:unauthorized' => [
                'restore-password', 'deposit',
            ],
            'role:client' => [
                'role:unauthorized', 'have-goods',
                'role:ticket.user',
                'role:domain.user', 'domain.pay', 'domain.push',
                'role:dns.user',
                'role:certificate.user', 'certificate.pay', 'certificate.push',
                'role:contact.user', 'role:document.user', 'document.invoice',
                'role:server.user', 'server.pay',
                'role:account.user',
                'bill.read', 'plan.read',
            ],
            'role:support' => [
                'access-subclients', 'support',
                'role:ticket.manager',
                'role:client.support',
                'role:domain.user',
                'role:dns.user',
                'role:certificate.user',
                'contact.read',
                'contact.update',
                'role:server.user',
                'role:account.user',
                'plan.read',
            ],
            'role:admin' => [
                'role:support', 'admin',
                'role:stock.manager',
                'role:server.admin',
            ],
            'role:manager' => [
                'role:support', 'manage',
                'role:document.manager', 'role:stock.manager',
                'role:domain.manager', 'domain.pay', 'domain.push',
                'role:dns.manager',
                'role:certificate.manager', 'certificate.pay', 'certificate.push',
                'role:contact.user', 'contact.force-verify',
                'role:client.manager',
                'role:plan.manager',
                'bill.read',
                'server.pay', 'server.sell',
                'mailing.prepare', 'mailing.send',
            ],
            'role:reseller' => [
                'have-goods', 'deposit',
                'role:manager', 'role:bill.manager',
                'resell',
            ],
            'role:owner' => [
                'deposit',
                'role:manager', 'role:bill.manager',
                'resell', 'own',
            ],
            'role:superpowers' => [
                'see-no-mans',
            ],
            'role:employee' => [
                'restore-password', 'deposit',
                'role:contact.user',
                'role:document.user', 'document.acceptance',
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
            'role:dns.user' => [
                'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            ],
            'role:dns.manager' => [
                'role:dns.user',
            ],
            'role:certificate.user' => [
                'certificate.read', 'certificate.create', 'certificate.update',
            ],
            'role:certificate.manager' => [
                'role:certificate.user', 'certificate.delete',
            ],
            'role:contact.user' => [
                'contact.read', 'contact.create', 'contact.update', 'contact.delete',
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
                'document.acceptance',
            ],
            'role:client.impersonator' => [
                'client.impersonate',
            ],
            'role:bill.manager' => [
                'bill.read', 'bill.create', 'bill.update', 'bill.delete',
            ],
            'role:plan.manager' => [
                'plan.read', 'plan.create', 'plan.update', 'plan.delete',
            ],
            'role:stock.manager' => [
                'part.read', 'part.create', 'part.update', 'part.delete',
                'move.read', 'move.create', 'move.update', 'move.delete',
                'model.read', 'model.create', 'model.update', 'model.delete',
            ],
            'role:document.user' => [
                'document.read', 'document.create',
            ],
            'role:document.manager' => [
                'role:document.user', 'document.update', 'document.delete',
                'document.generate', 'document.acceptance', 'document.invoice',
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
    }
}
