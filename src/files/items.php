<?php

return [
    'role:nobody' => [
        'type' => 1,
        'description' => 'The role is generally assigned to nobody and used to indicate a user without any permissions.',
        'children' => [
            'nothing',
        ],
    ],
    'role:unauthorized' => [
        'type' => 1,
        'description' => 'The role is generally assigned to guests automatically.',
        'children' => [
            'restore-password',
            'deposit',
            'server.pay',
            'plan.read',
        ],
    ],
    'role:client.support' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are members of the support team',
        'children' => [
            'client.read',
            'client.list',
        ],
    ],
    'role:client.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of client management',
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
            'purse.update',
            'purse.read',
        ],
    ],
    'role:employee.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to employees who are responsible for employee management',
        'children' => [
            'client.list',
            'employee.read',
            'employee.create',
            'employee.update',
            'employee.delete',
            'document.acceptance',
            'purse.update',
            'purse.read',
        ],
    ],
    'role:client.impersonator' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are allowed to wear a client disguise',
        'children' => [
            'client.impersonate',
        ],
    ],
    'role:client.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on clients management',
        'children' => [
            'client.set-roles',
        ],
    ],
    'role:contact.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to use contacts',
        'children' => [
            'contact.read',
            'contact.create',
            'contact.update',
            'contact.delete',
        ],
    ],
    'role:server.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to use servers',
        'children' => [
            'server.read',
            'server.control-power',
            'server.control-system',
            'server.set-note',
        ],
    ],
    'role:server.admin' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of client\'s servers administration',
        'children' => [
            'role:server.user',
            'server.wizzard',
            'server.set-label',
            'consumption.read',
            'server.manage-settings',
            'server.see-label',
            'server.move-disks',
        ],
    ],
    'role:server.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of client\'s servers management',
        'children' => [
            'role:server.user',
            'server.enable-block',
            'server.disable-block',
            'server.pay',
            'server.sell',
            'server.set-label',
            'server.see-label',
        ],
    ],
    'role:staff-server.admin' => [
        'type' => 1,
        'children' => [
            'role:server.admin',
            'server.create',
            'server.delete',
            'server.update',
        ],
    ],
    'role:server.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on servers management',
        'children' => [
            'role:staff-server.admin',
            'role:server.manager',
        ],
    ],
    'role:hub.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to rents hubs',
        'children' => [
            'hub.read',
        ],
    ],
    'role:hub.admin' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of client\'s hubs administration',
        'children' => [
            'hub.read',
            'hub.create',
            'hub.update',
            'hub.delete',
        ],
    ],
    'role:hub.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of client\'s hubs management',
        'children' => [
            'hub.read',
            'hub.sell',
        ],
    ],
    'role:hub.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on hubs management',
        'children' => [
            'role:hub.admin',
            'role:hub.manager',
        ],
    ],
    'role:consumption.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to see the device resources consumption details',
        'children' => [
            'consumption.read',
        ],
    ],
    'role:consumption.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of client\'s devices consumption management',
        'children' => [
            'consumption.read',
            'consumption.update',
            'consumption.delete',
        ],
    ],
    'role:consumption.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to ____',
        'children' => [
            'consumption.read-all',
            'role:consumption.user',
            'role:consumption.manager',
        ],
    ],
    'role:blacklist.manager' => [
        'type' => 1,
        'children' => [
            'blacklist.read',
            'blacklist.create',
            'blacklist.update',
            'blacklist.delete',
        ],
    ],
    'role:config.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of publicly offered servers configuration management',
        'children' => [
            'config.read',
            'config.create',
            'config.update',
            'config.delete',
        ],
    ],
    'role:integration.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are allowed to change technical configuration of integrations with 3rd party services',
        'children' => [
            'integration.read',
            'integration.create',
            'integration.update',
            'integration.delete',
        ],
    ],
    'role:account.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who can use accounts with their hosting services',
        'children' => [
            'account.read',
            'account.create',
            'account.update',
            'account.delete',
        ],
    ],
    'role:backup.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who need access to backus of their hosting services',
        'children' => [
            'backup.read',
            'backup.delete',
        ],
    ],
    'role:backuping.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who need access to backups configurations of their hosting services',
        'children' => [
            'backuping.read',
            'backuping.create',
            'backuping.update',
            'backuping.delete',
        ],
    ],
    'role:crontab.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who need access to crontab configuration of their hosting services',
        'children' => [
            'crontab.read',
            'crontab.create',
            'crontab.update',
            'crontab.delete',
        ],
    ],
    'role:db.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who need access to DBMS configuration of their hosting services',
        'children' => [
            'db.read',
            'db.create',
            'db.update',
            'db.delete',
        ],
    ],
    'role:zone.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of domain zones management',
        'children' => [
            'zone.create',
            'zone.update',
            'zone.read',
            'zone.delete',
        ],
    ],
    'role:hdomain.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to have hosting domains on their services',
        'children' => [
            'hdomain.read',
            'hdomain.create',
            'hdomain.update',
            'hdomain.delete',
            'hdomain.set-dns',
        ],
    ],
    'role:ip.admin' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who manage company IP addresses pool',
        'children' => [
            'ip.read',
            'ip.create',
            'ip.update',
            'ip.delete',
        ],
    ],
    'role:mail.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to use mailboxes on their hosting services',
        'children' => [
            'mail.read',
            'mail.create',
            'mail.update',
            'mail.delete',
        ],
    ],
    'role:request.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to see configuration requests of their hosting services',
        'children' => [
            'request.read',
            'request.create',
            'request.update',
            'request.delete',
        ],
    ],
    'role:service.admin' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who manage software services of user\'s hosting services',
        'children' => [
            'service.read',
            'service.create',
            'service.update',
            'service.delete',
        ],
    ],
    'role:vhost.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to have virtual hosts on their hosting services',
        'children' => [
            'vhost.read',
            'vhost.create',
            'vhost.update',
            'vhost.delete',
        ],
    ],
    'role:hosting.reader' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have read-only access to hosting services',
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
        'description' => 'The role is generally assigned to users who have default user permissions for hosting services',
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
        'description' => 'The role is generally assigned to staff who are in charge of the client\'s hosting services administration',
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
    'role:purse.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have access to the purses',
        'children' => [
            'purse.read',
        ],
    ],
    'role:purse.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of purses',
        'children' => [
            'role:purse.user',
            'purse.update',
            'purse.create',
        ],
    ],
    'role:purse.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of purses',
        'children' => [
            'role:purse.manager',
        ],
    ],
    'role:pnl.master' => [
        'type' => 1,
        'children' => [
            'pnl.read',
            'pnl.update',
            'pnl.read-expenses',
        ],
    ],
    'role:pnl.user' => [
        'type' => 1,
        'children' => [
            'pnl.read',
        ],
    ],
    'role:costprice.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to ____',
        'children' => [
            'costprice.read',
        ],
    ],
    'role:costprice.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to ____',
        'children' => [
            'role:costprice.user',
            'costprice.create',
            'costprice.update',
            'costprice.delete',
        ],
    ],
    'role:bill.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to see bills',
        'children' => [
            'bill.read',
            'deposit',
        ],
    ],
    'role:bill.junior-manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of bills management',
        'children' => [
            'bill.read',
        ],
    ],
    'role:bill.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have high permissions on bills management',
        'children' => [
            'bill.read',
            'bill.create',
            'bill.update',
            'bill.delete',
            'deposit',
            'role:purse.manager',
        ],
    ],
    'role:bill.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on bills management',
        'children' => [
            'bill.read',
            'bill.create',
            'bill.update',
            'bill.delete',
            'deposit',
            'bill.import',
            'bill.create-exchange',
            'role:purse.master',
        ],
    ],
    'role:requisites.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to see bank requisites',
        'children' => [
            'requisites.read',
        ],
    ],
    'role:requisites.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of financial requisites management',
        'children' => [
            'requisites.read',
            'requisites.create',
            'requisites.update',
            'requisites.delete',
        ],
    ],
    'role:plan.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to see tariff plans',
        'children' => [
            'plan.read',
            'price.read',
            'finance.read',
        ],
    ],
    'role:plan.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of tariff plans management',
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
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the tariff plans management',
        'children' => [
            'role:plan.manager',
        ],
    ],
    'role:document.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to work with documents',
        'children' => [
            'document.read',
            'document.create',
            'document.invoice',
        ],
    ],
    'role:document.employee' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of employees\' and other contractors\' documents management',
        'children' => [
            'document.read',
            'document.create',
            'document.acceptance',
        ],
    ],
    'role:document.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of customer\'s documents management',
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
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the documents management',
        'children' => [
            'document.generate-all',
        ],
    ],
    'role:sale.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are allowed to see own sales',
        'children' => [
            'sale.read',
        ],
    ],
    'role:sale.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are allowed to sell objects to clients',
        'children' => [
            'sale.read',
            'sale.delete',
            'sale.update',
            'sale.create',
        ],
    ],
    'role:sale.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for sales management',
        'children' => [
            'role:sale.manager',
        ],
    ],
    'role:finance.reader' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have read-only access to financial information',
        'children' => [
            'plan.read',
            'bill.read',
            'document.read',
            'finance.read',
        ],
    ],
    'role:finance.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have limited write permissions on the financial information',
        'children' => [
            'role:finance.reader',
            'role:bill.user',
            'role:plan.user',
            'role:document.user',
        ],
    ],
    'role:finance.employee' => [
        'type' => 1,
        'description' => 'The role is generally assigned to employees and staff who have access to payments information',
        'children' => [
            'role:bill.user',
            'role:document.employee',
            'finance.read',
        ],
    ],
    'role:finance.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of finances management',
        'children' => [
            'role:finance.reader',
            'role:bill.junior-manager',
            'role:plan.manager',
            'role:document.manager',
            'role:sale.manager',
            'finance.read',
        ],
    ],
    'role:finance.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for finances management',
        'children' => [
            'role:finance.manager',
            'role:bill.manager',
            'role:plan.master',
            'role:document.manager',
            'role:sale.master',
        ],
    ],
    'role:part.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have access to part information',
        'children' => [
            'part.read',
        ],
    ],
    'role:part.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of parts management',
        'children' => [
            'role:part.user',
            'part.create',
            'part.update',
            'part.delete',
        ],
    ],
    'role:part.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the parts management',
        'children' => [
            'part.read-all-hierarchy',
            'role:part.manager',
        ],
    ],
    'role:move.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have access to moves information',
        'children' => [
            'move.read',
        ],
    ],
    'role:move.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of moves management',
        'children' => [
            'role:move.user',
            'move.get-directions',
            'move.create',
            'move.update',
            'move.delete',
        ],
    ],
    'role:move.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the moves management',
        'children' => [
            'role:move.manager',
            'move.read-all',
        ],
    ],
    'role:model.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have access to models information',
        'children' => [
            'model.read',
        ],
    ],
    'role:model.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of models management',
        'children' => [
            'role:model.user',
            'model.create',
            'model.update',
            'model.delete',
        ],
    ],
    'role:model.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the models management',
        'children' => [
            'role:model.manager',
        ],
    ],
    'role:order.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have access to orders information',
        'children' => [
            'order.read',
        ],
    ],
    'role:order.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of orders management',
        'children' => [
            'role:order.user',
            'order.create',
            'order.update',
            'order.delete',
        ],
    ],
    'role:order.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the orders management',
        'children' => [
            'role:order.manager',
            'order.read-profits',
        ],
    ],
    'role:stock.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have limited stock reading access',
        'children' => [
            'stock.read',
            'role:part.user',
            'role:move.user',
            'role:model.user',
            'role:order.user',
        ],
    ],
    'role:stock.admin' => [
        'type' => 1,
        'description' => 'The role is generally assigned to ____',
        'children' => [
            'role:stock.user',
            'role:move.manager',
        ],
    ],
    'role:stock.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of stock management',
        'children' => [
            'role:stock.user',
            'role:part.master',
            'role:move.manager',
            'role:model.master',
        ],
    ],
    'role:stock.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the stock management',
        'children' => [
            'role:stock.manager',
            'role:move.master',
            'role:order.master',
        ],
    ],
    'role:project.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who manage internal company sub-projects',
        'children' => [
            'consumption.read',
            'part.read',
            'move.get-directions',
        ],
    ],
    'role:client' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who are clients',
        'children' => [
            'role:unauthorized',
            'have-goods',
            'pay',
            'role:ticket.user',
            'role:domain.user',
            'domain.pay',
            'domain.push',
            'domain.delete-agp',
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
            'role:sale.user',
            'client.notify',
        ],
    ],
    'role:support' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of customer support',
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
            'role:blacklist.manager',
        ],
    ],
    'role:admin' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge for the technical management of the resources',
        'children' => [
            'admin',
            'role:support',
            'role:hub.admin',
            'role:stock.admin',
            'role:server.admin',
            'role:hosting.admin',
        ],
    ],
    'role:staff-admin' => [
        'type' => 1,
        'children' => [
            'role:admin',
            'role:staff-server.admin',
        ],
    ],
    'role:accounter' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of accounting',
        'children' => [
            'role:manager',
            'role:hub.manager',
            'role:stock.manager',
        ],
    ],
    'role:manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of services and clients management',
        'children' => [
            'manage',
            'access-reseller',
            'role:support',
            'role:document.manager',
            'role:domain.manager',
            'domain.pay',
            'domain.push',
            'domain.delete-agp',
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
            'client.notify',
            'role:purse.user',
        ],
    ],
    'role:reseller' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who resell services',
        'children' => [
            'have-goods',
            'resell',
            'role:finance.master',
            'deny:access-reseller',
            'role:manager',
            'role:integration.manager',
        ],
    ],
    'role:employee' => [
        'type' => 1,
        'description' => 'The role is generally assigned to employees',
        'children' => [
            'restore-password',
            'role:contact.user',
            'role:finance.employee',
            'employee.read',
        ],
    ],
    'role:master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on everything',
        'children' => [
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
    ],
    'role:owner' => [
        'type' => 1,
        'description' => 'The role is generally assigned to a root user and is not used by any other customers',
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
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions',
        'children' => [
            'see-no-mans',
            'part.sell',
            'client.set-others-allowed-ips',
        ],
    ],
    'role:junior-manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are managers with reduced permissions',
        'children' => [
            'access-subclients',
            'access-reseller',
            'role:hub.user',
            'role:stock.user',
            'part.read-all-hierarchy',
            'move.get-directions',
            'plan.force-read',
            'plan.read',
            'document.read',
            'finance.read',
            'bill.read',
            'client.read',
            'client.list',
            'contact.read',
            'server.read',
            'consumption.read',
        ],
    ],
    'role:partner' => [
        'type' => 1,
        'description' => 'The role is generally assigned to partners',
        'children' => [
            'document.read',
            'finance.read',
            'bill.read',
            'contact.read',
            'have-goods',
        ],
    ],
    'role:domain.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have access to domain name registration services',
        'children' => [
            'domain.read',
            'domain.update',
            'domain.delete-agp',
            'domain.set-nss',
        ],
    ],
    'role:domain.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of domain name registration services',
        'children' => [
            'role:domain.user',
            'domain.delete',
        ],
    ],
    'role:domain.master' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on domain name registration services',
        'children' => [
            'role:domain.manager',
            'domain.freeze',
            'domain.unfreeze',
            'domain.push',
            'domain.force-push',
            'domain.force-send-foa',
            'domain.force-set-nss',
            'domain.approve-trasfer-out',
            'domain.maintain',
        ],
    ],
    'role:dns.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have access to DNS management',
        'children' => [
            'dns.create',
            'dns.read',
            'dns.update',
            'dns.delete',
        ],
    ],
    'role:dns.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of DNS services management',
        'children' => [
            'role:dns.user',
        ],
    ],
    'role:certificate.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have access to SSL certificates services',
        'children' => [
            'certificate.read',
            'certificate.create',
            'certificate.update',
        ],
    ],
    'role:certificate.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of SSL certificates management',
        'children' => [
            'role:certificate.user',
            'certificate.delete',
        ],
    ],
    'role:ticket.user' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who have access to the ticket system',
        'children' => [
            'ticket.read',
            'ticket.create',
            'ticket.answer',
            'ticket.close',
        ],
    ],
    'role:ticket.manager' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who are in charge of tickets management',
        'children' => [
            'role:ticket.user',
            'ticket.update',
            'ticket.delete',
        ],
    ],
    'role:beta-tester' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who participate in beta testing program',
        'children' => [
            'test.beta',
        ],
    ],
    'role:alpha-tester' => [
        'type' => 1,
        'description' => 'The role is generally assigned to users who participate in early access testing program',
        'children' => [
            'role:beta-tester',
            'test.alpha',
        ],
    ],
    'role:owner-staff' => [
        'type' => 1,
        'description' => 'The role is generally assigned to staff who represents owners of the company resources',
        'children' => [
            'ref.view.not-used',
            'bill.charges.read',
            'bill.see-server-charges',
            'part.read-all-hierarchy',
            'client.set-description',
            'owner-staff',
            'move.read-all',
            'move.get-directions',
            'see-no-mans',
            'role:blacklist.manager',
        ],
    ],
    'role:almighty' => [
        'type' => 1,
        'description' => 'The role is for testing only',
        'children' => [
            'role:staff-admin',
            'role:manager',
            'role:document.master',
            'role:finance.master',
            'role:stock.master',
            'role:config.manager',
            'role:costprice.manager',
            'role:pnl.master',
            'role:blacklist.manager',
            'domain.freeze',
            'domain.force-push',
            'domain.delete',
            'employee.read',
            'domain.force-send-foa',
            'deny:deposit',
        ],
    ],
    'nothing' => [
        'type' => 2,
        'description' => 'Allows nothinging',
    ],
    'deny:nothing' => [
        'type' => 2,
        'description' => 'Prohibits nothinging',
    ],
    'restore-password' => [
        'type' => 2,
        'description' => 'Allows restore-password operation',
    ],
    'deny:restore-password' => [
        'type' => 2,
        'description' => 'Prohibits restore-password operation',
    ],
    'deposit' => [
        'type' => 2,
        'description' => 'Allows depositing',
    ],
    'deny:deposit' => [
        'type' => 2,
        'description' => 'Prohibits depositing',
    ],
    'server.pay' => [
        'type' => 2,
        'description' => 'Allows paying of the server',
    ],
    'deny:server.pay' => [
        'type' => 2,
        'description' => 'Prohibits paying of the server',
    ],
    'plan.read' => [
        'type' => 2,
        'description' => 'Allows reading of the plan',
    ],
    'deny:plan.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the plan',
    ],
    'client.read' => [
        'type' => 2,
        'description' => 'Allows reading of the client',
    ],
    'deny:client.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the client',
    ],
    'client.list' => [
        'type' => 2,
        'description' => 'Allows listing of the client',
    ],
    'deny:client.list' => [
        'type' => 2,
        'description' => 'Prohibits listing of the client',
    ],
    'client.create' => [
        'type' => 2,
        'description' => 'Allows creating of the client',
    ],
    'deny:client.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the client',
    ],
    'client.update' => [
        'type' => 2,
        'description' => 'Allows updating of the client',
    ],
    'deny:client.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the client',
    ],
    'client.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the client',
    ],
    'deny:client.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the client',
    ],
    'contact.set-verified' => [
        'type' => 2,
        'description' => 'Allows set-verified operation on the contact',
    ],
    'deny:contact.set-verified' => [
        'type' => 2,
        'description' => 'Prohibits set-verified operation on the contact',
    ],
    'client.block' => [
        'type' => 2,
        'description' => 'Allows blocking of the client',
    ],
    'deny:client.block' => [
        'type' => 2,
        'description' => 'Prohibits blocking of the client',
    ],
    'client.unblock' => [
        'type' => 2,
        'description' => 'Allows unblocking of the client',
    ],
    'deny:client.unblock' => [
        'type' => 2,
        'description' => 'Prohibits unblocking of the client',
    ],
    'client.get-note' => [
        'type' => 2,
        'description' => 'Allows get-note operation on the client',
    ],
    'deny:client.get-note' => [
        'type' => 2,
        'description' => 'Prohibits get-note operation on the client',
    ],
    'client.set-note' => [
        'type' => 2,
        'description' => 'Allows set-note operation on the client',
    ],
    'deny:client.set-note' => [
        'type' => 2,
        'description' => 'Prohibits set-note operation on the client',
    ],
    'purse.update' => [
        'type' => 2,
        'description' => 'Allows updating of the purse',
    ],
    'deny:purse.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the purse',
    ],
    'purse.read' => [
        'type' => 2,
        'description' => 'Allows reading of the purse',
    ],
    'deny:purse.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the purse',
    ],
    'employee.read' => [
        'type' => 2,
        'description' => 'Allows reading of the employee',
    ],
    'deny:employee.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the employee',
    ],
    'employee.create' => [
        'type' => 2,
        'description' => 'Allows creating of the employee',
    ],
    'deny:employee.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the employee',
    ],
    'employee.update' => [
        'type' => 2,
        'description' => 'Allows updating of the employee',
    ],
    'deny:employee.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the employee',
    ],
    'employee.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the employee',
    ],
    'deny:employee.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the employee',
    ],
    'document.acceptance' => [
        'type' => 2,
        'description' => 'Allows acceptanceing of the document',
    ],
    'deny:document.acceptance' => [
        'type' => 2,
        'description' => 'Prohibits acceptanceing of the document',
    ],
    'client.impersonate' => [
        'type' => 2,
        'description' => 'Allows impersonateing of the client',
    ],
    'deny:client.impersonate' => [
        'type' => 2,
        'description' => 'Prohibits impersonateing of the client',
    ],
    'client.set-roles' => [
        'type' => 2,
        'description' => 'Allows setting client roles',
    ],
    'deny:client.set-roles' => [
        'type' => 2,
        'description' => 'Prohibits set-roles operation on the client',
    ],
    'contact.read' => [
        'type' => 2,
        'description' => 'Allows reading of the contact',
    ],
    'deny:contact.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the contact',
    ],
    'contact.create' => [
        'type' => 2,
        'description' => 'Allows creating of the contact',
    ],
    'deny:contact.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the contact',
    ],
    'contact.update' => [
        'type' => 2,
        'description' => 'Allows updating of the contact',
    ],
    'deny:contact.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the contact',
    ],
    'contact.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the contact',
    ],
    'deny:contact.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the contact',
    ],
    'server.read' => [
        'type' => 2,
        'description' => 'Allows reading of the server',
    ],
    'deny:server.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the server',
    ],
    'server.control-power' => [
        'type' => 2,
        'description' => 'Allows control-power operation on the server',
    ],
    'deny:server.control-power' => [
        'type' => 2,
        'description' => 'Prohibits control-power operation on the server',
    ],
    'server.control-system' => [
        'type' => 2,
        'description' => 'Allows control-system operation on the server',
    ],
    'deny:server.control-system' => [
        'type' => 2,
        'description' => 'Prohibits control-system operation on the server',
    ],
    'server.set-note' => [
        'type' => 2,
        'description' => 'Allows set-note operation on the server',
    ],
    'deny:server.set-note' => [
        'type' => 2,
        'description' => 'Prohibits set-note operation on the server',
    ],
    'server.wizzard' => [
        'type' => 2,
        'description' => 'Allows wizzarding of the server',
    ],
    'deny:server.wizzard' => [
        'type' => 2,
        'description' => 'Prohibits wizzarding of the server',
    ],
    'server.set-label' => [
        'type' => 2,
        'description' => 'Allows set-label operation on the server',
    ],
    'deny:server.set-label' => [
        'type' => 2,
        'description' => 'Prohibits set-label operation on the server',
    ],
    'consumption.read' => [
        'type' => 2,
        'description' => 'Allows reading of the consumption',
    ],
    'deny:consumption.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the consumption',
    ],
    'server.manage-settings' => [
        'type' => 2,
        'description' => 'Allows manage-settings operation on the server',
    ],
    'deny:server.manage-settings' => [
        'type' => 2,
        'description' => 'Prohibits manage-settings operation on the server',
    ],
    'server.see-label' => [
        'type' => 2,
        'description' => 'Allows see-label operation on the server',
    ],
    'deny:server.see-label' => [
        'type' => 2,
        'description' => 'Prohibits see-label operation on the server',
    ],
    'server.move-disks' => [
        'type' => 2,
        'description' => 'Allows move disks between servers',
    ],
    'deny:server.move-disks' => [
        'type' => 2,
        'description' => 'Deny move disks between servers',
    ],
    'server.enable-block' => [
        'type' => 2,
        'description' => 'Allows enable-block operation on the server',
    ],
    'deny:server.enable-block' => [
        'type' => 2,
        'description' => 'Prohibits enable-block operation on the server',
    ],
    'server.disable-block' => [
        'type' => 2,
        'description' => 'Allows disable-block operation on the server',
    ],
    'deny:server.disable-block' => [
        'type' => 2,
        'description' => 'Prohibits disable-block operation on the server',
    ],
    'server.sell' => [
        'type' => 2,
        'description' => 'Allows selling of the server',
    ],
    'deny:server.sell' => [
        'type' => 2,
        'description' => 'Prohibits selling of the server',
    ],
    'server.create' => [
        'type' => 2,
        'description' => 'Allows creating of the server',
    ],
    'deny:server.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the server',
    ],
    'server.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the server',
    ],
    'deny:server.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the server',
    ],
    'server.update' => [
        'type' => 2,
        'description' => 'Allows updating of the server',
    ],
    'deny:server.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the server',
    ],
    'hub.read' => [
        'type' => 2,
        'description' => 'Allows reading of the hub',
    ],
    'deny:hub.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the hub',
    ],
    'hub.create' => [
        'type' => 2,
        'description' => 'Allows creating of the hub',
    ],
    'deny:hub.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the hub',
    ],
    'hub.update' => [
        'type' => 2,
        'description' => 'Allows updating of the hub',
    ],
    'deny:hub.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the hub',
    ],
    'hub.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the hub',
    ],
    'deny:hub.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the hub',
    ],
    'hub.sell' => [
        'type' => 2,
        'description' => 'Allows selling of the hub',
    ],
    'deny:hub.sell' => [
        'type' => 2,
        'description' => 'Prohibits selling of the hub',
    ],
    'consumption.update' => [
        'type' => 2,
        'description' => 'Allows updating of the consumption',
    ],
    'deny:consumption.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the consumption',
    ],
    'consumption.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the consumption',
    ],
    'deny:consumption.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the consumption',
    ],
    'consumption.read-all' => [
        'type' => 2,
        'description' => 'Allows read-all operation on the consumption',
    ],
    'deny:consumption.read-all' => [
        'type' => 2,
        'description' => 'Prohibits read-all operation on the consumption',
    ],
    'blacklist.read' => [
        'type' => 2,
    ],
    'deny:blacklist.read' => [
        'type' => 2,
    ],
    'blacklist.create' => [
        'type' => 2,
    ],
    'deny:blacklist.create' => [
        'type' => 2,
    ],
    'blacklist.update' => [
        'type' => 2,
    ],
    'deny:blacklist.update' => [
        'type' => 2,
    ],
    'blacklist.delete' => [
        'type' => 2,
    ],
    'deny:blacklist.delete' => [
        'type' => 2,
    ],
    'config.read' => [
        'type' => 2,
        'description' => 'Allows reading of the config',
    ],
    'deny:config.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the config',
    ],
    'config.create' => [
        'type' => 2,
        'description' => 'Allows creating of the config',
    ],
    'deny:config.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the config',
    ],
    'config.update' => [
        'type' => 2,
        'description' => 'Allows updating of the config',
    ],
    'deny:config.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the config',
    ],
    'config.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the config',
    ],
    'deny:config.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the config',
    ],
    'integration.read' => [
        'type' => 2,
        'description' => 'Allows reading of the integration',
    ],
    'deny:integration.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the integration',
    ],
    'integration.create' => [
        'type' => 2,
        'description' => 'Allows creating of the integration',
    ],
    'deny:integration.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the integration',
    ],
    'integration.update' => [
        'type' => 2,
        'description' => 'Allows updating of the integration',
    ],
    'deny:integration.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the integration',
    ],
    'integration.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the integration',
    ],
    'deny:integration.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the integration',
    ],
    'account.read' => [
        'type' => 2,
        'description' => 'Allows reading of the account',
    ],
    'deny:account.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the account',
    ],
    'account.create' => [
        'type' => 2,
        'description' => 'Allows creating of the account',
    ],
    'deny:account.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the account',
    ],
    'account.update' => [
        'type' => 2,
        'description' => 'Allows updating of the account',
    ],
    'deny:account.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the account',
    ],
    'account.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the account',
    ],
    'deny:account.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the account',
    ],
    'backup.read' => [
        'type' => 2,
        'description' => 'Allows reading of the backup',
    ],
    'deny:backup.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the backup',
    ],
    'backup.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the backup',
    ],
    'deny:backup.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the backup',
    ],
    'backuping.read' => [
        'type' => 2,
        'description' => 'Allows reading of the backuping',
    ],
    'deny:backuping.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the backuping',
    ],
    'backuping.create' => [
        'type' => 2,
        'description' => 'Allows creating of the backuping',
    ],
    'deny:backuping.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the backuping',
    ],
    'backuping.update' => [
        'type' => 2,
        'description' => 'Allows updating of the backuping',
    ],
    'deny:backuping.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the backuping',
    ],
    'backuping.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the backuping',
    ],
    'deny:backuping.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the backuping',
    ],
    'crontab.read' => [
        'type' => 2,
        'description' => 'Allows reading of the crontab',
    ],
    'deny:crontab.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the crontab',
    ],
    'crontab.create' => [
        'type' => 2,
        'description' => 'Allows creating of the crontab',
    ],
    'deny:crontab.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the crontab',
    ],
    'crontab.update' => [
        'type' => 2,
        'description' => 'Allows updating of the crontab',
    ],
    'deny:crontab.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the crontab',
    ],
    'crontab.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the crontab',
    ],
    'deny:crontab.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the crontab',
    ],
    'db.read' => [
        'type' => 2,
        'description' => 'Allows reading of the db',
    ],
    'deny:db.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the db',
    ],
    'db.create' => [
        'type' => 2,
        'description' => 'Allows creating of the db',
    ],
    'deny:db.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the db',
    ],
    'db.update' => [
        'type' => 2,
        'description' => 'Allows updating of the db',
    ],
    'deny:db.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the db',
    ],
    'db.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the db',
    ],
    'deny:db.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the db',
    ],
    'zone.create' => [
        'type' => 2,
        'description' => 'Allows creating of the zone',
    ],
    'deny:zone.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the zone',
    ],
    'zone.update' => [
        'type' => 2,
        'description' => 'Allows updating of the zone',
    ],
    'deny:zone.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the zone',
    ],
    'zone.read' => [
        'type' => 2,
        'description' => 'Allows reading of the zone',
    ],
    'deny:zone.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the zone',
    ],
    'zone.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the zone',
    ],
    'deny:zone.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the zone',
    ],
    'hdomain.read' => [
        'type' => 2,
        'description' => 'Allows reading of the hdomain',
    ],
    'deny:hdomain.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the hdomain',
    ],
    'hdomain.create' => [
        'type' => 2,
        'description' => 'Allows creating of the hdomain',
    ],
    'deny:hdomain.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the hdomain',
    ],
    'hdomain.update' => [
        'type' => 2,
        'description' => 'Allows updating of the hdomain',
    ],
    'deny:hdomain.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the hdomain',
    ],
    'hdomain.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the hdomain',
    ],
    'deny:hdomain.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the hdomain',
    ],
    'hdomain.set-dns' => [
        'type' => 2,
        'description' => 'Allows set-dns operation on the hdomain',
    ],
    'deny:hdomain.set-dns' => [
        'type' => 2,
        'description' => 'Prohibits set-dns operation on the hdomain',
    ],
    'ip.read' => [
        'type' => 2,
        'description' => 'Allows reading of the ip',
    ],
    'deny:ip.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the ip',
    ],
    'ip.create' => [
        'type' => 2,
        'description' => 'Allows creating of the ip',
    ],
    'deny:ip.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the ip',
    ],
    'ip.update' => [
        'type' => 2,
        'description' => 'Allows updating of the ip',
    ],
    'deny:ip.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the ip',
    ],
    'ip.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the ip',
    ],
    'deny:ip.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the ip',
    ],
    'mail.read' => [
        'type' => 2,
        'description' => 'Allows reading of the mail',
    ],
    'deny:mail.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the mail',
    ],
    'mail.create' => [
        'type' => 2,
        'description' => 'Allows creating of the mail',
    ],
    'deny:mail.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the mail',
    ],
    'mail.update' => [
        'type' => 2,
        'description' => 'Allows updating of the mail',
    ],
    'deny:mail.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the mail',
    ],
    'mail.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the mail',
    ],
    'deny:mail.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the mail',
    ],
    'request.read' => [
        'type' => 2,
        'description' => 'Allows reading of the request',
    ],
    'deny:request.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the request',
    ],
    'request.create' => [
        'type' => 2,
        'description' => 'Allows creating of the request',
    ],
    'deny:request.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the request',
    ],
    'request.update' => [
        'type' => 2,
        'description' => 'Allows updating of the request',
    ],
    'deny:request.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the request',
    ],
    'request.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the request',
    ],
    'deny:request.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the request',
    ],
    'service.read' => [
        'type' => 2,
        'description' => 'Allows reading of the service',
    ],
    'deny:service.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the service',
    ],
    'service.create' => [
        'type' => 2,
        'description' => 'Allows creating of the service',
    ],
    'deny:service.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the service',
    ],
    'service.update' => [
        'type' => 2,
        'description' => 'Allows updating of the service',
    ],
    'deny:service.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the service',
    ],
    'service.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the service',
    ],
    'deny:service.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the service',
    ],
    'vhost.read' => [
        'type' => 2,
        'description' => 'Allows reading of the vhost',
    ],
    'deny:vhost.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the vhost',
    ],
    'vhost.create' => [
        'type' => 2,
        'description' => 'Allows creating of the vhost',
    ],
    'deny:vhost.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the vhost',
    ],
    'vhost.update' => [
        'type' => 2,
        'description' => 'Allows updating of the vhost',
    ],
    'deny:vhost.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the vhost',
    ],
    'vhost.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the vhost',
    ],
    'deny:vhost.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the vhost',
    ],
    'purse.create' => [
        'type' => 2,
        'description' => 'Allows creating of the purse',
    ],
    'deny:purse.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the purse',
    ],
    'pnl.read' => [
        'type' => 2,
    ],
    'deny:pnl.read' => [
        'type' => 2,
    ],
    'pnl.update' => [
        'type' => 2,
    ],
    'deny:pnl.update' => [
        'type' => 2,
    ],
    'pnl.read-expenses' => [
        'type' => 2,
    ],
    'deny:pnl.read-expenses' => [
        'type' => 2,
    ],
    'costprice.read' => [
        'type' => 2,
        'description' => 'Allows reading of the costprice',
    ],
    'deny:costprice.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the costprice',
    ],
    'costprice.create' => [
        'type' => 2,
        'description' => 'Allows creating of the costprice',
    ],
    'deny:costprice.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the costprice',
    ],
    'costprice.update' => [
        'type' => 2,
        'description' => 'Allows updating of the costprice',
    ],
    'deny:costprice.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the costprice',
    ],
    'costprice.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the costprice',
    ],
    'deny:costprice.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the costprice',
    ],
    'bill.read' => [
        'type' => 2,
        'description' => 'Allows reading of the bill',
    ],
    'deny:bill.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the bill',
    ],
    'bill.create' => [
        'type' => 2,
        'description' => 'Allows creating of the bill',
    ],
    'deny:bill.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the bill',
    ],
    'bill.update' => [
        'type' => 2,
        'description' => 'Allows updating of the bill',
    ],
    'deny:bill.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the bill',
    ],
    'bill.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the bill',
    ],
    'deny:bill.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the bill',
    ],
    'bill.import' => [
        'type' => 2,
        'description' => 'Allows import bills',
    ],
    'deny:bill.import' => [
        'type' => 2,
        'description' => 'Prohibits import bills',
    ],
    'bill.create-exchange' => [
        'type' => 2,
        'description' => 'Allows exchange currencies',
    ],
    'deny:bill.create-exchange' => [
        'type' => 2,
        'description' => 'Prohibits exchange currencies',
    ],
    'requisites.read' => [
        'type' => 2,
        'description' => 'Allows reading of the requisites',
    ],
    'deny:requisites.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the requisites',
    ],
    'requisites.create' => [
        'type' => 2,
        'description' => 'Allows creating of the requisites',
    ],
    'deny:requisites.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the requisites',
    ],
    'requisites.update' => [
        'type' => 2,
        'description' => 'Allows updating of the requisites',
    ],
    'deny:requisites.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the requisites',
    ],
    'requisites.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the requisites',
    ],
    'deny:requisites.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the requisites',
    ],
    'price.read' => [
        'type' => 2,
        'description' => 'Allows reading of the price',
    ],
    'deny:price.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the price',
    ],
    'finance.read' => [
        'type' => 2,
        'description' => 'Allows reading of the finance',
    ],
    'deny:finance.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the finance',
    ],
    'plan.create' => [
        'type' => 2,
        'description' => 'Allows creating of the plan',
    ],
    'deny:plan.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the plan',
    ],
    'plan.update' => [
        'type' => 2,
        'description' => 'Allows updating of the plan',
    ],
    'deny:plan.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the plan',
    ],
    'plan.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the plan',
    ],
    'deny:plan.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the plan',
    ],
    'plan.force-read' => [
        'type' => 2,
        'description' => 'Allows force-read operation on the plan',
    ],
    'deny:plan.force-read' => [
        'type' => 2,
        'description' => 'Prohibits force-read operation on the plan',
    ],
    'price.update' => [
        'type' => 2,
        'description' => 'Allows updating of the price',
    ],
    'deny:price.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the price',
    ],
    'price.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the price',
    ],
    'deny:price.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the price',
    ],
    'price.create' => [
        'type' => 2,
        'description' => 'Allows creating of the price',
    ],
    'deny:price.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the price',
    ],
    'document.read' => [
        'type' => 2,
        'description' => 'Allows reading of the document',
    ],
    'deny:document.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the document',
    ],
    'document.create' => [
        'type' => 2,
        'description' => 'Allows creating of the document',
    ],
    'deny:document.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the document',
    ],
    'document.invoice' => [
        'type' => 2,
        'description' => 'Allows invoiceing of the document',
    ],
    'deny:document.invoice' => [
        'type' => 2,
        'description' => 'Prohibits invoiceing of the document',
    ],
    'document.update' => [
        'type' => 2,
        'description' => 'Allows updating of the document',
    ],
    'deny:document.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the document',
    ],
    'document.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the document',
    ],
    'deny:document.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the document',
    ],
    'document.generate' => [
        'type' => 2,
        'description' => 'Allows generateing of the document',
    ],
    'deny:document.generate' => [
        'type' => 2,
        'description' => 'Prohibits generateing of the document',
    ],
    'document.generate-all' => [
        'type' => 2,
        'description' => 'Allows generate-all operation on the document',
    ],
    'deny:document.generate-all' => [
        'type' => 2,
        'description' => 'Prohibits generate-all operation on the document',
    ],
    'sale.read' => [
        'type' => 2,
        'description' => 'Allows reading of the sale',
    ],
    'deny:sale.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the sale',
    ],
    'sale.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the sale',
    ],
    'deny:sale.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the sale',
    ],
    'sale.update' => [
        'type' => 2,
        'description' => 'Allows updating of the sale',
    ],
    'deny:sale.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the sale',
    ],
    'sale.create' => [
        'type' => 2,
        'description' => 'Allows creating of the sale',
    ],
    'deny:sale.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the sale',
    ],
    'part.read' => [
        'type' => 2,
        'description' => 'Allows reading of the part',
    ],
    'deny:part.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the part',
    ],
    'part.create' => [
        'type' => 2,
        'description' => 'Allows creating of the part',
    ],
    'deny:part.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the part',
    ],
    'part.update' => [
        'type' => 2,
        'description' => 'Allows updating of the part',
    ],
    'deny:part.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the part',
    ],
    'part.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the part',
    ],
    'deny:part.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the part',
    ],
    'part.read-all-hierarchy' => [
        'type' => 2,
        'description' => 'Allows read-all-hierarchy operation on the part',
    ],
    'deny:part.read-all-hierarchy' => [
        'type' => 2,
        'description' => 'Prohibits read-all-hierarchy operation on the part',
    ],
    'move.read' => [
        'type' => 2,
        'description' => 'Allows reading of the move',
    ],
    'deny:move.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the move',
    ],
    'move.get-directions' => [
        'type' => 2,
        'description' => 'Allows get-directions operation on the move',
    ],
    'deny:move.get-directions' => [
        'type' => 2,
        'description' => 'Prohibits get-directions operation on the move',
    ],
    'move.create' => [
        'type' => 2,
        'description' => 'Allows creating of the move',
    ],
    'deny:move.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the move',
    ],
    'move.update' => [
        'type' => 2,
        'description' => 'Allows updating of the move',
    ],
    'deny:move.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the move',
    ],
    'move.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the move',
    ],
    'deny:move.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the move',
    ],
    'move.read-all' => [
        'type' => 2,
        'description' => 'Allows read-all operation on the move',
    ],
    'deny:move.read-all' => [
        'type' => 2,
        'description' => 'Prohibits read-all operation on the move',
    ],
    'model.read' => [
        'type' => 2,
        'description' => 'Allows reading of the model',
    ],
    'deny:model.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the model',
    ],
    'model.create' => [
        'type' => 2,
        'description' => 'Allows creating of the model',
    ],
    'deny:model.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the model',
    ],
    'model.update' => [
        'type' => 2,
        'description' => 'Allows updating of the model',
    ],
    'deny:model.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the model',
    ],
    'model.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the model',
    ],
    'deny:model.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the model',
    ],
    'order.read' => [
        'type' => 2,
        'description' => 'Allows reading of the order',
    ],
    'deny:order.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the order',
    ],
    'order.create' => [
        'type' => 2,
        'description' => 'Allows creating of the order',
    ],
    'deny:order.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the order',
    ],
    'order.update' => [
        'type' => 2,
        'description' => 'Allows updating of the order',
    ],
    'deny:order.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the order',
    ],
    'order.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the order',
    ],
    'deny:order.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the order',
    ],
    'order.read-profits' => [
        'type' => 2,
        'description' => 'Allows read-profits operation on the order',
    ],
    'deny:order.read-profits' => [
        'type' => 2,
        'description' => 'Prohibits read-profits operation on the order',
    ],
    'stock.read' => [
        'type' => 2,
        'description' => 'Allows reading of the stock',
    ],
    'deny:stock.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the stock',
    ],
    'have-goods' => [
        'type' => 2,
        'description' => 'Allows have-goods operation',
    ],
    'deny:have-goods' => [
        'type' => 2,
        'description' => 'Prohibits have-goods operation',
    ],
    'pay' => [
        'type' => 2,
        'description' => 'Allows paying',
    ],
    'deny:pay' => [
        'type' => 2,
        'description' => 'Prohibits paying',
    ],
    'domain.pay' => [
        'type' => 2,
        'description' => 'Allows paying of the domain',
    ],
    'deny:domain.pay' => [
        'type' => 2,
        'description' => 'Prohibits paying of the domain',
    ],
    'domain.push' => [
        'type' => 2,
        'description' => 'Allows pushing of the domain',
    ],
    'deny:domain.push' => [
        'type' => 2,
        'description' => 'Prohibits pushing of the domain',
    ],
    'domain.delete-agp' => [
        'type' => 2,
        'description' => 'Allows delete-agp operation on the domain',
    ],
    'deny:domain.delete-agp' => [
        'type' => 2,
        'description' => 'Prohibits delete-agp operation on the domain',
    ],
    'certificate.pay' => [
        'type' => 2,
        'description' => 'Allows paying of the certificate',
    ],
    'deny:certificate.pay' => [
        'type' => 2,
        'description' => 'Prohibits paying of the certificate',
    ],
    'certificate.push' => [
        'type' => 2,
        'description' => 'Allows pushing of the certificate',
    ],
    'deny:certificate.push' => [
        'type' => 2,
        'description' => 'Prohibits pushing of the certificate',
    ],
    'client.notify' => [
        'type' => 2,
        'description' => 'Allows notifying of the client',
    ],
    'deny:client.notify' => [
        'type' => 2,
        'description' => 'Prohibits notifying of the client',
    ],
    'access-subclients' => [
        'type' => 2,
        'description' => 'Allows access-subclients operation',
    ],
    'deny:access-subclients' => [
        'type' => 2,
        'description' => 'Prohibits access-subclients operation',
    ],
    'support' => [
        'type' => 2,
        'description' => 'Allows supporting',
    ],
    'deny:support' => [
        'type' => 2,
        'description' => 'Prohibits supporting',
    ],
    'admin' => [
        'type' => 2,
        'description' => 'Allows admining',
    ],
    'deny:admin' => [
        'type' => 2,
        'description' => 'Prohibits admining',
    ],
    'manage' => [
        'type' => 2,
        'description' => 'Allows manageing',
    ],
    'deny:manage' => [
        'type' => 2,
        'description' => 'Prohibits manageing',
    ],
    'access-reseller' => [
        'type' => 2,
        'description' => 'Allows access-reseller operation',
    ],
    'deny:access-reseller' => [
        'type' => 2,
        'description' => 'Prohibits access-reseller operation',
    ],
    'contact.force-verify' => [
        'type' => 2,
        'description' => 'Allows force-verify operation on the contact',
    ],
    'deny:contact.force-verify' => [
        'type' => 2,
        'description' => 'Prohibits force-verify operation on the contact',
    ],
    'mailing.prepare' => [
        'type' => 2,
        'description' => 'Allows prepareing of the mailing',
    ],
    'deny:mailing.prepare' => [
        'type' => 2,
        'description' => 'Prohibits prepareing of the mailing',
    ],
    'mailing.send' => [
        'type' => 2,
        'description' => 'Allows sending of the mailing',
    ],
    'deny:mailing.send' => [
        'type' => 2,
        'description' => 'Prohibits sending of the mailing',
    ],
    'client.set-tmp-pwd' => [
        'type' => 2,
        'description' => 'Allows to set client temporary password',
    ],
    'deny:client.set-tmp-pwd' => [
        'type' => 2,
        'description' => 'Prohibits set-tmp-pwd operation on the client',
    ],
    'resell' => [
        'type' => 2,
        'description' => 'Allows reselling',
    ],
    'deny:resell' => [
        'type' => 2,
        'description' => 'Prohibits reselling',
    ],
    'own' => [
        'type' => 2,
        'description' => 'Allows owning',
    ],
    'deny:own' => [
        'type' => 2,
        'description' => 'Prohibits owning',
    ],
    'see-no-mans' => [
        'type' => 2,
        'description' => 'Allows see-no-mans operation',
    ],
    'deny:see-no-mans' => [
        'type' => 2,
        'description' => 'Prohibits see-no-mans operation',
    ],
    'part.sell' => [
        'type' => 2,
        'description' => 'Allows selling of the part',
    ],
    'deny:part.sell' => [
        'type' => 2,
        'description' => 'Prohibits selling of the part',
    ],
    'client.set-others-allowed-ips' => [
        'type' => 2,
        'description' => 'Allows set-others-allowed-ips operation on the client',
    ],
    'deny:client.set-others-allowed-ips' => [
        'type' => 2,
        'description' => 'Prohibits set-others-allowed-ips operation on the client',
    ],
    'domain.read' => [
        'type' => 2,
        'description' => 'Allows reading of the domain',
    ],
    'deny:domain.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the domain',
    ],
    'domain.update' => [
        'type' => 2,
        'description' => 'Allows updating of the domain',
    ],
    'deny:domain.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the domain',
    ],
    'domain.set-nss' => [
        'type' => 2,
        'description' => 'Allows set-nss operation on the domain',
    ],
    'deny:domain.set-nss' => [
        'type' => 2,
        'description' => 'Prohibits set-nss operation on the domain',
    ],
    'domain.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the domain',
    ],
    'deny:domain.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the domain',
    ],
    'domain.freeze' => [
        'type' => 2,
        'description' => 'Allows freezeing of the domain',
    ],
    'deny:domain.freeze' => [
        'type' => 2,
        'description' => 'Prohibits freezeing of the domain',
    ],
    'domain.unfreeze' => [
        'type' => 2,
        'description' => 'Allows unfreezeing of the domain',
    ],
    'deny:domain.unfreeze' => [
        'type' => 2,
        'description' => 'Prohibits unfreezeing of the domain',
    ],
    'domain.force-push' => [
        'type' => 2,
        'description' => 'Allows force-push operation on the domain',
    ],
    'deny:domain.force-push' => [
        'type' => 2,
        'description' => 'Prohibits force-push operation on the domain',
    ],
    'domain.force-send-foa' => [
        'type' => 2,
        'description' => 'Allows force-send-foa operation on the domain',
    ],
    'deny:domain.force-send-foa' => [
        'type' => 2,
        'description' => 'Prohibits force-send-foa operation on the domain',
    ],
    'domain.force-set-nss' => [
        'type' => 2,
        'description' => 'Allows force-set-nss operation on the domain',
    ],
    'deny:domain.force-set-nss' => [
        'type' => 2,
        'description' => 'Prohibits force-set-nss operation on the domain',
    ],
    'domain.approve-trasfer-out' => [
        'type' => 2,
        'description' => 'Allows approve-trasfer-out operation on the domain',
    ],
    'deny:domain.approve-trasfer-out' => [
        'type' => 2,
        'description' => 'Prohibits approve-trasfer-out operation on the domain',
    ],
    'domain.maintain' => [
        'type' => 2,
        'description' => 'Allow operation with domain in DB',
    ],
    'deny:domain.maintain' => [
        'type' => 2,
        'description' => 'Prohibits operation with domain in DB',
    ],
    'dns.create' => [
        'type' => 2,
        'description' => 'Allows creating of the dns',
    ],
    'deny:dns.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the dns',
    ],
    'dns.read' => [
        'type' => 2,
        'description' => 'Allows reading of the dns',
    ],
    'deny:dns.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the dns',
    ],
    'dns.update' => [
        'type' => 2,
        'description' => 'Allows updating of the dns',
    ],
    'deny:dns.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the dns',
    ],
    'dns.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the dns',
    ],
    'deny:dns.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the dns',
    ],
    'certificate.read' => [
        'type' => 2,
        'description' => 'Allows reading of the certificate',
    ],
    'deny:certificate.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the certificate',
    ],
    'certificate.create' => [
        'type' => 2,
        'description' => 'Allows creating of the certificate',
    ],
    'deny:certificate.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the certificate',
    ],
    'certificate.update' => [
        'type' => 2,
        'description' => 'Allows updating of the certificate',
    ],
    'deny:certificate.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the certificate',
    ],
    'certificate.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the certificate',
    ],
    'deny:certificate.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the certificate',
    ],
    'ticket.read' => [
        'type' => 2,
        'description' => 'Allows reading of the ticket',
    ],
    'deny:ticket.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the ticket',
    ],
    'ticket.create' => [
        'type' => 2,
        'description' => 'Allows creating of the ticket',
    ],
    'deny:ticket.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the ticket',
    ],
    'ticket.answer' => [
        'type' => 2,
        'description' => 'Allows answering of the ticket',
    ],
    'deny:ticket.answer' => [
        'type' => 2,
        'description' => 'Prohibits answering of the ticket',
    ],
    'ticket.close' => [
        'type' => 2,
        'description' => 'Allows closeing of the ticket',
    ],
    'deny:ticket.close' => [
        'type' => 2,
        'description' => 'Prohibits closeing of the ticket',
    ],
    'ticket.update' => [
        'type' => 2,
        'description' => 'Allows updating of the ticket',
    ],
    'deny:ticket.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the ticket',
    ],
    'ticket.delete' => [
        'type' => 2,
        'description' => 'Allows deleting of the ticket',
    ],
    'deny:ticket.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the ticket',
    ],
    'test.beta' => [
        'type' => 2,
        'description' => 'Allows betaing of the test',
    ],
    'deny:test.beta' => [
        'type' => 2,
        'description' => 'Prohibits betaing of the test',
    ],
    'test.alpha' => [
        'type' => 2,
        'description' => 'Allows alphaing of the test',
    ],
    'deny:test.alpha' => [
        'type' => 2,
        'description' => 'Prohibits alphaing of the test',
    ],
    'ref.view.not-used' => [
        'type' => 2,
        'description' => 'Allows view.not-used operation on the ref',
    ],
    'deny:ref.view.not-used' => [
        'type' => 2,
        'description' => 'Prohibits view.not-used operation on the ref',
    ],
    'bill.charges.read' => [
        'type' => 2,
        'description' => 'Allows charges.read operation on the bill',
    ],
    'deny:bill.charges.read' => [
        'type' => 2,
        'description' => 'Prohibits charges.read operation on the bill',
    ],
    'bill.see-server-charges' => [
        'type' => 2,
        'description' => 'Allows to see server charges (detailed bill info)',
    ],
    'deny:bill.see-server-charges' => [
        'type' => 2,
        'description' => 'Denies to see server charges (detailed bill info)',
    ],
    'client.set-description' => [
        'type' => 2,
        'description' => 'Allows set-description operation on the client',
    ],
    'deny:client.set-description' => [
        'type' => 2,
        'description' => 'Prohibits set-description operation on the client',
    ],
    'owner-staff' => [
        'type' => 2,
        'description' => 'Show if user in staff of organization',
    ],
    'deny:owner-staff' => [
        'type' => 2,
        'description' => 'Prohibits owner-staff operation',
    ],
];
