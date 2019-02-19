<?php
return [
    'role:nobody' => [
        'type' => 1,
        'children' => [
            'nothing',
        ],
    ],
    'role:unauthorized' => [
        'type' => 1,
        'children' => [
            'restore-password',
            'deposit',
        ],
    ],
    'role:client.support' => [
        'type' => 1,
        'children' => [
            'client.read',
            'client.list',
        ],
    ],
    'role:client.manager' => [
        'type' => 1,
        'children' => [
            'role:client.support',
            'client.create',
            'client.update',
            'client.delete',
            'contact.set-verified',
            'client.block',
            'client.unblock',
            'client.get-note',
            'client.set-note',
            'client.set-description',
        ],
    ],
    'role:employee.manager' => [
        'type' => 1,
        'children' => [
            'employee.read',
            'employee.create',
            'employee.update',
            'employee.delete',
            'document.acceptance',
        ],
    ],
    'role:client.impersonator' => [
        'type' => 1,
        'children' => [
            'client.impersonate',
        ],
    ],
    'role:contact.user' => [
        'type' => 1,
        'children' => [
            'contact.read',
            'contact.create',
            'contact.update',
            'contact.delete',
        ],
    ],
    'role:server.user' => [
        'type' => 1,
        'children' => [
            'server.read',
            'server.control-power',
            'server.control-system',
            'server.set-note',
        ],
    ],
    'role:server.admin' => [
        'type' => 1,
        'children' => [
            'role:server.user',
            'server.create',
            'server.update',
            'server.delete',
            'server.wizzard',
            'server.set-label',
            'consumption.read',
            'server.manage-settings',
        ],
    ],
    'role:server.manager' => [
        'type' => 1,
        'children' => [
            'role:server.user',
            'server.enable-block',
            'server.disable-block',
            'server.pay',
            'server.sell',
            'server.set-label',
        ],
    ],
    'role:hub.user' => [
        'type' => 1,
        'children' => [
            'hub.read',
        ],
    ],
    'role:hub.admin' => [
        'type' => 1,
        'children' => [
            'hub.read',
            'hub.create',
            'hub.update',
            'hub.delete',
        ],
    ],
    'role:hub.manager' => [
        'type' => 1,
        'children' => [
            'hub.read',
            'hub.sell',
        ],
    ],
    'role:consumption.user' => [
        'type' => 1,
        'children' => [
            'consumption.read',
        ],
    ],
    'role:consumption.manager' => [
        'type' => 1,
        'children' => [
            'consumption.read',
            'consumption.delete',
        ],
    ],
    'role:account.user' => [
        'type' => 1,
        'children' => [
            'account.read',
            'account.create',
            'account.update',
            'account.delete',
        ],
    ],
    'role:backup.user' => [
        'type' => 1,
        'children' => [
            'backup.read',
            'backup.delete',
        ],
    ],
    'role:backuping.user' => [
        'type' => 1,
        'children' => [
            'backuping.read',
            'backuping.create',
            'backuping.update',
            'backuping.delete',
        ],
    ],
    'role:crontab.user' => [
        'type' => 1,
        'children' => [
            'crontab.read',
            'crontab.create',
            'crontab.update',
            'crontab.delete',
        ],
    ],
    'role:db.user' => [
        'type' => 1,
        'children' => [
            'db.read',
            'db.create',
            'db.update',
            'db.delete',
        ],
    ],
    'role:hdomain.user' => [
        'type' => 1,
        'children' => [
            'hdomain.read',
            'hdomain.create',
            'hdomain.update',
            'hdomain.delete',
        ],
    ],
    'role:ip.admin' => [
        'type' => 1,
        'children' => [
            'ip.read',
            'ip.create',
            'ip.update',
            'ip.delete',
        ],
    ],
    'role:mail.user' => [
        'type' => 1,
        'children' => [
            'mail.read',
            'mail.create',
            'mail.update',
            'mail.delete',
        ],
    ],
    'role:request.user' => [
        'type' => 1,
        'children' => [
            'request.read',
            'request.create',
            'request.update',
            'request.delete',
        ],
    ],
    'role:service.admin' => [
        'type' => 1,
        'children' => [
            'service.read',
            'service.create',
            'service.update',
            'service.delete',
        ],
    ],
    'role:vhost.user' => [
        'type' => 1,
        'children' => [
            'vhost.read',
            'vhost.create',
            'vhost.update',
            'vhost.delete',
        ],
    ],
    'role:hosting.reader' => [
        'type' => 1,
        'children' => [
            'account.read',
            'backup.read',
            'backuping.read',
            'crontab.read',
            'db.read',
            'hdomain.read',
            'ip.read',
            'mail.read',
            'request.read',
            'service.read',
            'vhost.read',
        ],
    ],
    'role:hosting.user' => [
        'type' => 1,
        'children' => [
            'role:account.user',
            'role:backup.user',
            'role:backuping.user',
            'role:crontab.user',
            'role:db.user',
            'role:hdomain.user',
            'role:mail.user',
            'role:request.user',
            'role:vhost.user',
            'ip.read',
            'service.read',
        ],
    ],
    'role:hosting.admin' => [
        'type' => 1,
        'children' => [
            'role:account.user',
            'role:backup.user',
            'role:backuping.user',
            'role:crontab.user',
            'role:db.user',
            'role:hdomain.user',
            'role:mail.user',
            'role:request.user',
            'role:vhost.user',
            'role:ip.admin',
            'role:service.admin',
        ],
    ],
    'role:bill.user' => [
        'type' => 1,
        'children' => [
            'bill.read',
            'deposit',
        ],
    ],
    'role:bill.manager' => [
        'type' => 1,
        'children' => [
            'bill.read',
        ],
    ],
    'role:bill.master' => [
        'type' => 1,
        'children' => [
            'bill.read',
            'bill.create',
            'bill.update',
            'bill.delete',
            'deposit',
        ],
    ],
    'role:requisites.user' => [
        'type' => 1,
        'children' => [
            'requisites.read',
        ],
    ],
    'role:requisites.manager' => [
        'type' => 1,
        'children' => [
            'requisites.read',
            'requisites.create',
            'requisites.update',
            'requisites.delete',
        ],
    ],
    'role:plan.user' => [
        'type' => 1,
        'children' => [
            'plan.read',
            'price.read',
        ],
    ],
    'role:plan.manager' => [
        'type' => 1,
        'children' => [
            'plan.read',
            'plan.create',
            'plan.update',
            'plan.delete',
            'plan.force-read',
            'price.read',
            'price.update',
            'price.delete',
            'price.create',
        ],
    ],
    'role:plan.master' => [
        'type' => 1,
        'children' => [
            'role:plan.manager',
        ],
    ],
    'role:document.user' => [
        'type' => 1,
        'children' => [
            'document.read',
            'document.create',
            'document.invoice',
        ],
    ],
    'role:document.employee' => [
        'type' => 1,
        'children' => [
            'document.read',
            'document.create',
            'document.acceptance',
        ],
    ],
    'role:document.manager' => [
        'type' => 1,
        'children' => [
            'role:document.user',
            'document.update',
            'document.delete',
            'document.generate',
            'document.acceptance',
            'document.invoice',
        ],
    ],
    'role:document.master' => [
        'type' => 1,
        'children' => [
            'document.generate-all',
        ],
    ],
    'role:sale.user' => [
        'type' => 1,
        'children' => [
            'sale.read',
        ],
    ],
    'role:sale.manager' => [
        'type' => 1,
        'children' => [
            'sale.read',
            'sale.delete',
        ],
    ],
    'role:sale.master' => [
        'type' => 1,
        'children' => [
            'sale.read',
            'sale.delete',
        ],
    ],
    'role:finance.reader' => [
        'type' => 1,
        'children' => [
            'plan.read',
            'bill.read',
            'document.read',
            'finance.read',
        ],
    ],
    'role:finance.user' => [
        'type' => 1,
        'children' => [
            'role:finance.reader',
            'role:bill.user',
            'role:plan.user',
            'role:document.user',
        ],
    ],
    'role:finance.employee' => [
        'type' => 1,
        'children' => [
            'role:bill.user',
            'role:document.employee',
            'finance.read',
        ],
    ],
    'role:finance.manager' => [
        'type' => 1,
        'children' => [
            'role:finance.reader',
            'role:bill.manager',
            'role:plan.manager',
            'role:document.manager',
            'role:sale.manager',
            'finance.read',
        ],
    ],
    'role:finance.master' => [
        'type' => 1,
        'children' => [
            'role:finance.manager',
            'role:bill.master',
            'role:plan.master',
            'role:document.manager',
            'role:sale.master',
        ],
    ],
    'role:stock.user' => [
        'type' => 1,
        'children' => [
            'stock.read',
            'part.read',
            'move.read',
            'model.read',
        ],
    ],
    'role:stock.manager' => [
        'type' => 1,
        'children' => [
            'role:stock.user',
            'part.create',
            'part.update',
            'part.delete',
            'move.create',
            'move.update',
            'move.delete',
            'model.create',
            'model.update',
            'model.delete',
        ],
    ],
    'role:stock.master' => [
        'type' => 1,
        'children' => [
            'role:stock.manager',
            'move.read-all',
        ],
    ],
    'role:client' => [
        'type' => 1,
        'children' => [
            'role:unauthorized',
            'have-goods',
            'role:ticket.user',
            'role:domain.user',
            'domain.pay',
            'domain.push',
            'role:dns.user',
            'role:certificate.user',
            'certificate.pay',
            'certificate.push',
            'role:contact.user',
            'role:document.user',
            'document.invoice',
            'role:server.user',
            'server.pay',
            'role:hosting.user',
            'role:finance.user',
        ],
    ],
    'role:support' => [
        'type' => 1,
        'children' => [
            'access-subclients',
            'support',
            'role:ticket.manager',
            'role:client.support',
            'role:domain.user',
            'role:dns.user',
            'role:certificate.user',
            'role:contact.user',
            'role:server.user',
            'role:hosting.user',
        ],
    ],
    'role:admin' => [
        'type' => 1,
        'children' => [
            'admin',
            'role:support',
            'role:hub.admin',
            'role:stock.manager',
            'role:server.admin',
            'role:hosting.admin',
        ],
    ],
    'role:accounter' => [
        'type' => 1,
        'children' => [
            'role:manager',
            'role:hub.manager',
            'role:stock.manager',
        ],
    ],
    'role:manager' => [
        'type' => 1,
        'children' => [
            'manage',
            'access-reseller',
            'role:support',
            'role:document.manager',
            'role:domain.manager',
            'domain.pay',
            'domain.push',
            'role:server.manager',
            'role:consumption.manager',
            'role:dns.manager',
            'role:certificate.manager',
            'certificate.pay',
            'certificate.push',
            'role:contact.user',
            'contact.force-verify',
            'role:client.manager',
            'role:finance.manager',
            'mailing.prepare',
            'mailing.send',
            'client.set-tmp-pwd',
        ],
    ],
    'role:reseller' => [
        'type' => 1,
        'children' => [
            'have-goods',
            'resell',
            'role:finance.master',
            'deny:access-reseller',
            'role:manager',
        ],
    ],
    'role:owner' => [
        'type' => 1,
        'children' => [
            'role:manager',
            'role:bill.master',
            'role:stock.manager',
            'resell',
            'own',
        ],
    ],
    'role:superpowers' => [
        'type' => 1,
        'children' => [
            'see-no-mans',
            'part.sell',
            'client.set-others-allowed-ips',
        ],
    ],
    'role:employee' => [
        'type' => 1,
        'children' => [
            'restore-password',
            'role:contact.user',
            'role:finance.employee',
            'employee.read',
        ],
    ],
    'role:junior-manager' => [
        'type' => 1,
        'children' => [
            'access-subclients',
            'access-reseller',
            'role:hub.user',
            'role:stock.user',
            'plan.force-read',
            'plan.read',
            'document.read',
            'finance.read',
            'client.read',
            'server.read',
            'consumption.read',
        ],
    ],
    'role:domain.user' => [
        'type' => 1,
        'children' => [
            'domain.read',
            'domain.update',
        ],
    ],
    'role:domain.manager' => [
        'type' => 1,
        'children' => [
            'role:domain.user',
            'domain.delete',
        ],
    ],
    'role:domain.master' => [
        'type' => 1,
        'children' => [
            'role:domain.manager',
            'domain.freeze',
            'domain.unfreeze',
            'domain.push',
            'domain.force-push',
            'domain.force-send-foa',
        ],
    ],
    'role:dns.user' => [
        'type' => 1,
        'children' => [
            'dns.create',
            'dns.read',
            'dns.update',
            'dns.delete',
        ],
    ],
    'role:dns.manager' => [
        'type' => 1,
        'children' => [
            'role:dns.user',
        ],
    ],
    'role:certificate.user' => [
        'type' => 1,
        'children' => [
            'certificate.read',
            'certificate.create',
            'certificate.update',
        ],
    ],
    'role:certificate.manager' => [
        'type' => 1,
        'children' => [
            'role:certificate.user',
            'certificate.delete',
        ],
    ],
    'role:ticket.user' => [
        'type' => 1,
        'children' => [
            'ticket.read',
            'ticket.create',
            'ticket.answer',
            'ticket.close',
        ],
    ],
    'role:ticket.manager' => [
        'type' => 1,
        'children' => [
            'role:ticket.user',
            'ticket.update',
            'ticket.delete',
        ],
    ],
    'role:beta-tester' => [
        'type' => 1,
        'children' => [
            'test.beta',
        ],
    ],
    'role:alpha-tester' => [
        'type' => 1,
        'children' => [
            'role:beta-tester',
            'test.alpha',
        ],
    ],
    'nothing' => [
        'type' => 2,
    ],
    'deny:nothing' => [
        'type' => 2,
    ],
    'restore-password' => [
        'type' => 2,
    ],
    'deny:restore-password' => [
        'type' => 2,
    ],
    'deposit' => [
        'type' => 2,
    ],
    'deny:deposit' => [
        'type' => 2,
    ],
    'client.read' => [
        'type' => 2,
    ],
    'deny:client.read' => [
        'type' => 2,
    ],
    'client.list' => [
        'type' => 2,
    ],
    'deny:client.list' => [
        'type' => 2,
    ],
    'client.create' => [
        'type' => 2,
    ],
    'deny:client.create' => [
        'type' => 2,
    ],
    'client.update' => [
        'type' => 2,
    ],
    'deny:client.update' => [
        'type' => 2,
    ],
    'client.delete' => [
        'type' => 2,
    ],
    'deny:client.delete' => [
        'type' => 2,
    ],
    'contact.set-verified' => [
        'type' => 2,
    ],
    'deny:contact.set-verified' => [
        'type' => 2,
    ],
    'client.block' => [
        'type' => 2,
    ],
    'deny:client.block' => [
        'type' => 2,
    ],
    'client.unblock' => [
        'type' => 2,
    ],
    'deny:client.unblock' => [
        'type' => 2,
    ],
    'client.get-note' => [
        'type' => 2,
    ],
    'deny:client.get-note' => [
        'type' => 2,
    ],
    'client.set-note' => [
        'type' => 2,
    ],
    'deny:client.set-note' => [
        'type' => 2,
    ],
    'client.set-description' => [
        'type' => 2,
    ],
    'deny:client.set-description' => [
        'type' => 2,
    ],
    'employee.read' => [
        'type' => 2,
    ],
    'deny:employee.read' => [
        'type' => 2,
    ],
    'employee.create' => [
        'type' => 2,
    ],
    'deny:employee.create' => [
        'type' => 2,
    ],
    'employee.update' => [
        'type' => 2,
    ],
    'deny:employee.update' => [
        'type' => 2,
    ],
    'employee.delete' => [
        'type' => 2,
    ],
    'deny:employee.delete' => [
        'type' => 2,
    ],
    'document.acceptance' => [
        'type' => 2,
    ],
    'deny:document.acceptance' => [
        'type' => 2,
    ],
    'client.impersonate' => [
        'type' => 2,
    ],
    'deny:client.impersonate' => [
        'type' => 2,
    ],
    'contact.read' => [
        'type' => 2,
    ],
    'deny:contact.read' => [
        'type' => 2,
    ],
    'contact.create' => [
        'type' => 2,
    ],
    'deny:contact.create' => [
        'type' => 2,
    ],
    'contact.update' => [
        'type' => 2,
    ],
    'deny:contact.update' => [
        'type' => 2,
    ],
    'contact.delete' => [
        'type' => 2,
    ],
    'deny:contact.delete' => [
        'type' => 2,
    ],
    'server.read' => [
        'type' => 2,
    ],
    'deny:server.read' => [
        'type' => 2,
    ],
    'server.control-power' => [
        'type' => 2,
    ],
    'deny:server.control-power' => [
        'type' => 2,
    ],
    'server.control-system' => [
        'type' => 2,
    ],
    'deny:server.control-system' => [
        'type' => 2,
    ],
    'server.set-note' => [
        'type' => 2,
    ],
    'deny:server.set-note' => [
        'type' => 2,
    ],
    'server.create' => [
        'type' => 2,
    ],
    'deny:server.create' => [
        'type' => 2,
    ],
    'server.update' => [
        'type' => 2,
    ],
    'deny:server.update' => [
        'type' => 2,
    ],
    'server.delete' => [
        'type' => 2,
    ],
    'deny:server.delete' => [
        'type' => 2,
    ],
    'server.wizzard' => [
        'type' => 2,
    ],
    'deny:server.wizzard' => [
        'type' => 2,
    ],
    'server.set-label' => [
        'type' => 2,
    ],
    'deny:server.set-label' => [
        'type' => 2,
    ],
    'consumption.read' => [
        'type' => 2,
    ],
    'deny:consumption.read' => [
        'type' => 2,
    ],
    'server.manage-settings' => [
        'type' => 2,
    ],
    'deny:server.manage-settings' => [
        'type' => 2,
    ],
    'server.enable-block' => [
        'type' => 2,
    ],
    'deny:server.enable-block' => [
        'type' => 2,
    ],
    'server.disable-block' => [
        'type' => 2,
    ],
    'deny:server.disable-block' => [
        'type' => 2,
    ],
    'server.pay' => [
        'type' => 2,
    ],
    'deny:server.pay' => [
        'type' => 2,
    ],
    'server.sell' => [
        'type' => 2,
    ],
    'deny:server.sell' => [
        'type' => 2,
    ],
    'hub.read' => [
        'type' => 2,
    ],
    'deny:hub.read' => [
        'type' => 2,
    ],
    'hub.create' => [
        'type' => 2,
    ],
    'deny:hub.create' => [
        'type' => 2,
    ],
    'hub.update' => [
        'type' => 2,
    ],
    'deny:hub.update' => [
        'type' => 2,
    ],
    'hub.delete' => [
        'type' => 2,
    ],
    'deny:hub.delete' => [
        'type' => 2,
    ],
    'hub.sell' => [
        'type' => 2,
    ],
    'deny:hub.sell' => [
        'type' => 2,
    ],
    'consumption.delete' => [
        'type' => 2,
    ],
    'deny:consumption.delete' => [
        'type' => 2,
    ],
    'account.read' => [
        'type' => 2,
    ],
    'deny:account.read' => [
        'type' => 2,
    ],
    'account.create' => [
        'type' => 2,
    ],
    'deny:account.create' => [
        'type' => 2,
    ],
    'account.update' => [
        'type' => 2,
    ],
    'deny:account.update' => [
        'type' => 2,
    ],
    'account.delete' => [
        'type' => 2,
    ],
    'deny:account.delete' => [
        'type' => 2,
    ],
    'backup.read' => [
        'type' => 2,
    ],
    'deny:backup.read' => [
        'type' => 2,
    ],
    'backup.delete' => [
        'type' => 2,
    ],
    'deny:backup.delete' => [
        'type' => 2,
    ],
    'backuping.read' => [
        'type' => 2,
    ],
    'deny:backuping.read' => [
        'type' => 2,
    ],
    'backuping.create' => [
        'type' => 2,
    ],
    'deny:backuping.create' => [
        'type' => 2,
    ],
    'backuping.update' => [
        'type' => 2,
    ],
    'deny:backuping.update' => [
        'type' => 2,
    ],
    'backuping.delete' => [
        'type' => 2,
    ],
    'deny:backuping.delete' => [
        'type' => 2,
    ],
    'crontab.read' => [
        'type' => 2,
    ],
    'deny:crontab.read' => [
        'type' => 2,
    ],
    'crontab.create' => [
        'type' => 2,
    ],
    'deny:crontab.create' => [
        'type' => 2,
    ],
    'crontab.update' => [
        'type' => 2,
    ],
    'deny:crontab.update' => [
        'type' => 2,
    ],
    'crontab.delete' => [
        'type' => 2,
    ],
    'deny:crontab.delete' => [
        'type' => 2,
    ],
    'db.read' => [
        'type' => 2,
    ],
    'deny:db.read' => [
        'type' => 2,
    ],
    'db.create' => [
        'type' => 2,
    ],
    'deny:db.create' => [
        'type' => 2,
    ],
    'db.update' => [
        'type' => 2,
    ],
    'deny:db.update' => [
        'type' => 2,
    ],
    'db.delete' => [
        'type' => 2,
    ],
    'deny:db.delete' => [
        'type' => 2,
    ],
    'hdomain.read' => [
        'type' => 2,
    ],
    'deny:hdomain.read' => [
        'type' => 2,
    ],
    'hdomain.create' => [
        'type' => 2,
    ],
    'deny:hdomain.create' => [
        'type' => 2,
    ],
    'hdomain.update' => [
        'type' => 2,
    ],
    'deny:hdomain.update' => [
        'type' => 2,
    ],
    'hdomain.delete' => [
        'type' => 2,
    ],
    'deny:hdomain.delete' => [
        'type' => 2,
    ],
    'ip.read' => [
        'type' => 2,
    ],
    'deny:ip.read' => [
        'type' => 2,
    ],
    'ip.create' => [
        'type' => 2,
    ],
    'deny:ip.create' => [
        'type' => 2,
    ],
    'ip.update' => [
        'type' => 2,
    ],
    'deny:ip.update' => [
        'type' => 2,
    ],
    'ip.delete' => [
        'type' => 2,
    ],
    'deny:ip.delete' => [
        'type' => 2,
    ],
    'mail.read' => [
        'type' => 2,
    ],
    'deny:mail.read' => [
        'type' => 2,
    ],
    'mail.create' => [
        'type' => 2,
    ],
    'deny:mail.create' => [
        'type' => 2,
    ],
    'mail.update' => [
        'type' => 2,
    ],
    'deny:mail.update' => [
        'type' => 2,
    ],
    'mail.delete' => [
        'type' => 2,
    ],
    'deny:mail.delete' => [
        'type' => 2,
    ],
    'request.read' => [
        'type' => 2,
    ],
    'deny:request.read' => [
        'type' => 2,
    ],
    'request.create' => [
        'type' => 2,
    ],
    'deny:request.create' => [
        'type' => 2,
    ],
    'request.update' => [
        'type' => 2,
    ],
    'deny:request.update' => [
        'type' => 2,
    ],
    'request.delete' => [
        'type' => 2,
    ],
    'deny:request.delete' => [
        'type' => 2,
    ],
    'service.read' => [
        'type' => 2,
    ],
    'deny:service.read' => [
        'type' => 2,
    ],
    'service.create' => [
        'type' => 2,
    ],
    'deny:service.create' => [
        'type' => 2,
    ],
    'service.update' => [
        'type' => 2,
    ],
    'deny:service.update' => [
        'type' => 2,
    ],
    'service.delete' => [
        'type' => 2,
    ],
    'deny:service.delete' => [
        'type' => 2,
    ],
    'vhost.read' => [
        'type' => 2,
    ],
    'deny:vhost.read' => [
        'type' => 2,
    ],
    'vhost.create' => [
        'type' => 2,
    ],
    'deny:vhost.create' => [
        'type' => 2,
    ],
    'vhost.update' => [
        'type' => 2,
    ],
    'deny:vhost.update' => [
        'type' => 2,
    ],
    'vhost.delete' => [
        'type' => 2,
    ],
    'deny:vhost.delete' => [
        'type' => 2,
    ],
    'bill.read' => [
        'type' => 2,
    ],
    'deny:bill.read' => [
        'type' => 2,
    ],
    'bill.create' => [
        'type' => 2,
    ],
    'deny:bill.create' => [
        'type' => 2,
    ],
    'bill.update' => [
        'type' => 2,
    ],
    'deny:bill.update' => [
        'type' => 2,
    ],
    'bill.delete' => [
        'type' => 2,
    ],
    'deny:bill.delete' => [
        'type' => 2,
    ],
    'requisites.read' => [
        'type' => 2,
    ],
    'deny:requisites.read' => [
        'type' => 2,
    ],
    'requisites.create' => [
        'type' => 2,
    ],
    'deny:requisites.create' => [
        'type' => 2,
    ],
    'requisites.update' => [
        'type' => 2,
    ],
    'deny:requisites.update' => [
        'type' => 2,
    ],
    'requisites.delete' => [
        'type' => 2,
    ],
    'deny:requisites.delete' => [
        'type' => 2,
    ],
    'plan.read' => [
        'type' => 2,
    ],
    'deny:plan.read' => [
        'type' => 2,
    ],
    'price.read' => [
        'type' => 2,
    ],
    'deny:price.read' => [
        'type' => 2,
    ],
    'plan.create' => [
        'type' => 2,
    ],
    'deny:plan.create' => [
        'type' => 2,
    ],
    'plan.update' => [
        'type' => 2,
    ],
    'deny:plan.update' => [
        'type' => 2,
    ],
    'plan.delete' => [
        'type' => 2,
    ],
    'deny:plan.delete' => [
        'type' => 2,
    ],
    'plan.force-read' => [
        'type' => 2,
    ],
    'deny:plan.force-read' => [
        'type' => 2,
    ],
    'price.update' => [
        'type' => 2,
    ],
    'deny:price.update' => [
        'type' => 2,
    ],
    'price.delete' => [
        'type' => 2,
    ],
    'deny:price.delete' => [
        'type' => 2,
    ],
    'price.create' => [
        'type' => 2,
    ],
    'deny:price.create' => [
        'type' => 2,
    ],
    'document.read' => [
        'type' => 2,
    ],
    'deny:document.read' => [
        'type' => 2,
    ],
    'document.create' => [
        'type' => 2,
    ],
    'deny:document.create' => [
        'type' => 2,
    ],
    'document.invoice' => [
        'type' => 2,
    ],
    'deny:document.invoice' => [
        'type' => 2,
    ],
    'document.update' => [
        'type' => 2,
    ],
    'deny:document.update' => [
        'type' => 2,
    ],
    'document.delete' => [
        'type' => 2,
    ],
    'deny:document.delete' => [
        'type' => 2,
    ],
    'document.generate' => [
        'type' => 2,
    ],
    'deny:document.generate' => [
        'type' => 2,
    ],
    'document.generate-all' => [
        'type' => 2,
    ],
    'deny:document.generate-all' => [
        'type' => 2,
    ],
    'sale.read' => [
        'type' => 2,
    ],
    'deny:sale.read' => [
        'type' => 2,
    ],
    'sale.delete' => [
        'type' => 2,
    ],
    'deny:sale.delete' => [
        'type' => 2,
    ],
    'finance.read' => [
        'type' => 2,
    ],
    'deny:finance.read' => [
        'type' => 2,
    ],
    'stock.read' => [
        'type' => 2,
    ],
    'deny:stock.read' => [
        'type' => 2,
    ],
    'part.read' => [
        'type' => 2,
    ],
    'deny:part.read' => [
        'type' => 2,
    ],
    'move.read' => [
        'type' => 2,
    ],
    'deny:move.read' => [
        'type' => 2,
    ],
    'model.read' => [
        'type' => 2,
    ],
    'deny:model.read' => [
        'type' => 2,
    ],
    'part.create' => [
        'type' => 2,
    ],
    'deny:part.create' => [
        'type' => 2,
    ],
    'part.update' => [
        'type' => 2,
    ],
    'deny:part.update' => [
        'type' => 2,
    ],
    'part.delete' => [
        'type' => 2,
    ],
    'deny:part.delete' => [
        'type' => 2,
    ],
    'move.create' => [
        'type' => 2,
    ],
    'deny:move.create' => [
        'type' => 2,
    ],
    'move.update' => [
        'type' => 2,
    ],
    'deny:move.update' => [
        'type' => 2,
    ],
    'move.delete' => [
        'type' => 2,
    ],
    'deny:move.delete' => [
        'type' => 2,
    ],
    'model.create' => [
        'type' => 2,
    ],
    'deny:model.create' => [
        'type' => 2,
    ],
    'model.update' => [
        'type' => 2,
    ],
    'deny:model.update' => [
        'type' => 2,
    ],
    'model.delete' => [
        'type' => 2,
    ],
    'deny:model.delete' => [
        'type' => 2,
    ],
    'move.read-all' => [
        'type' => 2,
    ],
    'deny:move.read-all' => [
        'type' => 2,
    ],
    'have-goods' => [
        'type' => 2,
    ],
    'deny:have-goods' => [
        'type' => 2,
    ],
    'domain.pay' => [
        'type' => 2,
    ],
    'deny:domain.pay' => [
        'type' => 2,
    ],
    'domain.push' => [
        'type' => 2,
    ],
    'deny:domain.push' => [
        'type' => 2,
    ],
    'certificate.pay' => [
        'type' => 2,
    ],
    'deny:certificate.pay' => [
        'type' => 2,
    ],
    'certificate.push' => [
        'type' => 2,
    ],
    'deny:certificate.push' => [
        'type' => 2,
    ],
    'access-subclients' => [
        'type' => 2,
    ],
    'deny:access-subclients' => [
        'type' => 2,
    ],
    'support' => [
        'type' => 2,
    ],
    'deny:support' => [
        'type' => 2,
    ],
    'admin' => [
        'type' => 2,
    ],
    'deny:admin' => [
        'type' => 2,
    ],
    'manage' => [
        'type' => 2,
    ],
    'deny:manage' => [
        'type' => 2,
    ],
    'access-reseller' => [
        'type' => 2,
    ],
    'deny:access-reseller' => [
        'type' => 2,
    ],
    'contact.force-verify' => [
        'type' => 2,
    ],
    'deny:contact.force-verify' => [
        'type' => 2,
    ],
    'mailing.prepare' => [
        'type' => 2,
    ],
    'deny:mailing.prepare' => [
        'type' => 2,
    ],
    'mailing.send' => [
        'type' => 2,
    ],
    'deny:mailing.send' => [
        'type' => 2,
    ],
    'client.set-tmp-pwd' => [
        'type' => 2,
    ],
    'deny:client.set-tmp-pwd' => [
        'type' => 2,
    ],
    'resell' => [
        'type' => 2,
    ],
    'deny:resell' => [
        'type' => 2,
    ],
    'own' => [
        'type' => 2,
    ],
    'deny:own' => [
        'type' => 2,
    ],
    'see-no-mans' => [
        'type' => 2,
    ],
    'deny:see-no-mans' => [
        'type' => 2,
    ],
    'part.sell' => [
        'type' => 2,
    ],
    'deny:part.sell' => [
        'type' => 2,
    ],
    'client.set-others-allowed-ips' => [
        'type' => 2,
    ],
    'deny:client.set-others-allowed-ips' => [
        'type' => 2,
    ],
    'domain.read' => [
        'type' => 2,
    ],
    'deny:domain.read' => [
        'type' => 2,
    ],
    'domain.update' => [
        'type' => 2,
    ],
    'deny:domain.update' => [
        'type' => 2,
    ],
    'domain.delete' => [
        'type' => 2,
    ],
    'deny:domain.delete' => [
        'type' => 2,
    ],
    'domain.freeze' => [
        'type' => 2,
    ],
    'deny:domain.freeze' => [
        'type' => 2,
    ],
    'domain.unfreeze' => [
        'type' => 2,
    ],
    'deny:domain.unfreeze' => [
        'type' => 2,
    ],
    'domain.force-push' => [
        'type' => 2,
    ],
    'deny:domain.force-push' => [
        'type' => 2,
    ],
    'domain.force-send-foa' => [
        'type' => 2,
    ],
    'deny:domain.force-send-foa' => [
        'type' => 2,
    ],
    'dns.create' => [
        'type' => 2,
    ],
    'deny:dns.create' => [
        'type' => 2,
    ],
    'dns.read' => [
        'type' => 2,
    ],
    'deny:dns.read' => [
        'type' => 2,
    ],
    'dns.update' => [
        'type' => 2,
    ],
    'deny:dns.update' => [
        'type' => 2,
    ],
    'dns.delete' => [
        'type' => 2,
    ],
    'deny:dns.delete' => [
        'type' => 2,
    ],
    'certificate.read' => [
        'type' => 2,
    ],
    'deny:certificate.read' => [
        'type' => 2,
    ],
    'certificate.create' => [
        'type' => 2,
    ],
    'deny:certificate.create' => [
        'type' => 2,
    ],
    'certificate.update' => [
        'type' => 2,
    ],
    'deny:certificate.update' => [
        'type' => 2,
    ],
    'certificate.delete' => [
        'type' => 2,
    ],
    'deny:certificate.delete' => [
        'type' => 2,
    ],
    'ticket.read' => [
        'type' => 2,
    ],
    'deny:ticket.read' => [
        'type' => 2,
    ],
    'ticket.create' => [
        'type' => 2,
    ],
    'deny:ticket.create' => [
        'type' => 2,
    ],
    'ticket.answer' => [
        'type' => 2,
    ],
    'deny:ticket.answer' => [
        'type' => 2,
    ],
    'ticket.close' => [
        'type' => 2,
    ],
    'deny:ticket.close' => [
        'type' => 2,
    ],
    'ticket.update' => [
        'type' => 2,
    ],
    'deny:ticket.update' => [
        'type' => 2,
    ],
    'ticket.delete' => [
        'type' => 2,
    ],
    'deny:ticket.delete' => [
        'type' => 2,
    ],
    'test.beta' => [
        'type' => 2,
    ],
    'deny:test.beta' => [
        'type' => 2,
    ],
    'test.alpha' => [
        'type' => 2,
    ],
    'deny:test.alpha' => [
        'type' => 2,
    ],
];
