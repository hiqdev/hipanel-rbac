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
            // SERVER MODULE
            'role:server.user' => [
                'server.read', 'server.power-management', 'server.system-management', 'server.set-note',
            ],
            'role:server.admin' => [
                'role:server.user', 'server.create', 'server.update', 'server.delete', 'server.wizzard', 'server.set-label',
            ],
            'role:server.manager' => [
                'role:server.user', 'server.enable-block', 'server.disable-block', 'server.pay', 'server.sell', 'server.set-label',
            ],
            'role:hub.user' => [
                'hub.read',
            ],
            'role:hub.admin' => [
                'hub.read', 'hub.create', 'hub.update', 'hub.delete',
            ],
            'role:hub.manager' => [
                'hub.read', 'hub.sell',
            ],
            // HOSTING MODULE
            'role:account.user' => [
                'account.read', 'account.create', 'account.update', 'account.delete',
            ],
            'role:backup.user' => [
                'backup.read', 'backup.delete',
            ],
            'role:backuping.user' => [
                'backuping.read', 'backuping.create', 'backuping.update', 'backuping.delete',
            ],
            'role:crontab.user' => [
                'crontab.read', 'crontab.create', 'crontab.update', 'crontab.delete',
            ],
            'role:db.user' => [
                'db.read', 'db.create', 'db.update', 'db.delete',
            ],
            'role:hdomain.user' => [
                'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete',
            ],
            'role:ip.admin' => [
                'ip.read', 'ip.create', 'ip.update', 'ip.delete',
            ],
            'role:mail.user' => [
                'mail.read', 'mail.create', 'mail.update', 'mail.delete',
            ],
            'role:request.user' => [
                'request.read', 'request.create', 'request.update', 'request.delete',
            ],
            'role:service.admin' => [
                'service.read', 'service.create', 'service.update', 'service.delete',
            ],
            'role:vhost.user' => [
                'vhost.read', 'vhost.create', 'vhost.update', 'vhost.delete',
            ],
            'role:hosting.read' => [
                'account.read', 'backup.read', 'backuping.read',
                'crontab.read', 'db.read', 'hdomain.read',
                'ip.read', 'mail.read', 'request.read','service.read',
                'vhost.read',
            ],
            'role:hosting.user' => [
                'role:account.user', 'role:backup.user', 'role:backuping.user',
                'role:crontab.user', 'role:db.user', 'role:hdomain.user',
                'role:mail.user', 'role:request.user', 'role:vhost.user',
                'ip.read', 'service.read',
            ],
            'role:hosting.admin' => [
                'role:account.user', 'role:backup.user', 'role:backuping.user',
                'role:crontab.user', 'role:db.user', 'role:hdomain.user',
                'role:mail.user', 'role:request.user', 'role:vhost.user',
                'role:ip.admin', 'role:service.admin',
            ],
            // FINANCE MODULE
                // BILL
            'role:bill.user' => [
                'bill.read', 'deposit',
            ],
            'role:bill.manager' => [
                'bill.read',
            ],
            'role:bill.master' => [
                'bill.read', 'bill.create', 'bill.update', 'bill.delete', 'deposit',
            ],
                // PLAN
            'role:plan.user' => [
                'plan.read',
            ],
            'role:plan.manager' => [
                'plan.read', 'plan.create', 'plan.update', 'plan.delete',
            ],
            'role:plan.master' => [
                'plan.read', 'plan.create', 'plan.update', 'plan.delete',
            ],
                // DOCUMENT
            'role:document.user' => [
                'document.read', 'document.create', 'document.invoice',
            ],
            'role:document.employee' => [
                'document.read', 'document.create', 'document.acceptance',
            ],
            'role:document.manager' => [
                'role:document.user', 'document.update', 'document.delete',
                'document.generate', 'document.acceptance', 'document.invoice',
            ],
            'role:document.master' => [
                'document.generate-all',
            ],
                // SALE
            'role:sale.user' => [
                'sale.read',
            ],
            'role:sale.manager' => [
                'sale.read', 'sale.delete',
            ],
            'role:sale.master' => [
                'sale.read', 'sale.delete',
            ],
                // FINANCE
            'role:finance.read' => [
                'plan.read', 'bill.read', 'document.read', 'finance.read',
            ],
            'role:finance.user' => [
                'role:finance.read',
                'role:bill.user',
                'role:plan.user',
                'role:document.user',
            ],
            'role:finance.employee' => [
                'role:bill.user',
                'role:document.employee',
                'finance.read',
            ],
            'role:finance.manager' => [
                'role:finance.read',
                'role:bill.manager',
                'role:plan.manager',
                'role:document.manager',
                'role:sale.manager',
                'finance.read',
            ],
            'role:finance.master' => [
                'role:finance.manager',
                'role:bill.master',
                'role:plan.master',
                'role:document.manager',
                'role:sale.master',
            ],
            // STOCK MODULE
            'role:stock.user' => [
                'stock.read', 'part.read', 'move.read', 'model.read',
            ],
            'role:stock.manager' => [
                'role:stock.user',
                'part.create', 'part.update', 'part.delete',
                'move.create', 'move.update', 'move.delete',
                'model.create', 'model.update', 'model.delete',
            ],
            'role:stock.master' => [
                'role:stock.manager', 'move.read-all',
            ],
            // ROLES
            'role:client' => [
                'role:unauthorized', 'have-goods',
                'role:ticket.user',
                'role:domain.user', 'domain.pay', 'domain.push',
                'role:dns.user',
                'role:certificate.user', 'certificate.pay', 'certificate.push',
                'role:contact.user', 'role:document.user', 'document.invoice',
                'role:server.user', 'server.pay',
                'role:hosting.user',
                'role:finance.user',
            ],
            'role:support' => [
                'access-subclients', 'support',
                'role:ticket.manager',
                'role:client.support',
                'role:domain.user',
                'role:dns.user',
                'role:certificate.user',
                'role:contact.user',
                'role:server.user',
                'role:hosting.user',
                'plan.read', 'finance.read',
            ],
            'role:admin' => [
                'admin',
                'role:support',
                'role:hub.admin',
                'role:stock.manager',
                'role:server.admin',
                'role:hosting.admin',
            ],
            'role:manager' => [
                'manage',
                'role:support',
                'role:document.manager', 'role:stock.manager',
                'role:domain.manager', 'domain.pay', 'domain.push',
                'role:server.manager',
                'role:hub.manager',
                'role:dns.manager',
                'role:certificate.manager', 'certificate.pay', 'certificate.push',
                'role:contact.user', 'contact.force-verify',
                'role:client.manager',
                'role:finance.manager',
                'mailing.prepare', 'mailing.send',
            ],
            'role:reseller' => [
                'have-goods',
                'role:manager',
                'role:finance.master',
                'resell',
            ],
            'role:owner' => [
                'role:manager',
                'role:bill.master',
                'resell', 'own',
            ],
            'role:superpowers' => [
                'see-no-mans', 'part.sell',
            ],
            'role:employee' => [
                'restore-password',
                'role:contact.user',
                'role:finance.employee',
                'employee.read',
            ],
            /// LIMITED ROLES
            'role:junior-manager' => [
                'access-subclients',
                'role:hub.user',
                'role:stock.user',
                'role:finance.read',
                'client.read',
                'server.read',
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
                'domain.force-send-foa',
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
