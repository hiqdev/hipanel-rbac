<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2020, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\rbac\tests\unit;

trait CheckAccessTrait
{
    public function setAssignments()
    {
        foreach ($this->auth->getAllItems() as $item) {
            $this->auth->setAssignment($item->name, $item->name);
        }
    }

    public function assertAccesses($userId, array $allowedPermissions)
    {
        $deniedPermissions = array_diff($this->getAllPermissions(), $allowedPermissions);

        $this->assertAccess($userId, true, $allowedPermissions);
        $this->assertAccess($userId, false, $deniedPermissions);
    }

    public function assertAccess($userId, $isAllowed, array $permissions)
    {
        foreach ($permissions as $permission) {
            $checked = $this->auth->checkAccess($userId, $permission);
            if ($checked !== $isAllowed) {
                var_dump(compact('userId', 'isAllowed', 'permission'));
            }
            $this->assertSame($isAllowed, $checked);
        }
    }

    protected $allPermissions;

    protected function getAllPermissions()
    {
        if (empty($this->allPermissions)) {
            $this->allPermissions = array_keys($this->auth->getPermissions());
            foreach ($this->allPermissions as $key => $permission) {
                if (strncmp('deny:', $permission, 5) === 0) {
                    unset($this->allPermissions[$key]);
                }
            }
        }

        return $this->allPermissions;
    }

    public function testNobody()
    {
        $this->assertAccesses('role:nobody', [
            'nothing',
        ]);
    }

    public function testUnauthorized()
    {
        $this->assertAccesses('', [
            'restore-password', 'deposit', 'server.pay', 'plan.read',
        ]);
    }

    public function testClient()
    {
        $this->assertAccesses('role:client', [
            'restore-password', 'deposit', 'have-goods',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close',
            'domain.read', 'domain.update', 'domain.pay', 'domain.push', 'domain.delete-agp', 'domain.set-nss',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.pay', 'certificate.push',
            'document.read', 'document.create', 'document.invoice',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',
            'server.read', 'server.pay', 'server.control-power', 'server.control-system', 'server.set-note',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'bill.read', 'plan.read', 'finance.read', 'price.read',
            'backup.read', 'backup.delete',
            'backuping.read', 'backuping.create', 'backuping.update', 'backuping.delete',
            'crontab.read', 'crontab.create', 'crontab.update', 'crontab.delete',
            'db.read', 'db.create', 'db.update', 'db.delete',
            'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete', 'hdomain.set-dns',
            'mail.read', 'mail.create', 'mail.update', 'mail.delete',
            'request.read', 'request.create', 'request.update', 'request.delete',
            'vhost.read', 'vhost.create', 'vhost.update', 'vhost.delete',
            'ip.read', 'service.read',
        ]);
    }

    public function testSupport()
    {
        $this->assertAccesses('role:support', [
            'access-subclients', 'support',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.list',
            'domain.read', 'domain.update', 'domain.delete-agp', 'domain.set-nss',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',
            'server.read', 'server.control-power', 'server.control-system', 'server.set-note',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'backup.read', 'backup.delete',
            'backuping.read', 'backuping.create', 'backuping.update', 'backuping.delete',
            'crontab.read', 'crontab.create', 'crontab.update', 'crontab.delete',
            'db.read', 'db.create', 'db.update', 'db.delete',
            'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete', 'hdomain.set-dns',
            'mail.read', 'mail.create', 'mail.update', 'mail.delete',
            'request.read', 'request.create', 'request.update', 'request.delete',
            'vhost.read', 'vhost.create', 'vhost.update', 'vhost.delete',
            'ip.read', 'service.read',
        ]);
    }

    public function testAdmin()
    {
        $this->assertAccesses('role:admin', [
            'access-subclients', 'support', 'admin',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.list',
            'domain.read', 'domain.update', 'domain.delete-agp', 'domain.set-nss',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',

            'server.read', 'server.create', 'server.update', 'server.delete', 'server.control-power',
            'server.control-system', 'server.wizzard', 'server.set-label', 'server.set-note', 'server.manage-settings',
            'server.see-label',

            'hub.read', 'hub.create', 'hub.update', 'hub.delete',
            'consumption.read',
            'stock.read',
            'part.read', 'part.create', 'part.update', 'part.delete',
            'move.read', 'move.create', 'move.update', 'move.delete', 'move.get-directions',
            'order.read',
            'model.read', 'model.create', 'model.update', 'model.delete',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'backup.read', 'backup.delete',
            'backuping.read', 'backuping.create', 'backuping.update', 'backuping.delete',
            'crontab.read', 'crontab.create', 'crontab.update', 'crontab.delete',
            'db.read', 'db.create', 'db.update', 'db.delete',
            'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete', 'hdomain.set-dns',
            'mail.read', 'mail.create', 'mail.update', 'mail.delete',
            'request.read', 'request.create', 'request.update', 'request.delete',
            'vhost.read', 'vhost.create', 'vhost.update', 'vhost.delete',
            'ip.read', 'ip.create', 'ip.update', 'ip.delete',
            'service.read', 'service.create', 'service.update', 'service.delete',
        ]);
    }

    public function testAccounter()
    {
        $this->assertAccesses('role:accounter', [
            'access-subclients', 'support', 'manage', 'access-reseller',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.create', 'client.update', 'client.delete', 'client.list',
            'client.set-tmp-pwd', 'contact.set-verified', 'client.block', 'client.unblock',
            'client.get-note', 'client.set-note', 'client.set-description',
            'bill.read',
            'purse.update',
            'sale.read', 'sale.delete',
            'plan.read', 'plan.create', 'plan.update', 'plan.delete', 'plan.force-read',
            'price.read', 'price.create', 'price.update', 'price.delete',
            'domain.read', 'domain.update', 'domain.delete',
            'domain.pay', 'domain.push', 'domain.delete-agp', 'domain.set-nss',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.delete', 'certificate.pay', 'certificate.push',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete', 'contact.force-verify',
            'server.read', 'server.pay', 'server.sell', 'server.control-power', 'server.control-system', 'server.enable-block', 'server.disable-block', 'server.set-label', 'server.set-note', 'server.see-label',
            'consumption.read', 'consumption.update', 'consumption.delete',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.generate', 'document.acceptance', 'document.invoice',
            'mailing.prepare', 'mailing.send',
            'stock.read',
            'hub.read', 'hub.sell',
            'part.read', 'part.create', 'part.update', 'part.delete',
            'move.read', 'move.create', 'move.update', 'move.delete', 'move.get-directions',
            'model.read', 'model.create', 'model.update', 'model.delete',
            'order.read',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'bill.read', 'plan.read', 'finance.read',
            'backup.read', 'backup.delete',
            'backuping.read', 'backuping.create', 'backuping.update', 'backuping.delete',
            'crontab.read', 'crontab.create', 'crontab.update', 'crontab.delete',
            'db.read', 'db.create', 'db.update', 'db.delete',
            'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete', 'hdomain.set-dns',
            'mail.read', 'mail.create', 'mail.update', 'mail.delete',
            'request.read', 'request.create', 'request.update', 'request.delete',
            'vhost.read', 'vhost.create', 'vhost.update', 'vhost.delete',
            'ip.read', 'service.read', 'client.notify',
        ]);
    }

    public function testManager()
    {
        $this->assertAccesses('role:manager', [
            'access-subclients', 'support', 'manage', 'access-reseller',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.create', 'client.update', 'client.delete', 'client.list',
            'client.set-tmp-pwd', 'contact.set-verified', 'client.block', 'client.unblock',
            'client.get-note', 'client.set-note', 'client.set-description',
            'bill.read',
            'purse.update',
            'sale.read', 'sale.delete',
            'plan.read', 'plan.create', 'plan.update', 'plan.delete', 'plan.force-read',
            'price.read', 'price.create', 'price.update', 'price.delete',
            'domain.read', 'domain.update', 'domain.delete', 'domain.delete-agp', 'domain.set-nss',
            'domain.pay', 'domain.push',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.delete', 'certificate.pay', 'certificate.push',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete', 'contact.force-verify',
            'server.read', 'server.pay', 'server.sell', 'server.control-power', 'server.control-system', 'server.enable-block', 'server.disable-block', 'server.set-label', 'server.set-note',
            'server.see-label',
            'consumption.read', 'consumption.update', 'consumption.delete',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.generate', 'document.acceptance', 'document.invoice',
            'mailing.prepare', 'mailing.send',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'bill.read', 'plan.read', 'finance.read',
            'backup.read', 'backup.delete',
            'backuping.read', 'backuping.create', 'backuping.update', 'backuping.delete',
            'crontab.read', 'crontab.create', 'crontab.update', 'crontab.delete',
            'db.read', 'db.create', 'db.update', 'db.delete',
            'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete', 'hdomain.set-dns',
            'mail.read', 'mail.create', 'mail.update', 'mail.delete',
            'request.read', 'request.create', 'request.update', 'request.delete',
            'vhost.read', 'vhost.create', 'vhost.update', 'vhost.delete',
            'ip.read', 'service.read', 'client.notify',
        ]);
    }

    public function testReseller()
    {
        $this->assertAccesses('role:reseller', [
            'deposit', 'have-goods',
            'access-subclients', 'support', 'manage', 'resell',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.create', 'client.update', 'client.delete', 'client.list',
            'client.set-tmp-pwd', 'contact.set-verified', 'client.block', 'client.unblock',
            'client.get-note', 'client.set-note', 'client.set-description',
            'bill.read', 'bill.create', 'bill.update', 'bill.delete',
            'plan.read', 'plan.create', 'plan.update', 'plan.delete', 'plan.force-read',
            'price.read', 'price.create', 'price.update', 'price.delete',
            'sale.read', 'sale.delete',
            'purse.update',
            'domain.read', 'domain.update', 'domain.delete', 'domain.pay', 'domain.push', 'domain.delete-agp', 'domain.set-nss',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.delete', 'certificate.pay', 'certificate.push',
            'server.read', 'server.pay', 'server.sell', 'server.control-power', 'server.control-system', 'server.enable-block', 'server.disable-block', 'server.set-label', 'server.set-note',
            'server.see-label',
            'consumption.read', 'consumption.update', 'consumption.delete',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.generate', 'document.acceptance', 'document.invoice',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete', 'contact.force-verify',
            'mailing.prepare', 'mailing.send',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'bill.read', 'plan.read', 'finance.read',
            'backup.read', 'backup.delete',
            'backuping.read', 'backuping.create', 'backuping.update', 'backuping.delete',
            'crontab.read', 'crontab.create', 'crontab.update', 'crontab.delete',
            'db.read', 'db.create', 'db.update', 'db.delete',
            'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete', 'hdomain.set-dns',
            'mail.read', 'mail.create', 'mail.update', 'mail.delete',
            'request.read', 'request.create', 'request.update', 'request.delete',
            'vhost.read', 'vhost.create', 'vhost.update', 'vhost.delete',
            'ip.read', 'service.read', 'client.notify',
            'integration.read', 'integration.create', 'integration.update', 'integration.delete',
        ]);
    }

    public function testEmployee()
    {
        $this->assertAccesses('role:employee', [
            'restore-password', 'deposit',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',
            'document.read', 'document.create', 'document.acceptance',
            'bill.read', 'employee.read', 'finance.read',
        ]);
    }

    public function testMighty()
    {
        $this->auth->setAssignments('role:admin,role:manager,role:document.master,role:finance.master,role:stock.master,role:config.manager,domain.freeze,domain.force-push,domain.delete,employee.read,domain.force-send-foa,deny:deposit', 'user:mighty');

        $this->assertAccesses('user:mighty', [
            'access-subclients', 'access-reseller',
            'support', 'manage', 'admin',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close', 'ticket.update', 'ticket.delete',
            'client.read', 'client.create', 'client.update', 'client.delete', 'client.list',
            'client.set-tmp-pwd', 'contact.set-verified', 'client.block', 'client.unblock',
            'client.get-note', 'client.set-note', 'client.set-description',
            'bill.read', 'bill.create', 'bill.update', 'bill.delete',
            'plan.read', 'plan.create', 'plan.update', 'plan.delete', 'plan.force-read',
            'price.read', 'price.create', 'price.update', 'price.delete',
            'sale.read', 'sale.delete',
            'domain.freeze',
            'domain.read', 'domain.update', 'domain.delete', 'domain.delete-agp', 'domain.set-nss',
            'domain.pay', 'domain.push', 'domain.force-push', 'domain.force-send-foa',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.delete', 'certificate.pay', 'certificate.push',

            'server.read', 'server.create', 'server.update', 'server.delete', 'server.pay', 'server.sell',
            'server.control-power', 'server.control-system', 'server.wizzard', 'server.manage-settings',

            'purse.update',

            'server.enable-block', 'server.disable-block', 'server.set-label', 'server.set-note', 'server.see-label',
            'hub.read', 'hub.create', 'hub.update', 'hub.delete',
            'config.read', 'config.create', 'config.update', 'config.delete',
            'consumption.read', 'consumption.update', 'consumption.delete',
            'document.read', 'document.create', 'document.update', 'document.delete',
            'document.generate', 'document.generate-all',
            'document.acceptance', 'document.invoice',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete', 'contact.force-verify',
            'mailing.prepare', 'mailing.send',
            'stock.read',
            'part.read', 'part.create', 'part.update', 'part.delete',
            'order.read', 'order.read', 'order.create', 'order.update', 'order.delete', 'order.read-profits',
            'move.read', 'move.create', 'move.update', 'move.delete', 'move.read-all', 'move.get-directions',
            'model.read', 'model.create', 'model.update', 'model.delete',
            'employee.read', 'client.notify',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'bill.read', 'plan.read', 'finance.read',
            'backup.read', 'backup.delete',
            'backuping.read', 'backuping.create', 'backuping.update', 'backuping.delete',
            'crontab.read', 'crontab.create', 'crontab.update', 'crontab.delete',
            'db.read', 'db.create', 'db.update', 'db.delete',
            'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete', 'hdomain.set-dns',
            'mail.read', 'mail.create', 'mail.update', 'mail.delete',
            'request.read', 'request.create', 'request.update', 'request.delete',
            'vhost.read', 'vhost.create', 'vhost.update', 'vhost.delete',
            'ip.read', 'ip.create', 'ip.update', 'ip.delete',
            'service.read', 'service.create', 'service.update', 'service.delete',
        ]);
    }

    public function testLimited()
    {
        $this->auth->setAssignments('role:client,deny:deposit,deny:domain.push,deny:server.pay,deny:server.read,deny:server.control-power,deny:server.control-system,deny:server.set-note,deny:ip.read,deny:service.read,deny:domain.delete-agp,deny:domain.set-nss', 'user:limited');

        $this->assertAccesses('user:limited', [
            'have-goods',
            'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close',
            'domain.read', 'domain.update', 'domain.pay',
            'dns.create', 'dns.read', 'dns.update', 'dns.delete',
            'certificate.read', 'certificate.create', 'certificate.update', 'certificate.pay', 'certificate.push',
            'document.read', 'document.create', 'document.invoice',
            'contact.read', 'contact.create', 'contact.update', 'contact.delete',
            'account.read', 'account.create', 'account.update', 'account.delete',
            'restore-password', 'bill.read', 'plan.read', 'finance.read', 'price.read',
            'backup.read', 'backup.delete',
            'backuping.read', 'backuping.create', 'backuping.update', 'backuping.delete',
            'crontab.read', 'crontab.create', 'crontab.update', 'crontab.delete',
            'db.read', 'db.create', 'db.update', 'db.delete',
            'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete', 'hdomain.set-dns',
            'mail.read', 'mail.create', 'mail.update', 'mail.delete',
            'request.read', 'request.create', 'request.update', 'request.delete',
            'vhost.read', 'vhost.create', 'vhost.update', 'vhost.delete',
        ]);
    }

    public function testJuniorManager()
    {
        $this->assertAccesses('role:junior-manager', [
            'access-subclients', 'access-reseller',
            'client.read', 'server.read', 'consumption.read',
            'plan.force-read', 'plan.read', 'document.read', 'finance.read',
            'stock.read', 'part.read', 'move.read', 'model.read', 'order.read', 'move.get-directions',
            'hub.read', 'client.list', 'contact.read', 'bill.read',
        ]);
    }

    public function testBetaTester()
    {
        $this->auth->setAssignments('role:beta-tester', 'user:beta-tester');

        $this->assertAccesses('user:beta-tester', [
            'test.beta',
        ]);
    }

    public function testAlphaTester()
    {
        $this->auth->setAssignments('role:alpha-tester', 'user:alpha-tester');

        $this->assertAccesses('user:alpha-tester', [
            'test.alpha', 'test.beta',
        ]);
    }

    public function testSuperPowers()
    {
        $this->assertAccesses('role:superpowers', [
            'see-no-mans', 'part.sell', 'client.set-others-allowed-ips',
        ]);
    }
}
