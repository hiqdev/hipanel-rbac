<?php

return [
    'role:nobody' => [
        'nothing',
    ],
    'role:unauthorized' => [
        'restore-password', 'deposit', 'server.pay', 'plan.read',
    ],
    // CLIENT MODULE
    'role:client.support' => [
        'client.read', 'client.list',
    ],
    'role:client.manager' => [
        'role:client.support', 'client.create', 'client.update', 'client.delete',
        'contact.set-verified', 'client.block', 'client.unblock',
        'client.get-note', 'client.set-note', 'client.set-description',
        'purse.update', 'purse.read',
    ],
    'role:employee.manager' => [
        'client.list', 'employee.read', 'employee.create', 'employee.update', 'employee.delete', 'document.acceptance',
        'purse.update', 'purse.read',
    ],
    'role:client.impersonator' => [
        'client.impersonate',
    ],
    'role:client.master' => [
        'client.set-roles',
    ],
    'role:contact.user' => [
        'contact.read', 'contact.create', 'contact.update', 'contact.delete',
    ],
    // SERVER MODULE
    'role:server.user' => [
        'server.read', 'server.control-power', 'server.control-system', 'server.set-note',
    ],
    'role:server.admin' => [
        'role:server.user', 'server.create', 'server.update', 'server.delete',
        'server.wizzard', 'server.set-label', 'consumption.read', 'server.manage-settings',
        'server.see-label', 'server.move-disks',
    ],
    'role:server.manager' => [
        'role:server.user', 'server.enable-block', 'server.disable-block', 'server.pay', 'server.sell', 'server.set-label',
        'server.see-label',
    ],
    'role:server.master' => [
        'role:server.admin', 'role:server.manager',
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
    'role:hub.master' => [
        'role:hub.admin', 'role:hub.manager',
    ],
    'role:consumption.user' => [
        'consumption.read',
    ],
    'role:consumption.manager' => [
        'consumption.read', 'consumption.update', 'consumption.delete',
    ],
    'role:consumption.master' => [
        'consumption.read-all', 'role:consumption.user', 'role:consumption.manager',
    ],
    // CONFIG
    'role:config.manager' => [
        'config.read', 'config.create', 'config.update', 'config.delete',
    ],
    // INTEGRATIONS
    'role:integration.manager' => [
        'integration.read', 'integration.create', 'integration.update', 'integration.delete',
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
    'role:zone.manager' => [
        'zone.create', 'zone.update', 'zone.read', 'zone.delete',
    ],
    'role:hdomain.user' => [
        'hdomain.read', 'hdomain.create', 'hdomain.update', 'hdomain.delete', 'hdomain.set-dns',
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
    'role:hosting.reader' => [
        'account.read', 'backup.read', 'backuping.read',
        'crontab.read', 'db.read', 'hdomain.read',
        'ip.read', 'mail.read', 'request.read', 'service.read',
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
    'role:purse.user' => [
        'purse.read',
    ],
    'role:purse.manager' => [
        'role:purse.user', 'purse.update', 'purse.create',
    ],
    'role:purse.master' => [
        'role:purse.manager',
    ],
    'role:costprice.user' => [
        'costprice.read',
    ],
    'role:costprice.manager' => [
        'role:costprice.user',
        'costprice.create',
        'costprice.update',
        'costprice.delete',
    ],
    'role:bill.user' => [
        'bill.read', 'deposit',
    ],
    'role:bill.junior-manager' => [
        'bill.read',
    ],
    'role:bill.manager' => [
        'bill.read', 'bill.create', 'bill.update', 'bill.delete', 'deposit',
        'role:purse.manager',
    ],
    'role:bill.master' => [
        'bill.read', 'bill.create', 'bill.update', 'bill.delete', 'deposit',
        'bill.import', 'bill.create-exchange',
        'role:purse.master',
    ],
    // REQUISITES
    'role:requisites.user' => [
        'requisites.read',
    ],
    'role:requisites.manager' => [
        'requisites.read', 'requisites.create', 'requisites.update', 'requisites.delete',
    ],
    // PLAN
    'role:plan.user' => [
        'plan.read', 'price.read', 'finance.read'
    ],
    'role:plan.manager' => [
        'plan.read', 'plan.create', 'plan.update', 'plan.delete', 'plan.force-read',
        'price.read', 'price.update', 'price.delete', 'price.create',
    ],
    'role:plan.master' => [
        'role:plan.manager',
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
        'sale.read', 'sale.delete', 'sale.update', 'sale.create',
    ],
    'role:sale.master' => [
        'role:sale.manager',
    ],
    // FINANCE
    'role:finance.reader' => [
        'plan.read', 'bill.read', 'document.read', 'finance.read', 'bill.read',
    ],
    'role:finance.user' => [
        'role:finance.reader',
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
        'role:finance.reader',
        'role:bill.junior-manager',
        'role:plan.manager',
        'role:document.manager',
        'role:sale.manager',
        'finance.read',
    ],
    'role:finance.master' => [
        'role:finance.manager',
        'role:bill.manager',
        'role:plan.master',
        'role:document.manager',
        'role:sale.master',
    ],
    // STOCK MODULE
    'role:stock.user' => [
        'stock.read', 'part.read', 'move.read', 'model.read', 'move.get-directions', 'order.read',
    ],
    'role:stock.admin' => [
        'role:stock.user',
        'move.create', 'move.update', 'move.delete',
    ],
    'role:stock.manager' => [
        'role:stock.user',
        'part.read-all-hierarchy',
        'part.create', 'part.update', 'part.delete',
        'move.create', 'move.update', 'move.delete',
        'model.create', 'model.update', 'model.delete',
    ],
    'role:stock.master' => [
        'role:stock.manager', 'move.read-all', 'role:order.master',
    ],
    'role:order.user' => [
        'order.read', 'order.create', 'order.update', 'order.delete',
    ],
    'role:order.manager' => [
        'role:order.user',
    ],
    'role:order.master' => [
        'role:order.manager',
        'order.read-profits',
    ],
    // PROJECT USER
    'role:project.user' => [
        'consumption.read',
        'part.read',
        'move.get-directions',
    ],
    // ROLES
    'role:client' => [
        'role:unauthorized', 'have-goods', 'pay',
        'role:ticket.user',
        'role:domain.user', 'domain.pay', 'domain.push', 'domain.delete-agp',
        'role:dns.user',
        'role:certificate.user', 'certificate.pay', 'certificate.push',
        'role:contact.user', 'role:document.user', 'document.invoice',
        'role:server.user', 'server.pay',
        'role:hosting.user',
        'role:finance.user',
        'role:sale.user',
        'client.notify',
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
    ],
    'role:admin' => [
        'admin',
        'role:support',
        'role:hub.admin',
        'role:stock.admin',
        'role:server.admin',
        'role:hosting.admin',
    ],
    'role:accounter' => [
        'role:manager',
        'role:hub.manager',
        'role:stock.manager',
    ],
    'role:manager' => [
        'manage', 'access-reseller',
        'role:support',
        'role:document.manager',
        'role:domain.manager', 'domain.pay', 'domain.push', 'domain.delete-agp',
        'role:server.manager', 'role:consumption.manager',
        'role:dns.manager',
        'role:certificate.manager', 'certificate.pay', 'certificate.push',
        'role:contact.user', 'contact.force-verify',
        'role:client.manager',
        'role:finance.manager',
        'mailing.prepare', 'mailing.send',
        'client.set-tmp-pwd', 'client.notify',
        'role:purse.user',
    ],
    'role:reseller' => [
        'have-goods',
        'resell',
        'role:finance.master',
        'deny:access-reseller',
        'role:manager',
        'role:integration.manager',
    ],
    'role:employee' => [
        'restore-password',
        'role:contact.user',
        'role:finance.employee',
        'employee.read',
    ],
    /// SUPER POWERS
    'role:master' => [
        'role:client.master',
        'role:finance.master',
        'role:bill.master',
        'role:document.master',
        'role:plan.master',
        'role:sale.master',
        'role:stock.master',
        'role:domain.master',
        'role:server.master',
        'role:hub.master',
        'role:superpowers',
        'resell',
    ],
    'role:owner' => [
        'role:manager',
        'role:bill.master',
        'role:stock.manager',
        'resell', 'own',
    ],
    'role:superpowers' => [
        'see-no-mans', 'part.sell', 'client.set-others-allowed-ips',
    ],
    /// LIMITED ROLES
    'role:junior-manager' => [
        'access-subclients', 'access-reseller',
        'role:hub.user',
        'role:stock.user', 'part.read-all-hierarchy',
        'plan.force-read', 'plan.read', 'document.read', 'finance.read', 'bill.read',
        'client.read', 'client.list', 'contact.read',
        'server.read',
        'consumption.read',
    ],
    /// SUBROLES
    'role:domain.user' => [
        'domain.read', 'domain.update', 'domain.delete-agp', 'domain.set-nss',
    ],
    'role:domain.manager' => [
        'role:domain.user', 'domain.delete',
    ],
    'role:domain.master' => [
        'role:domain.manager',
        'domain.freeze', 'domain.unfreeze',
        'domain.push', 'domain.force-push',
        'domain.force-send-foa',
        'domain.approve-trasfer-out',
        'domain.maintain',
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
    'role:ticket.user' => [
        'ticket.read', 'ticket.create', 'ticket.answer', 'ticket.close',
    ],
    'role:ticket.manager' => [
        'role:ticket.user', 'ticket.update', 'ticket.delete',
    ],
    'role:beta-tester' => [
        'test.beta',
    ],
    'role:alpha-tester' => [
        'role:beta-tester',
        'test.alpha',
    ],
    'role:owner-staff' => [
        'ref.view.not-used',
        'bill.charges.read',
        'bill.see-server-charges',
        'part.read-all-hierarchy',
        'owner-staff',
    ],
    'role:almighty' => [
        'role:admin',
        'role:manager',
        'role:document.master',
        'role:finance.master',
        'role:stock.master',
        'role:config.manager',
        'role:costprice.manager',
        'domain.freeze',
        'domain.force-push',
        'domain.delete',
        'employee.read',
        'domain.force-send-foa',
        'deny:deposit',
    ],
];
