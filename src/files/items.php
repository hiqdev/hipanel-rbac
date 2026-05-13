<?php

return [
    'role:nobody' => [
        'type' => 1,
        'description' => 'Grants no permissions at all; used as a sentinel role for users who should be denied all access.',
        'children' => [
            'nothing',
        ],
    ],
    'role:unauthorized' => [
        'type' => 1,
        'description' => 'Grants unauthenticated visitors the ability to restore their password, make deposits, pay for servers, and read tariff plans.',
        'children' => [
            'restore-password',
            'deposit',
            'server.pay',
            'plan.read',
        ],
    ],
    'role:client.support' => [
        'type' => 1,
        'description' => 'Grants read access to clients, client listing, and client IP addresses.',
        'children' => [
            'client.read',
            'client.list',
            'client.read-ip',
        ],
    ],
    'role:client.manager' => [
        'type' => 1,
        'description' => 'Grants full client CRUD access including blocking, notes, financial info, requisites, referrals, deleted clients, contact verification, purse read/update, and credit control.',
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
            'client.read-financial-info',
            'client.read-requisite',
            'client.read-referral',
            'client.read-deleted',
            'purse.update',
            'purse.read',
            'purse.set-credit',
        ],
    ],
    'role:employee.manager' => [
        'type' => 1,
        'description' => 'Grants the ability to read, create, update, and delete employee records, accept documents, list clients, and manage purses.',
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
        'description' => 'Grants the ability to impersonate (log in as) any client account.',
        'children' => [
            'client.impersonate',
        ],
    ],
    'role:client.master' => [
        'type' => 1,
        'description' => 'Grants the ability to assign and revoke roles on client accounts.',
        'children' => [
            'client.set-roles',
        ],
    ],
    'role:contact.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to contacts.',
        'children' => [
            'contact.read',
            'contact.create',
            'contact.update',
            'contact.delete',
        ],
    ],
    'role:server.user' => [
        'type' => 1,
        'description' => 'Grants the ability to read servers, control power and system settings, and set server notes.',
        'children' => [
            'server.read',
            'server.control-power',
            'server.control-system',
            'server.set-note',
        ],
    ],
    'role:server.admin' => [
        'type' => 1,
        'description' => 'Extends server.user with access to wizard info, system info, server legend, labels, consumption data, settings management, and disk moves.',
        'children' => [
            'role:server.user',
            'server.read-wizzard',
            'server.read-legend',
            'server.read-system-info',
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
        'description' => 'Extends server.user with the ability to block/unblock servers, sell them, set labels, and read financial and billing information.',
        'children' => [
            'role:server.user',
            'server.read-wizzard',
            'server.enable-block',
            'server.disable-block',
            'server.pay',
            'server.sell',
            'server.set-label',
            'server.see-label',
            'server.read-legend',
            'server.read-financial-info',
            'server.read-billing',
        ],
    ],
    'role:server.staff-admin' => [
        'type' => 1,
        'description' => 'Extends server.admin with the ability to create, delete, update servers, and assign hubs to them.',
        'children' => [
            'role:server.admin',
            'server.create',
            'server.delete',
            'server.update',
            'server.assign-hub',
        ],
    ],
    'role:bill.staff-manager' => [
        'type' => 1,
        'description' => 'Extends bill.manager with access to detailed charge data and server charge information.',
        'children' => [
            'role:bill.manager',
            'bill.charges.read',
            'bill.see-server-charges',
        ],
    ],
    'role:server.master' => [
        'type' => 1,
        'description' => 'Grants the full union of server staff-admin and server manager permissions, covering all server operations from creation to financial management.',
        'children' => [
            'role:server.staff-admin',
            'role:server.manager',
        ],
    ],
    'role:hub.user' => [
        'type' => 1,
        'description' => 'Grants read-only access to switches and hubs.',
        'children' => [
            'hub.read',
        ],
    ],
    'role:hub.admin' => [
        'type' => 1,
        'description' => 'Grants read and update access to switches and hubs.',
        'children' => [
            'hub.read',
            'hub.update',
        ],
    ],
    'role:hub.staff-admin' => [
        'type' => 1,
        'description' => 'Extends hub.admin with the ability to create and delete switches and hubs.',
        'children' => [
            'role:hub.admin',
            'hub.create',
            'hub.delete',
        ],
    ],
    'role:hub.manager' => [
        'type' => 1,
        'description' => 'Grants the ability to read and sell switches and hubs.',
        'children' => [
            'hub.read',
            'hub.sell',
        ],
    ],
    'role:hub.master' => [
        'type' => 1,
        'description' => 'Grants the full union of hub staff-admin and hub manager permissions, covering all hub operations from creation to selling.',
        'children' => [
            'role:hub.staff-admin',
            'role:hub.manager',
        ],
    ],
    'role:consumption.user' => [
        'type' => 1,
        'description' => 'Grants read access to resource consumption data for objects the user owns.',
        'children' => [
            'consumption.read',
        ],
    ],
    'role:consumption.manager' => [
        'type' => 1,
        'description' => 'Grants the ability to read, update, and delete resource consumption records for objects the user has access to.',
        'children' => [
            'consumption.read',
            'consumption.update',
            'consumption.delete',
        ],
    ],
    'role:consumption.master' => [
        'type' => 1,
        'description' => 'Grants access to read all resource consumption regardless of ownership, plus the ability to update and delete consumption records.',
        'children' => [
            'consumption.read-all',
            'role:consumption.user',
            'role:consumption.manager',
        ],
    ],
    'role:blacklist.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to blacklist entries.',
        'children' => [
            'blacklist.read',
            'blacklist.create',
            'blacklist.update',
            'blacklist.delete',
        ],
    ],
    'role:config.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to system configuration entries (staff-only, not accessible to resellers or clients).',
        'children' => [
            'config.read',
            'config.create',
            'config.update',
            'config.delete',
        ],
    ],
    'role:integration.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to third-party service integration configurations.',
        'children' => [
            'integration.read',
            'integration.create',
            'integration.update',
            'integration.delete',
        ],
    ],
    'role:account.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to hosting accounts.',
        'children' => [
            'account.read',
            'account.create',
            'account.update',
            'account.delete',
        ],
    ],
    'role:backup.user' => [
        'type' => 1,
        'description' => 'Grants the ability to read and delete backups of hosting services.',
        'children' => [
            'backup.read',
            'backup.delete',
        ],
    ],
    'role:backuping.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to backup configurations for hosting services.',
        'children' => [
            'backuping.read',
            'backuping.create',
            'backuping.update',
            'backuping.delete',
        ],
    ],
    'role:crontab.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to crontab entries for hosting services.',
        'children' => [
            'crontab.read',
            'crontab.create',
            'crontab.update',
            'crontab.delete',
        ],
    ],
    'role:db.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to databases for hosting services.',
        'children' => [
            'db.read',
            'db.create',
            'db.update',
            'db.delete',
        ],
    ],
    'role:zone.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to DNS zones.',
        'children' => [
            'zone.create',
            'zone.update',
            'zone.read',
            'zone.delete',
        ],
    ],
    'role:hdomain.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to hosting domains including DNS configuration.',
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
        'description' => 'Grants full CRUD access to IP address records.',
        'children' => [
            'ip.read',
            'ip.create',
            'ip.update',
            'ip.delete',
        ],
    ],
    'role:mail.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to mail records for hosting services.',
        'children' => [
            'mail.read',
            'mail.create',
            'mail.update',
            'mail.delete',
        ],
    ],
    'role:request.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to hosting configuration requests.',
        'children' => [
            'request.read',
            'request.create',
            'request.update',
            'request.delete',
        ],
    ],
    'role:service.admin' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to software services associated with hosting accounts.',
        'children' => [
            'service.read',
            'service.create',
            'service.update',
            'service.delete',
        ],
    ],
    'role:vhost.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to virtual hosts for hosting services.',
        'children' => [
            'vhost.read',
            'vhost.create',
            'vhost.update',
            'vhost.delete',
        ],
    ],
    'role:hosting.reader' => [
        'type' => 1,
        'description' => 'Grants read-only access to all hosting service objects: accounts, backups, backup configs, crontabs, databases, hosting domains, IPs, mail, requests, services, and virtual hosts.',
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
        'description' => 'Grants full CRUD access to accounts, backups, backup configs, crontabs, databases, hosting domains, mail, requests, and virtual hosts, plus read access to IPs and services.',
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
        'description' => 'Extends hosting.user with full CRUD access to IP addresses and software services, replacing read-only IP/service access.',
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
        'description' => 'Grants read access to purses.',
        'children' => [
            'purse.read',
        ],
    ],
    'role:purse.manager' => [
        'type' => 1,
        'description' => 'Grants the ability to read, create, and update purses.',
        'children' => [
            'role:purse.user',
            'purse.update',
            'purse.create',
        ],
    ],
    'role:purse.master' => [
        'type' => 1,
        'description' => 'Alias for purse.manager; grants the ability to read, create, and update purses.',
        'children' => [
            'role:purse.manager',
        ],
    ],
    'role:pnl.master' => [
        'type' => 1,
        'description' => 'Grants the ability to read and update the profit and loss report, including access to expenses data.',
        'children' => [
            'pnl.read',
            'pnl.update',
            'pnl.read-expenses',
        ],
    ],
    'role:pnl.user' => [
        'type' => 1,
        'description' => 'Grants read access to the profit and loss report.',
        'children' => [
            'pnl.read',
        ],
    ],
    'role:costprice.user' => [
        'type' => 1,
        'description' => 'Grants read access to cost price data.',
        'children' => [
            'costprice.read',
        ],
    ],
    'role:costprice.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to cost price data.',
        'children' => [
            'role:costprice.user',
            'costprice.create',
            'costprice.update',
            'costprice.delete',
        ],
    ],
    'role:bill.user' => [
        'type' => 1,
        'description' => 'Grants read access to bills and the ability to make deposits.',
        'children' => [
            'bill.read',
            'deposit',
        ],
    ],
    'role:bill.junior-manager' => [
        'type' => 1,
        'description' => 'Grants read-only access to bills, without the ability to create, modify, or deposit.',
        'children' => [
            'bill.read',
        ],
    ],
    'role:bill.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to bills, deposits, and purse management (read and update).',
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
        'description' => 'Extends bill.manager with the ability to import bills, perform currency exchange, and view server charges.',
        'children' => [
            'bill.read',
            'bill.create',
            'bill.update',
            'bill.delete',
            'deposit',
            'bill.import',
            'bill.create-exchange',
            'bill.see-server-charges',
            'role:purse.master',
        ],
    ],
    'role:requisites.user' => [
        'type' => 1,
        'description' => 'Grants read access to financial requisites.',
        'children' => [
            'requisites.read',
        ],
    ],
    'role:requisites.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to financial requisites.',
        'children' => [
            'requisites.read',
            'requisites.create',
            'requisites.update',
            'requisites.delete',
        ],
    ],
    'role:plan.user' => [
        'type' => 1,
        'description' => 'Grants read access to tariff plans, prices, and financial summary data.',
        'children' => [
            'plan.read',
            'price.read',
            'finance.read',
        ],
    ],
    'role:plan.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to tariff plans and prices, including force-read and plan notes.',
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
            'plan.set-note',
        ],
    ],
    'role:plan.master' => [
        'type' => 1,
        'description' => 'Alias for plan.manager; grants full CRUD access to tariff plans and prices.',
        'children' => [
            'role:plan.manager',
        ],
    ],
    'role:document.user' => [
        'type' => 1,
        'description' => 'Grants the ability to read and create documents and generate invoices.',
        'children' => [
            'document.read',
            'document.create',
            'document.invoice',
        ],
    ],
    'role:document.employee' => [
        'type' => 1,
        'description' => 'Grants the ability to read and create documents, and accept contractor/employee documents.',
        'children' => [
            'document.read',
            'document.create',
            'document.acceptance',
        ],
    ],
    'role:document.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to documents, plus the ability to generate, accept, and invoice documents.',
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
        'description' => 'Grants the ability to generate all documents system-wide, regardless of ownership.',
        'children' => [
            'document.generate-all',
        ],
    ],
    'role:sale.user' => [
        'type' => 1,
        'description' => 'Grants read access to sales records.',
        'children' => [
            'sale.read',
        ],
    ],
    'role:sale.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to sales records.',
        'children' => [
            'sale.read',
            'sale.delete',
            'sale.update',
            'sale.create',
        ],
    ],
    'role:sale.master' => [
        'type' => 1,
        'description' => 'Alias for sale.manager; grants full CRUD access to sales records.',
        'children' => [
            'role:sale.manager',
        ],
    ],
    'role:finance.reader' => [
        'type' => 1,
        'description' => 'Grants read-only access to tariff plans, bills, documents, and financial summary data.',
        'children' => [
            'plan.read',
            'bill.read',
            'document.read',
            'finance.read',
        ],
    ],
    'role:finance.user' => [
        'type' => 1,
        'description' => 'Grants read access to financial data plus the ability to read bills, make deposits, read plans/prices, and create/read documents and invoices.',
        'children' => [
            'role:finance.reader',
            'role:bill.user',
            'role:plan.user',
            'role:document.user',
        ],
    ],
    'role:finance.employee' => [
        'type' => 1,
        'description' => 'Grants the ability to read bills and make deposits, read and create documents and acceptance records, and read financial summary data.',
        'children' => [
            'role:bill.user',
            'role:document.employee',
            'finance.read',
        ],
    ],
    'role:finance.manager' => [
        'type' => 1,
        'description' => 'Grants read access to financial data and bills, plus full management of tariff plans, documents, and sales.',
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
        'description' => 'Extends finance.manager with full bill CRUD (including deposits), purse management, and plan/sale master permissions.',
        'children' => [
            'role:finance.manager',
            'role:bill.manager',
            'role:plan.master',
            'role:document.manager',
            'role:sale.master',
        ],
    ],
    'role:target.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to billing targets.',
        'children' => [
            'target.read',
            'target.create',
            'target.update',
            'target.delete',
        ],
    ],
    'role:installment-plan.user' => [
        'type' => 1,
        'description' => 'Grants read access to installment plans and sales records.',
        'children' => [
            'installment-plan.read',
            'sale.read',
        ],
    ],
    'role:installment-plan.manager' => [
        'type' => 1,
        'description' => 'Extends installment-plan.user with the ability to delete, update, restore, and manually process installment plans.',
        'children' => [
            'role:installment-plan.user',
            'installment-plan.delete',
            'installment-plan.update',
            'installment-plan.restore',
            'installment-plan.process',
        ],
    ],
    'role:part.user' => [
        'type' => 1,
        'description' => 'Grants read access to stock parts.',
        'children' => [
            'part.read',
        ],
    ],
    'role:part.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to stock parts.',
        'children' => [
            'role:part.user',
            'part.create',
            'part.update',
            'part.delete',
        ],
    ],
    'role:part.master' => [
        'type' => 1,
        'description' => 'Extends part.manager with access to the full part hierarchy and the ability to permanently erase parts with their move history.',
        'children' => [
            'part.read-all-hierarchy',
            'role:part.manager',
            'part.erase',
        ],
    ],
    'role:move.user' => [
        'type' => 1,
        'description' => 'Grants read access to stock movement records.',
        'children' => [
            'move.read',
        ],
    ],
    'role:move.manager' => [
        'type' => 1,
        'description' => 'Extends move.user with the ability to retrieve valid move directions and perform full CRUD on stock movements.',
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
        'description' => 'Extends move.manager with the ability to read all stock movements regardless of ownership.',
        'children' => [
            'role:move.manager',
            'move.read-all',
        ],
    ],
    'role:model.user' => [
        'type' => 1,
        'description' => 'Grants read access to stock hardware models.',
        'children' => [
            'model.read',
        ],
    ],
    'role:model.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to stock hardware models.',
        'children' => [
            'role:model.user',
            'model.create',
            'model.update',
            'model.delete',
        ],
    ],
    'role:model.master' => [
        'type' => 1,
        'description' => 'Alias for model.manager; grants full CRUD access to stock hardware models.',
        'children' => [
            'role:model.manager',
        ],
    ],
    'role:order.user' => [
        'type' => 1,
        'description' => 'Grants read access to stock orders.',
        'children' => [
            'order.read',
        ],
    ],
    'role:order.manager' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to stock orders.',
        'children' => [
            'role:order.user',
            'order.create',
            'order.update',
            'order.delete',
        ],
    ],
    'role:order.master' => [
        'type' => 1,
        'description' => 'Extends order.manager with access to order profit information.',
        'children' => [
            'role:order.manager',
            'order.read-profits',
        ],
    ],
    'role:stock.user' => [
        'type' => 1,
        'description' => 'Grants read access to stock overview, parts, moves, models, and orders.',
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
        'description' => 'Extends stock.user with move management permissions and read access to administrative part data.',
        'children' => [
            'role:stock.user',
            'role:move.manager',
            'part.read-administrative',
        ],
    ],
    'role:stock.manager' => [
        'type' => 1,
        'description' => 'Extends stock.user with full part master permissions (including hierarchy read and erase), move management, and model master permissions.',
        'children' => [
            'role:stock.user',
            'role:part.master',
            'role:move.manager',
            'role:model.master',
        ],
    ],
    'role:stock.master' => [
        'type' => 1,
        'description' => 'Extends stock.manager with read-all access to moves and full order management including profit visibility.',
        'children' => [
            'role:stock.manager',
            'role:move.master',
            'role:order.master',
        ],
    ],
    'role:audit.user' => [
        'type' => 1,
        'description' => 'Grants the ability to read the change history of objects the user has direct access to.',
        'children' => [
            'audit.read',
        ],
    ],
    'role:audit.master' => [
        'type' => 1,
        'description' => 'Extends audit.user with the ability to read change history for any system object regardless of ownership.',
        'children' => [
            'role:audit.user',
            'audit.read_everything',
        ],
    ],
    'role:project.user' => [
        'type' => 1,
        'description' => 'Grants read access to resource consumption, stock parts, and valid stock move directions; intended for internal project tracking.',
        'children' => [
            'consumption.read',
            'part.read',
            'move.get-directions',
        ],
    ],
    'role:client' => [
        'type' => 1,
        'description' => 'Base role for authenticated clients: grants access to tickets, domains, DNS, SSL certificates, contacts, documents, servers, hosting, financial reading, sales, installment plans, and the ability to pay and notify.',
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
            'role:installment-plan.user',
            'client.notify',
            'access-subclients',
        ],
    ],
    'role:support' => [
        'type' => 1,
        'description' => 'Grants ticket management access and read access to clients, domains, DNS, certificates, contacts, servers, and hosting, plus subclient visibility and blacklist management.',
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
        'description' => 'Extends support with hub read access, stock read access, server administration (including system info and wizard), and full hosting administration (IP and service CRUD).',
        'children' => [
            'admin',
            'role:support',
            'role:hub.user',
            'role:stock.user',
            'role:server.admin',
            'role:hosting.admin',
        ],
    ],
    'role:staff-admin' => [
        'type' => 1,
        'description' => 'Extends admin with stock admin permissions (move management, administrative part data), the ability to create/delete/update servers and assign hubs, create/delete hubs, and visibility of unsold objects.',
        'children' => [
            'role:admin',
            'role:stock.admin',
            'role:server.staff-admin',
            'role:hub.staff-admin',
            'see-no-mans',
        ],
    ],
    'role:staff-manager' => [
        'type' => 1,
        'description' => 'Extends manager with bill staff-manager permissions (detailed charge access), installment plan management, and visibility of unsold objects.',
        'children' => [
            'role:bill.staff-manager',
            'role:installment-plan.manager',
            'role:manager',
            'see-no-mans',
        ],
    ],
    'role:accounter' => [
        'type' => 1,
        'description' => 'Extends manager with hub selling rights and full stock management permissions (parts, moves, models).',
        'children' => [
            'role:manager',
            'role:hub.manager',
            'role:stock.manager',
        ],
    ],
    'role:manager' => [
        'type' => 1,
        'description' => 'Grants comprehensive staff management access: support permissions, full document/domain/certificate/contact/client/finance management, server management, consumption management, DNS management, mailing, and billing targets.',
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
            'role:target.manager',
        ],
    ],
    'role:reseller' => [
        'type' => 1,
        'description' => 'Grants all manager permissions plus full finance master access (bills, plans, documents, sales), integration management, and the ability to resell services to sub-clients.',
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
        'description' => 'Grants employees the ability to restore their password, manage contacts, read bills and make deposits, accept documents, and read employee records.',
        'children' => [
            'restore-password',
            'role:contact.user',
            'role:finance.employee',
            'employee.read',
        ],
    ],
    'role:master' => [
        'type' => 1,
        'description' => 'Grants the full union of finance, billing, document, plan, sale, stock, domain, server, and hub master permissions, plus the ability to set client roles and resell services.',
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
        'description' => 'Grants manager permissions plus bill master, stock management, cost price management, and ownership privileges; intended for the root account holder.',
        'children' => [
            'role:manager',
            'role:bill.master',
            'role:stock.manager',
            'role:costprice.manager',
            'resell',
            'own',
        ],
    ],
    'role:superpowers' => [
        'type' => 1,
        'description' => 'Grants the ability to see unsold objects, sell parts, and set allowed IPs on behalf of other clients.',
        'children' => [
            'see-no-mans',
            'part.sell',
            'client.set-others-allowed-ips',
        ],
    ],
    'role:junior-manager' => [
        'type' => 1,
        'description' => 'Grants read-only access to hubs, stock (including full part hierarchy and move directions), tariff plans, documents, bills, clients, contacts, servers, and consumption data; no write permissions.',
        'children' => [
            'access-subclients',
            'access-reseller',
            'role:hub.user',
            'role:stock.user',
            'part.read-all-hierarchy',
            'move.get-directions',
            'plan.force-read',
            'plan.read',
        ],
    ],
    'role:partner' => [
        'type' => 1,
        'description' => 'Grants read-only access to documents, financial data, bills, and contacts, plus the ability to hold goods.',
    ],
    'role:domain.user' => [
        'type' => 1,
        'description' => 'Grants the ability to read, update, delete AGP-period domains, and set nameservers.',
    ],
    'role:domain.manager' => [
        'type' => 1,
        'description' => 'Extends domain.user with the ability to fully delete domains.',
    ],
    'role:domain.master' => [
        'type' => 1,
        'description' => 'Extends domain.manager with the ability to freeze/unfreeze, force-push, force-send FOA, force-set nameservers, approve transfers out, and perform maintenance operations on domains.',
    ],
    'role:dns.user' => [
        'type' => 1,
        'description' => 'Grants full CRUD access to DNS records.',
    ],
    'role:dns.manager' => [
        'type' => 1,
        'description' => 'Alias for dns.user; grants full CRUD access to DNS records.',
    ],
    'role:certificate.user' => [
        'type' => 1,
        'description' => 'Grants the ability to read, create, and update SSL certificates.',
    ],
    'role:certificate.manager' => [
        'type' => 1,
        'description' => 'Extends certificate.user with the ability to delete SSL certificates.',
    ],
    'role:ticket.user' => [
        'type' => 1,
        'description' => 'Grants the ability to read, create, answer, and close support tickets.',
    ],
    'role:ticket.manager' => [
        'type' => 1,
        'description' => 'Extends ticket.user with the ability to update and delete tickets, read templates and statistics, set private flags, recipients, and time tracking.',
    ],
    'role:beta-tester' => [
        'type' => 1,
        'description' => 'Grants access to beta-stage features.',
    ],
    'role:alpha-tester' => [
        'type' => 1,
        'description' => 'Grants access to alpha and beta-stage features for early-access testing.',
    ],
    'role:owner-staff' => [
        'type' => 1,
        'description' => 'Grants owner-representative staff access to bill charges, server charges, full part hierarchy, client descriptions, all stock moves, blacklist management, audit reading, and installment plan management, plus visibility of unsold objects.',
    ],
    'role:almighty' => [
        'type' => 1,
        'description' => 'Testing-only role that combines all staff-admin, staff-manager, manager, document master, finance master, stock master, config manager, cost price manager, PnL master, and blacklist manager permissions.',
    ],
    'nothing' => [
        'type' => 2,
        'description' => 'SYSTEM. Allows nothing',
    ],
    'deny:nothing' => [
        'type' => 2,
        'description' => 'Prohibits nothinging',
    ],
    'restore-password' => [
        'type' => 2,
        'description' => 'Restore password',
    ],
    'deny:restore-password' => [
        'type' => 2,
        'description' => 'Prohibits restore-password operation',
    ],
    'deposit' => [
        'type' => 2,
        'description' => 'Deposit money',
    ],
    'deny:deposit' => [
        'type' => 2,
        'description' => 'Prohibits depositing',
    ],
    'server.pay' => [
        'type' => 2,
        'description' => 'Pay servers',
    ],
    'deny:server.pay' => [
        'type' => 2,
        'description' => 'Prohibits paying of the server',
    ],
    'plan.read' => [
        'type' => 2,
        'description' => 'Read tariff plans',
    ],
    'deny:plan.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the plan',
    ],
    'client.read' => [
        'type' => 2,
        'description' => 'Read clients',
    ],
    'deny:client.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the client',
    ],
    'client.list' => [
        'type' => 2,
        'description' => 'List clients',
    ],
    'deny:client.list' => [
        'type' => 2,
        'description' => 'Prohibits listing of the client',
    ],
    'client.read-ip' => [
        'type' => 2,
        'description' => 'See client IP',
    ],
    'deny:client.read-ip' => [
        'type' => 2,
        'description' => 'Prohibits viewing client\'s IP',
    ],
    'client.create' => [
        'type' => 2,
        'description' => 'Create clients',
    ],
    'deny:client.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the client',
    ],
    'client.update' => [
        'type' => 2,
        'description' => 'Update clients',
    ],
    'deny:client.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the client',
    ],
    'client.delete' => [
        'type' => 2,
        'description' => 'Delete clients',
    ],
    'deny:client.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the client',
    ],
    'contact.set-verified' => [
        'type' => 2,
        'description' => 'Set contact verified',
    ],
    'deny:contact.set-verified' => [
        'type' => 2,
        'description' => 'Prohibits set-verified operation on the contact',
    ],
    'client.block' => [
        'type' => 2,
        'description' => 'Block clients',
    ],
    'deny:client.block' => [
        'type' => 2,
        'description' => 'Prohibits blocking of the client',
    ],
    'client.unblock' => [
        'type' => 2,
        'description' => 'Unblock clients',
    ],
    'deny:client.unblock' => [
        'type' => 2,
        'description' => 'Prohibits unblocking of the client',
    ],
    'client.get-note' => [
        'type' => 2,
        'description' => 'Get client note',
    ],
    'deny:client.get-note' => [
        'type' => 2,
        'description' => 'Prohibits get-note operation on the client',
    ],
    'client.set-note' => [
        'type' => 2,
        'description' => 'Set client note',
    ],
    'deny:client.set-note' => [
        'type' => 2,
        'description' => 'Prohibits set-note operation on the client',
    ],
    'client.read-financial-info' => [
        'type' => 2,
        'description' => 'Read client financial info',
    ],
    'deny:client.read-financial-info' => [
        'type' => 2,
        'description' => 'Prohibits viewing client\'s financial info',
    ],
    'client.read-requisite' => [
        'type' => 2,
        'description' => 'Read requisites set to client',
    ],
    'deny:client.read-requisite' => [
        'type' => 2,
        'description' => 'Prohibits viewing setted requisite to client',
    ],
    'client.read-referral' => [
        'type' => 2,
        'description' => 'Read referral set to client',
    ],
    'deny:client.read-referral' => [
        'type' => 2,
        'description' => 'Prohibits viewing client\'s referral',
    ],
    'client.read-deleted' => [
        'type' => 2,
        'description' => 'Read deleted clients',
    ],
    'deny:client.read-deleted' => [
        'type' => 2,
        'description' => 'Prohibits viewing deleted clients',
    ],
    'purse.update' => [
        'type' => 2,
        'description' => 'Update purses',
    ],
    'deny:purse.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the purse',
    ],
    'purse.read' => [
        'type' => 2,
        'description' => 'Read purses',
    ],
    'deny:purse.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the purse',
    ],
    'purse.set-credit' => [
        'type' => 2,
        'description' => 'Set purse credit',
    ],
    'deny:purse.set-credit' => [
        'type' => 2,
        'description' => 'Prohibits set credit to purse',
    ],
    'employee.read' => [
        'type' => 2,
        'description' => 'Read employees',
        'internal' => true,
    ],
    'deny:employee.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the employee',
    ],
    'employee.create' => [
        'type' => 2,
        'description' => 'Create employees',
        'internal' => true,
    ],
    'deny:employee.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the employee',
    ],
    'employee.update' => [
        'type' => 2,
        'description' => 'Update employees',
        'internal' => true,
    ],
    'deny:employee.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the employee',
    ],
    'employee.delete' => [
        'type' => 2,
        'description' => 'Delete employees',
        'internal' => true,
    ],
    'deny:employee.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the employee',
    ],
    'document.acceptance' => [
        'type' => 2,
        'description' => 'Access acceptance documents',
    ],
    'deny:document.acceptance' => [
        'type' => 2,
        'description' => 'Prohibits accepting of the document',
    ],
    'client.impersonate' => [
        'type' => 2,
        'description' => 'Impersonate a client account by logging in on their behalf',
        'internal' => true,
    ],
    'deny:client.impersonate' => [
        'type' => 2,
        'description' => 'Prohibits impersonating a client account',
    ],
    'client.set-roles' => [
        'type' => 2,
        'description' => 'Set roles to clients',
        'internal' => true,
    ],
    'deny:client.set-roles' => [
        'type' => 2,
        'description' => 'Prohibits assigning roles to client accounts',
    ],
    'contact.read' => [
        'type' => 2,
        'description' => 'Read contacts',
    ],
    'deny:contact.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the contact',
    ],
    'contact.create' => [
        'type' => 2,
        'description' => 'Create contacts',
    ],
    'deny:contact.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the contact',
    ],
    'contact.update' => [
        'type' => 2,
        'description' => 'Update contacts',
    ],
    'deny:contact.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the contact',
    ],
    'contact.delete' => [
        'type' => 2,
        'description' => 'Delete contacts',
    ],
    'deny:contact.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the contact',
    ],
    'server.read' => [
        'type' => 2,
        'description' => 'Read servers',
    ],
    'deny:server.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the server',
    ],
    'server.control-power' => [
        'type' => 2,
        'description' => 'Control server power',
    ],
    'deny:server.control-power' => [
        'type' => 2,
        'description' => 'Prohibits control-power operation on the server',
    ],
    'server.control-system' => [
        'type' => 2,
        'description' => 'Control server system',
    ],
    'deny:server.control-system' => [
        'type' => 2,
        'description' => 'Prohibits control-system operation on the server',
    ],
    'server.set-note' => [
        'type' => 2,
        'description' => 'Set server note',
    ],
    'deny:server.set-note' => [
        'type' => 2,
        'description' => 'Prohibits set-note operation on the server',
    ],
    'server.read-wizzard' => [
        'type' => 2,
        'description' => 'Read whether a server is in wizard mode (i.e. has multiple active services associated with it)',
    ],
    'deny:server.read-wizzard' => [
        'type' => 2,
        'description' => 'Prohibits reading wizard mode info of the server',
    ],
    'server.read-legend' => [
        'type' => 2,
        'description' => 'View the color-coded legend explaining server state and type indicators in the server grid',
    ],
    'deny:server.read-legend' => [
        'type' => 2,
        'description' => 'Prohibits reading legend of the server',
    ],
    'server.read-system-info' => [
        'type' => 2,
        'description' => 'Read server system info',
    ],
    'deny:server.read-system-info' => [
        'type' => 2,
        'description' => 'Prohibits reading system info of the server',
    ],
    'server.wizzard' => [
        'type' => 2,
        'description' => 'Disable wizard mode on a server (wizard mode marks a server as having multiple active services; disabling removes this marker)',
    ],
    'deny:server.wizzard' => [
        'type' => 2,
        'description' => 'Prohibits disabling wizard mode on the server',
    ],
    'server.set-label' => [
        'type' => 2,
        'description' => 'Set server label',
    ],
    'deny:server.set-label' => [
        'type' => 2,
        'description' => 'Prohibits set-label operation on the server',
    ],
    'consumption.read' => [
        'type' => 2,
        'description' => 'Read resource consumption records for servers',
    ],
    'deny:consumption.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the consumption',
    ],
    'server.manage-settings' => [
        'type' => 2,
        'description' => 'Manage server settings',
    ],
    'deny:server.manage-settings' => [
        'type' => 2,
        'description' => 'Prohibits manage-settings operation on the server',
    ],
    'server.see-label' => [
        'type' => 2,
        'description' => 'Read server label',
    ],
    'deny:server.see-label' => [
        'type' => 2,
        'description' => 'Prohibits see-label operation on the server',
    ],
    'server.move-disks' => [
        'type' => 2,
        'description' => 'Exchange/swap disk hardware between servers',
    ],
    'deny:server.move-disks' => [
        'type' => 2,
        'description' => 'Deny move disks between servers',
    ],
    'server.enable-block' => [
        'type' => 2,
        'description' => 'Block servers',
    ],
    'deny:server.enable-block' => [
        'type' => 2,
        'description' => 'Prohibits enable-block operation on the server',
    ],
    'server.disable-block' => [
        'type' => 2,
        'description' => 'Unblock servers',
    ],
    'deny:server.disable-block' => [
        'type' => 2,
        'description' => 'Prohibits disable-block operation on the server',
    ],
    'server.sell' => [
        'type' => 2,
        'description' => 'Assign a server to a client under a tariff plan (create or update a sale record for the server)',
    ],
    'deny:server.sell' => [
        'type' => 2,
        'description' => 'Prohibits selling of the server',
    ],
    'server.read-financial-info' => [
        'type' => 2,
        'description' => 'Read server financial info',
    ],
    'deny:server.read-financial-info' => [
        'type' => 2,
        'description' => 'Prohibits reading financial info of the server',
    ],
    'server.read-billing' => [
        'type' => 2,
        'description' => 'Access manager and billing grid views showing tariff plan, monthly fee, client, and consumption data for servers',
    ],
    'deny:server.read-billing' => [
        'type' => 2,
        'description' => 'Prohibits reading of tariff and sale information of server',
    ],
    'server.create' => [
        'type' => 2,
        'description' => 'Create servers',
        'internal' => true,
    ],
    'deny:server.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the server',
    ],
    'server.delete' => [
        'type' => 2,
        'description' => 'Delete servers',
        'internal' => true,
    ],
    'deny:server.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the server',
    ],
    'server.update' => [
        'type' => 2,
        'description' => 'Update servers',
        'internal' => true,
    ],
    'deny:server.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the server',
    ],
    'server.assign-hub' => [
        'type' => 2,
        'description' => 'Assign switches/hubs to server',
        'internal' => true,
    ],
    'deny:server.assign-hub' => [
        'type' => 2,
        'description' => 'Prohibits assign hub to server',
    ],
    'bill.charges.read' => [
        'type' => 2,
        'description' => 'Read charges (detailed bill info)',
        'internal' => true,
    ],
    'deny:bill.charges.read' => [
        'type' => 2,
        'description' => 'Prohibits charges.read operation on the bill',
    ],
    'bill.see-server-charges' => [
        'type' => 2,
        'description' => 'Read server charges (detailed server bill info)',
        'internal' => true,
    ],
    'deny:bill.see-server-charges' => [
        'type' => 2,
        'description' => 'Denies to see server charges (detailed bill info)',
    ],
    'hub.read' => [
        'type' => 2,
        'description' => 'Read switches/hubs',
    ],
    'deny:hub.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the hub',
    ],
    'hub.update' => [
        'type' => 2,
        'description' => 'Update switches/hubs',
        'internal' => true,
    ],
    'deny:hub.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the hub',
    ],
    'hub.create' => [
        'type' => 2,
        'description' => 'Create switches/hubs',
        'internal' => true,
    ],
    'deny:hub.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the hub',
    ],
    'hub.delete' => [
        'type' => 2,
        'description' => 'Delete switches/hubs',
        'internal' => true,
    ],
    'deny:hub.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the hub',
    ],
    'hub.sell' => [
        'type' => 2,
        'description' => 'Sell switches/hubs',
        'internal' => true,
    ],
    'deny:hub.sell' => [
        'type' => 2,
        'description' => 'Prohibits selling of the hub',
    ],
    'consumption.update' => [
        'type' => 2,
        'description' => 'Update resource consumption records for servers',
    ],
    'deny:consumption.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the consumption',
    ],
    'consumption.delete' => [
        'type' => 2,
        'description' => 'Delete resource consumption records for servers (e.g. clear server resources or flush switch graphs)',
    ],
    'deny:consumption.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the consumption',
    ],
    'consumption.read-all' => [
        'type' => 2,
        'description' => 'Read all resource consumptions',
        'internal' => true,
    ],
    'deny:consumption.read-all' => [
        'type' => 2,
        'description' => 'Prohibits read-all operation on the consumption',
    ],
    'blacklist.read' => [
        'type' => 2,
        'description' => 'Read blacklists',
        'internal' => true,
    ],
    'deny:blacklist.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the blacklist',
    ],
    'blacklist.create' => [
        'type' => 2,
        'description' => 'Create blacklists',
        'internal' => true,
    ],
    'deny:blacklist.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the blacklist',
    ],
    'blacklist.update' => [
        'type' => 2,
        'description' => 'Update blacklists',
        'internal' => true,
    ],
    'deny:blacklist.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the blacklist',
    ],
    'blacklist.delete' => [
        'type' => 2,
        'description' => 'Delete blacklists',
        'internal' => true,
    ],
    'deny:blacklist.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the blacklist',
    ],
    'config.read' => [
        'type' => 2,
        'description' => 'Read server configuration entries (staff-only)',
        'internal' => true,
    ],
    'deny:config.read' => [
        'type' => 2,
        'description' => 'Prohibits reading server configuration entries',
    ],
    'config.create' => [
        'type' => 2,
        'description' => 'Create server configuration entries (staff-only)',
        'internal' => true,
    ],
    'deny:config.create' => [
        'type' => 2,
        'description' => 'Prohibits creating server configuration entries',
    ],
    'config.update' => [
        'type' => 2,
        'description' => 'Update server configuration entries (staff-only)',
        'internal' => true,
    ],
    'deny:config.update' => [
        'type' => 2,
        'description' => 'Prohibits updating server configuration entries',
    ],
    'config.delete' => [
        'type' => 2,
        'description' => 'Delete server configuration entries (staff-only)',
        'internal' => true,
    ],
    'deny:config.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting server configuration entries',
    ],
    'integration.read' => [
        'type' => 2,
        'description' => 'Read integrations',
    ],
    'deny:integration.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the integration',
    ],
    'integration.create' => [
        'type' => 2,
        'description' => 'Create integrations',
    ],
    'deny:integration.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the integration',
    ],
    'integration.update' => [
        'type' => 2,
        'description' => 'Update integrations',
    ],
    'deny:integration.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the integration',
    ],
    'integration.delete' => [
        'type' => 2,
        'description' => 'Delete integrations',
    ],
    'deny:integration.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the integration',
    ],
    'account.read' => [
        'type' => 2,
        'description' => 'Read accounts',
    ],
    'deny:account.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the account',
    ],
    'account.create' => [
        'type' => 2,
        'description' => 'Create accounts',
    ],
    'deny:account.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the account',
    ],
    'account.update' => [
        'type' => 2,
        'description' => 'Update accounts',
    ],
    'deny:account.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the account',
    ],
    'account.delete' => [
        'type' => 2,
        'description' => 'Delete accounts',
    ],
    'deny:account.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the account',
    ],
    'backup.read' => [
        'type' => 2,
        'description' => 'Read backups',
    ],
    'deny:backup.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the backup',
    ],
    'backup.delete' => [
        'type' => 2,
        'description' => 'Delete backups',
    ],
    'deny:backup.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the backup',
    ],
    'backuping.read' => [
        'type' => 2,
        'description' => 'Read backups',
    ],
    'deny:backuping.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the backuping',
    ],
    'backuping.create' => [
        'type' => 2,
        'description' => 'Create backups',
    ],
    'deny:backuping.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the backuping',
    ],
    'backuping.update' => [
        'type' => 2,
        'description' => 'Update backups',
    ],
    'deny:backuping.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the backuping',
    ],
    'backuping.delete' => [
        'type' => 2,
        'description' => 'Delete backups',
    ],
    'deny:backuping.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the backuping',
    ],
    'crontab.read' => [
        'type' => 2,
        'description' => 'Read crontabs',
    ],
    'deny:crontab.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the crontab',
    ],
    'crontab.create' => [
        'type' => 2,
        'description' => 'Create crontabs',
    ],
    'deny:crontab.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the crontab',
    ],
    'crontab.update' => [
        'type' => 2,
        'description' => 'Update crontabs',
    ],
    'deny:crontab.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the crontab',
    ],
    'crontab.delete' => [
        'type' => 2,
        'description' => 'Delete crontabs',
    ],
    'deny:crontab.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the crontab',
    ],
    'db.read' => [
        'type' => 2,
        'description' => 'Read DBs',
    ],
    'deny:db.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the db',
    ],
    'db.create' => [
        'type' => 2,
        'description' => 'Create DBs',
    ],
    'deny:db.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the db',
    ],
    'db.update' => [
        'type' => 2,
        'description' => 'Update DBs',
    ],
    'deny:db.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the db',
    ],
    'db.delete' => [
        'type' => 2,
        'description' => 'Delete DBs',
    ],
    'deny:db.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the db',
    ],
    'zone.create' => [
        'type' => 2,
        'description' => 'Create DNS zones',
        'internal' => true,
    ],
    'deny:zone.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the zone',
    ],
    'zone.update' => [
        'type' => 2,
        'description' => 'Update DNS zones',
        'internal' => true,
    ],
    'deny:zone.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the zone',
    ],
    'zone.read' => [
        'type' => 2,
        'description' => 'Read DNS zones',
        'internal' => true,
    ],
    'deny:zone.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the zone',
    ],
    'zone.delete' => [
        'type' => 2,
        'description' => 'Delete DNS zones',
        'internal' => true,
    ],
    'deny:zone.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the zone',
    ],
    'hdomain.read' => [
        'type' => 2,
        'description' => 'Read hosting domains',
    ],
    'deny:hdomain.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the hdomain',
    ],
    'hdomain.create' => [
        'type' => 2,
        'description' => 'Create hosting domains',
    ],
    'deny:hdomain.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the hdomain',
    ],
    'hdomain.update' => [
        'type' => 2,
        'description' => 'Update hosting domains',
    ],
    'deny:hdomain.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the hdomain',
    ],
    'hdomain.delete' => [
        'type' => 2,
        'description' => 'Delete hosting domains',
    ],
    'deny:hdomain.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the hdomain',
    ],
    'hdomain.set-dns' => [
        'type' => 2,
        'description' => 'Set DNS for hosting domains',
    ],
    'deny:hdomain.set-dns' => [
        'type' => 2,
        'description' => 'Prohibits set-dns operation on the hdomain',
    ],
    'ip.read' => [
        'type' => 2,
        'description' => 'Read IPs',
    ],
    'deny:ip.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the ip',
    ],
    'ip.create' => [
        'type' => 2,
        'description' => 'Create IPs',
    ],
    'deny:ip.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the ip',
    ],
    'ip.update' => [
        'type' => 2,
        'description' => 'Update IPs',
    ],
    'deny:ip.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the ip',
    ],
    'ip.delete' => [
        'type' => 2,
        'description' => 'Delete IPs',
    ],
    'deny:ip.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the ip',
    ],
    'mail.read' => [
        'type' => 2,
        'description' => 'Read mail records',
    ],
    'deny:mail.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the mail',
    ],
    'mail.create' => [
        'type' => 2,
        'description' => 'Create mail records',
    ],
    'deny:mail.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the mail',
    ],
    'mail.update' => [
        'type' => 2,
        'description' => 'Update mail records',
    ],
    'deny:mail.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the mail',
    ],
    'mail.delete' => [
        'type' => 2,
        'description' => 'Delete mail records',
    ],
    'deny:mail.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the mail',
    ],
    'request.read' => [
        'type' => 2,
        'description' => 'Read requests',
    ],
    'deny:request.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the request',
    ],
    'request.create' => [
        'type' => 2,
        'description' => 'Create requests',
    ],
    'deny:request.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the request',
    ],
    'request.update' => [
        'type' => 2,
        'description' => 'Update requests',
    ],
    'deny:request.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the request',
    ],
    'request.delete' => [
        'type' => 2,
        'description' => 'Delete requests',
    ],
    'deny:request.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the request',
    ],
    'service.read' => [
        'type' => 2,
        'description' => 'Read services',
    ],
    'deny:service.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the service',
    ],
    'service.create' => [
        'type' => 2,
        'description' => 'Create services',
    ],
    'deny:service.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the service',
    ],
    'service.update' => [
        'type' => 2,
        'description' => 'Update services',
    ],
    'deny:service.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the service',
    ],
    'service.delete' => [
        'type' => 2,
        'description' => 'Delete services',
    ],
    'deny:service.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the service',
    ],
    'vhost.read' => [
        'type' => 2,
        'description' => 'Read virthosts',
    ],
    'deny:vhost.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the vhost',
    ],
    'vhost.create' => [
        'type' => 2,
        'description' => 'Create virthosts',
    ],
    'deny:vhost.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the vhost',
    ],
    'vhost.update' => [
        'type' => 2,
        'description' => 'Update virthosts',
    ],
    'deny:vhost.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the vhost',
    ],
    'vhost.delete' => [
        'type' => 2,
        'description' => 'Delete virthosts',
    ],
    'deny:vhost.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the vhost',
    ],
    'purse.create' => [
        'type' => 2,
        'description' => 'Create purses',
    ],
    'deny:purse.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the purse',
    ],
    'pnl.read' => [
        'type' => 2,
        'description' => 'Read PNL report',
        'internal' => true,
    ],
    'deny:pnl.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the pnl',
    ],
    'pnl.update' => [
        'type' => 2,
        'description' => 'Update PNL report',
        'internal' => true,
    ],
    'deny:pnl.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the pnl',
    ],
    'pnl.read-expenses' => [
        'type' => 2,
        'description' => 'Read expenses data in PNL report',
        'internal' => true,
    ],
    'deny:pnl.read-expenses' => [
        'type' => 2,
        'description' => 'Prohibits read-expenses operation on the pnl',
    ],
    'costprice.read' => [
        'type' => 2,
        'description' => 'Read costprices',
        'internal' => true,
    ],
    'deny:costprice.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the costprice',
    ],
    'costprice.create' => [
        'type' => 2,
        'description' => 'Create costprices',
        'internal' => true,
    ],
    'deny:costprice.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the costprice',
    ],
    'costprice.update' => [
        'type' => 2,
        'description' => 'Update costprices',
        'internal' => true,
    ],
    'deny:costprice.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the costprice',
    ],
    'costprice.delete' => [
        'type' => 2,
        'description' => 'Delete costprices',
        'internal' => true,
    ],
    'deny:costprice.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the costprice',
    ],
    'bill.read' => [
        'type' => 2,
        'description' => 'Read bills',
    ],
    'deny:bill.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the bill',
    ],
    'bill.create' => [
        'type' => 2,
        'description' => 'Create bills',
    ],
    'deny:bill.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the bill',
    ],
    'bill.update' => [
        'type' => 2,
        'description' => 'Update bills',
    ],
    'deny:bill.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the bill',
    ],
    'bill.delete' => [
        'type' => 2,
        'description' => 'Delete bills',
    ],
    'deny:bill.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the bill',
    ],
    'bill.import' => [
        'type' => 2,
        'description' => 'Import bills from external sources or files into the billing system',
        'internal' => true,
    ],
    'deny:bill.import' => [
        'type' => 2,
        'description' => 'Prohibits importing bills from external sources or files',
    ],
    'bill.create-exchange' => [
        'type' => 2,
        'description' => 'Create a currency exchange bill that converts funds between currencies in a client purse',
        'internal' => true,
    ],
    'deny:bill.create-exchange' => [
        'type' => 2,
        'description' => 'Prohibits creating currency exchange bills',
    ],
    'requisites.read' => [
        'type' => 2,
        'description' => 'Read requisites',
    ],
    'deny:requisites.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the requisites',
    ],
    'requisites.create' => [
        'type' => 2,
        'description' => 'Create requisites',
    ],
    'deny:requisites.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the requisites',
    ],
    'requisites.update' => [
        'type' => 2,
        'description' => 'Update requisites',
    ],
    'deny:requisites.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the requisites',
    ],
    'requisites.delete' => [
        'type' => 2,
        'description' => 'Delete requisites',
    ],
    'deny:requisites.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the requisites',
    ],
    'price.read' => [
        'type' => 2,
        'description' => 'Read tariff prices',
    ],
    'deny:price.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the price',
    ],
    'finance.read' => [
        'type' => 2,
        'description' => 'Read finances',
    ],
    'deny:finance.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the finance',
    ],
    'plan.create' => [
        'type' => 2,
        'description' => 'Create tariff plans',
    ],
    'deny:plan.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the plan',
    ],
    'plan.update' => [
        'type' => 2,
        'description' => 'Update tariff plans',
    ],
    'deny:plan.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the plan',
    ],
    'plan.delete' => [
        'type' => 2,
        'description' => 'Delete tariff plans',
    ],
    'deny:plan.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the plan',
    ],
    'plan.force-read' => [
        'type' => 2,
        'description' => 'Read tariff plans additional data',
    ],
    'deny:plan.force-read' => [
        'type' => 2,
        'description' => 'Prohibits force-read operation on the plan',
    ],
    'price.update' => [
        'type' => 2,
        'description' => 'Update tariff prices',
    ],
    'deny:price.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the price',
    ],
    'price.delete' => [
        'type' => 2,
        'description' => 'Delete tariff prices',
    ],
    'deny:price.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the price',
    ],
    'price.create' => [
        'type' => 2,
        'description' => 'Create tariff prices',
    ],
    'deny:price.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the price',
    ],
    'plan.set-note' => [
        'type' => 2,
        'description' => 'Set tariff plans notes',
    ],
    'deny:plan.set-note' => [
        'type' => 2,
        'description' => 'Prohibits set note to plan',
    ],
    'document.read' => [
        'type' => 2,
        'description' => 'Read documents',
    ],
    'deny:document.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the document',
    ],
    'document.create' => [
        'type' => 2,
        'description' => 'Create documents',
    ],
    'deny:document.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the document',
    ],
    'document.invoice' => [
        'type' => 2,
        'description' => 'Access invoice documents',
    ],
    'deny:document.invoice' => [
        'type' => 2,
        'description' => 'Prohibits invoicing of the document',
    ],
    'document.update' => [
        'type' => 2,
        'description' => 'Update documents',
    ],
    'deny:document.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the document',
    ],
    'document.delete' => [
        'type' => 2,
        'description' => 'Delete documents',
    ],
    'deny:document.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the document',
    ],
    'document.generate' => [
        'type' => 2,
        'description' => 'Generate documents',
    ],
    'deny:document.generate' => [
        'type' => 2,
        'description' => 'Prohibits generating of the document',
    ],
    'document.generate-all' => [
        'type' => 2,
        'description' => 'Trigger bulk generation of financial documents for all purses system-wide',
    ],
    'deny:document.generate-all' => [
        'type' => 2,
        'description' => 'Prohibits bulk generation of financial documents for all purses',
    ],
    'sale.read' => [
        'type' => 2,
        'description' => 'Read sales',
    ],
    'deny:sale.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the sale',
    ],
    'sale.delete' => [
        'type' => 2,
        'description' => 'Delete sales',
    ],
    'deny:sale.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the sale',
    ],
    'sale.update' => [
        'type' => 2,
        'description' => 'Update sales',
    ],
    'deny:sale.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the sale',
    ],
    'sale.create' => [
        'type' => 2,
        'description' => 'Create sales',
    ],
    'deny:sale.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the sale',
    ],
    'target.read' => [
        'type' => 2,
        'description' => 'Read billing targets',
    ],
    'deny:target.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the target',
    ],
    'target.create' => [
        'type' => 2,
        'description' => 'Create billing targets',
    ],
    'deny:target.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the target',
    ],
    'target.update' => [
        'type' => 2,
        'description' => 'Update billing targets',
    ],
    'deny:target.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the target',
    ],
    'target.delete' => [
        'type' => 2,
        'description' => 'Delete billing targets',
    ],
    'deny:target.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the target',
    ],
    'installment-plan.read' => [
        'type' => 2,
        'description' => 'Read installment plans',
    ],
    'deny:installment-plan.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the installment plan',
    ],
    'installment-plan.delete' => [
        'type' => 2,
        'description' => 'Delete installment plans',
        'internal' => true,
    ],
    'deny:installment-plan.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of installment plans',
    ],
    'installment-plan.update' => [
        'type' => 2,
        'description' => 'Update installment plans',
        'internal' => true,
    ],
    'deny:installment-plan.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of installment plans',
    ],
    'installment-plan.restore' => [
        'type' => 2,
        'description' => 'Restore installment plans',
        'internal' => true,
    ],
    'deny:installment-plan.restore' => [
        'type' => 2,
        'description' => 'Prohibits restoring of installment plans',
    ],
    'installment-plan.process' => [
        'type' => 2,
        'description' => 'Manually initiate installment plan processing',
        'internal' => true,
    ],
    'deny:installment-plan.process' => [
        'type' => 2,
        'description' => 'Prohibits manual initiation of installment plan processing',
    ],
    'part.read' => [
        'type' => 2,
        'description' => 'Read stock parts',
    ],
    'deny:part.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the part',
    ],
    'part.create' => [
        'type' => 2,
        'description' => 'Create stock parts',
    ],
    'deny:part.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the part',
    ],
    'part.update' => [
        'type' => 2,
        'description' => 'Update stock parts',
    ],
    'deny:part.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the part',
    ],
    'part.delete' => [
        'type' => 2,
        'description' => 'Delete stock parts',
    ],
    'deny:part.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the part',
    ],
    'part.read-all-hierarchy' => [
        'type' => 2,
        'description' => 'Read the full part hierarchy including parts not directly owned, enabling complete stock tree navigation',
        'internal' => true,
    ],
    'deny:part.read-all-hierarchy' => [
        'type' => 2,
        'description' => 'Prohibits read-all-hierarchy operation on the part',
    ],
    'part.erase' => [
        'type' => 2,
        'description' => 'Completely delete the part along with its move history',
    ],
    'deny:part.erase' => [
        'type' => 2,
        'description' => 'Prohibits erasing of the part',
    ],
    'move.read' => [
        'type' => 2,
        'description' => 'Read stock moves',
    ],
    'deny:move.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the move',
    ],
    'move.get-directions' => [
        'type' => 2,
        'description' => 'Get available stock move directions',
        'internal' => true,
    ],
    'deny:move.get-directions' => [
        'type' => 2,
        'description' => 'Prohibits get-directions operation on the move',
    ],
    'move.create' => [
        'type' => 2,
        'description' => 'Create stock moves',
        'internal' => true,
    ],
    'deny:move.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the move',
    ],
    'move.update' => [
        'type' => 2,
        'description' => 'Update stock moves',
        'internal' => true,
    ],
    'deny:move.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the move',
    ],
    'move.delete' => [
        'type' => 2,
        'description' => 'Delete stock moves',
        'internal' => true,
    ],
    'deny:move.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the move',
    ],
    'move.read-all' => [
        'type' => 2,
        'description' => 'Read all stock moves',
        'internal' => true,
    ],
    'deny:move.read-all' => [
        'type' => 2,
        'description' => 'Prohibits read-all operation on the move',
    ],
    'model.read' => [
        'type' => 2,
        'description' => 'Read stock models',
    ],
    'deny:model.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the model',
    ],
    'model.create' => [
        'type' => 2,
        'description' => 'Create stock models',
        'internal' => true,
    ],
    'deny:model.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the model',
    ],
    'model.update' => [
        'type' => 2,
        'description' => 'Update stock models',
        'internal' => true,
    ],
    'deny:model.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the model',
    ],
    'model.delete' => [
        'type' => 2,
        'description' => 'Delete stock models',
        'internal' => true,
    ],
    'deny:model.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the model',
    ],
    'order.read' => [
        'type' => 2,
        'description' => 'Read stock orders',
        'internal' => true,
    ],
    'deny:order.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the order',
    ],
    'order.create' => [
        'type' => 2,
        'description' => 'Create stock orders',
        'internal' => true,
    ],
    'deny:order.create' => [
        'type' => 2,
        'description' => 'Prohibits creating of the order',
    ],
    'order.update' => [
        'type' => 2,
        'description' => 'Update stock orders',
        'internal' => true,
    ],
    'deny:order.update' => [
        'type' => 2,
        'description' => 'Prohibits updating of the order',
    ],
    'order.delete' => [
        'type' => 2,
        'description' => 'Delete stock orders',
        'internal' => true,
    ],
    'deny:order.delete' => [
        'type' => 2,
        'description' => 'Prohibits deleting of the order',
    ],
    'order.read-profits' => [
        'type' => 2,
        'description' => 'Read info about stock order profits',
        'internal' => true,
    ],
    'deny:order.read-profits' => [
        'type' => 2,
        'description' => 'Prohibits read-profits operation on the order',
    ],
    'stock.read' => [
        'type' => 2,
        'description' => 'Read the stock overview dashboard (aggregate stock statistics)',
    ],
    'deny:stock.read' => [
        'type' => 2,
        'description' => 'Prohibits reading of the stock',
    ],
    'part.read-administrative' => [
        'type' => 2,
        'description' => 'Read administrative part data such as cost, price, and internal fields visible only to staff',
    ],
    'deny:part.read-administrative' => [
        'type' => 2,
        'description' => 'Prohibits reading admin data of the parts',
    ],
    'audit.read' => [
        'type' => 2,
        'description' => 'Read changes history of core objects, you have direct access to',
        'internal' => true,
    ],
    'deny:audit.read' => [
        'type' => 2,
        'description' => 'Explicitly denies reading the change history of core objects.',
    ],
    'audit.read_everything' => [
        'type' => 2,
        'description' => 'Read changes history of any objects',
        'internal' => true,
    ],
    'deny:audit.read_everything' => [
        'type' => 2,
        'description' => 'Explicitly denies reading system objects and comprehensive audit data.',
    ],
    'have-goods' => [
        'type' => 2,
        'description' => 'OBSOLETE. To be removed',
    ],
    'deny:have-goods' => [
        'type' => 2,
        'description' => 'Prohibits have-goods operation',
    ],
    'pay' => [
        'type' => 2,
        'description' => 'OBSOLETE. Replaced with specific pay permissions like server.pay and domain.pay',
    ],
    'deny:pay' => [
        'type' => 2,
        'description' => 'Prohibits paying',
    ],
    'domain.pay' => [
        'type' => 2,
        'description' => 'Pay domains',
    ],
    'deny:domain.pay' => [
        'type' => 2,
        'description' => 'Prohibits paying of the domain',
    ],
    'domain.push' => [
        'type' => 2,
        'description' => 'Push domains',
    ],
    'deny:domain.push' => [
        'type' => 2,
        'description' => 'Prohibits pushing of the domain',
    ],
    'domain.delete-agp' => [
        'type' => 2,
        'description' => 'Delete AGP domains',
    ],
    'deny:domain.delete-agp' => [
        'type' => 2,
        'description' => 'Prohibits delete-agp operation on the domain',
    ],
    'certificate.pay' => [
        'type' => 2,
        'description' => 'Pay certificates',
    ],
    'deny:certificate.pay' => [
        'type' => 2,
        'description' => 'Prohibits paying of the certificate',
    ],
    'certificate.push' => [
        'type' => 2,
        'description' => 'Push certificates',
    ],
    'deny:certificate.push' => [
        'type' => 2,
        'description' => 'Prohibits pushing of the certificate',
    ],
    'client.notify' => [
        'type' => 2,
        'description' => 'Notify clients',
    ],
    'deny:client.notify' => [
        'type' => 2,
        'description' => 'Prohibits notifying of the client',
    ],
    'access-subclients' => [
        'type' => 2,
        'description' => 'Access to subclients
            - Simple clients are NOT granted with this permission
            - This permission is given to resellers and personnel (both internal and external)
            - Without this permission user is limited to see ONLY their own objects
        ',
    ],
    'deny:access-subclients' => [
        'type' => 2,
        'description' => 'Prohibits access-subclients operation',
    ],
    'support' => [
        'type' => 2,
        'description' => 'OBSOLETE. To be replaced with specific permissions',
    ],
    'deny:support' => [
        'type' => 2,
        'description' => 'Prohibits supporting',
    ],
    'admin' => [
        'type' => 2,
        'description' => 'OBSOLETE. To be replaced with specific permissions',
    ],
    'deny:admin' => [
        'type' => 2,
        'description' => 'Prohibits admining',
    ],
    'see-no-mans' => [
        'type' => 2,
        'description' => 'See unowned (no-mans-land) objects such as servers and parts that do not yet belong to any client',
        'internal' => true,
    ],
    'deny:see-no-mans' => [
        'type' => 2,
        'description' => 'Prohibits see-no-mans operation',
    ],
    'manage' => [
        'type' => 2,
        'description' => 'OBSOLETE. To be replaced with specific permissions',
    ],
    'deny:manage' => [
        'type' => 2,
        'description' => 'Prohibits managing',
    ],
    'access-reseller' => [
        'type' => 2,
        'description' => 'Allows a reseller to see and link to sub-clients managed through their own seller account (used for client/seller link visibility and tariff data access in grids)',
    ],
    'deny:access-reseller' => [
        'type' => 2,
        'description' => 'Prohibits reseller-level access to sub-client data and tariff visibility',
    ],
    'contact.force-verify' => [
        'type' => 2,
        'description' => 'Force-verify contacts',
    ],
    'deny:contact.force-verify' => [
        'type' => 2,
        'description' => 'Prohibits force-verify operation on the contact',
    ],
    'mailing.prepare' => [
        'type' => 2,
        'description' => 'Prepare a client mailing by filtering recipients and exporting or forwarding the target list to the mailing service',
    ],
    'deny:mailing.prepare' => [
        'type' => 2,
        'description' => 'Prohibits preparing of the mailing',
    ],
    'mailing.send' => [
        'type' => 2,
        'description' => 'Trigger sending of a prepared mailing to its recipients via the mailing service',
    ],
    'deny:mailing.send' => [
        'type' => 2,
        'description' => 'Prohibits sending of the mailing',
    ],
    'client.set-tmp-pwd' => [
        'type' => 2,
        'description' => 'Set temporary password to client',
    ],
    'deny:client.set-tmp-pwd' => [
        'type' => 2,
        'description' => 'Prohibits set-tmp-pwd operation on the client',
    ],
    'resell' => [
        'type' => 2,
        'description' => 'OBSOLETE. To be replaced with specific permissions',
    ],
    'deny:resell' => [
        'type' => 2,
        'description' => 'Prohibits reselling',
    ],
    'own' => [
        'type' => 2,
        'description' => 'OBSOLETE. Replaced with more specific permissions',
    ],
    'deny:own' => [
        'type' => 2,
        'description' => 'Prohibits owning',
    ],
    'part.sell' => [
        'type' => 2,
        'description' => 'Create a sale for a stock part, assigning it to a buyer client',
        'internal' => true,
    ],
    'deny:part.sell' => [
        'type' => 2,
        'description' => 'Prohibits selling of the part',
    ],
    'client.set-others-allowed-ips' => [
        'type' => 2,
        'description' => 'Set allowed IPs to other clients',
        'internal' => true,
    ],
    'deny:client.set-others-allowed-ips' => [
        'type' => 2,
        'description' => 'Prohibits setting allowed IPs on behalf of other clients',
    ],
];
