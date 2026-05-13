<?php

return [
    'role:nobody' => [
        'description' => 'Grants no permissions at all; used as a sentinel role for users who should be denied all access.',
    ],
    'role:unauthorized' => [
        'description' => 'Grants unauthenticated visitors the ability to restore their password, make deposits, pay for servers, and read tariff plans.',
    ],
    'role:master' => [
        'description' => 'Grants the full union of finance, billing, document, plan, sale, stock, domain, server, and hub master permissions, plus the ability to set client roles and resell services.',
    ],
    'role:client.support' => [
        'description' => 'Grants read access to clients, client listing, and client IP addresses.',
    ],
    'role:client.manager' => [
        'description' => 'Grants full client CRUD access including blocking, notes, financial info, requisites, referrals, deleted clients, contact verification, purse read/update, and credit control.',
    ],
    'role:client.master' => [
        'description' => 'Grants the ability to assign and revoke roles on client accounts.',
    ],
    'role:employee.manager' => [
        'description' => 'Grants the ability to read, create, update, and delete employee records, accept documents, list clients, and manage purses.',
    ],
    'role:client.impersonator' => [
        'description' => 'Grants the ability to impersonate (log in as) any client account.',
    ],
    'role:contact.user' => [
        'description' => 'Grants full CRUD access to contacts.',
    ],
    'role:server.user' => [
        'description' => 'Grants the ability to read servers, control power and system settings, and set server notes.',
    ],
    'role:server.admin' => [
        'description' => 'Extends server.user with access to wizard info, system info, server legend, labels, consumption data, settings management, and disk moves.',
    ],
    'role:server.staff-admin' => [
        'description' => 'Extends server.admin with the ability to create, delete, update servers, and assign hubs to them.',
    ],
    'role:server.manager' => [
        'description' => 'Extends server.user with the ability to block/unblock servers, sell them, set labels, and read financial and billing information.',
    ],
    'role:server.master' => [
        'description' => 'Grants the full union of server staff-admin and server manager permissions, covering all server operations from creation to financial management.',
    ],
    'role:hub.user' => [
        'description' => 'Grants read-only access to switches and hubs.',
    ],
    'role:hub.admin' => [
        'description' => 'Grants read and update access to switches and hubs.',
    ],
    'role:hub.staff-admin' => [
        'description' => 'Extends hub.admin with the ability to create and delete switches and hubs.',
    ],
    'role:hub.manager' => [
        'description' => 'Grants the ability to read and sell switches and hubs.',
    ],
    'role:hub.master' => [
        'description' => 'Grants the full union of hub staff-admin and hub manager permissions, covering all hub operations from creation to selling.',
    ],
    'role:consumption.user' => [
        'description' => 'Grants read access to resource consumption data for objects the user owns.',
    ],
    'role:consumption.manager' => [
        'description' => 'Grants the ability to read, update, and delete resource consumption records for objects the user has access to.',
    ],
    'role:config.manager' => [
        'description' => 'Grants full CRUD access to system configuration entries (staff-only, not accessible to resellers or clients).',
    ],
    'role:integration.manager' => [
        'description' => 'Grants full CRUD access to third-party service integration configurations.',
    ],
    'role:account.user' => [
        'description' => 'Grants full CRUD access to hosting accounts.',
    ],
    'role:backup.user' => [
        'description' => 'Grants the ability to read and delete backups of hosting services.',
    ],
    'role:backuping.user' => [
        'description' => 'Grants full CRUD access to backup configurations for hosting services.',
    ],
    'role:crontab.user' => [
        'description' => 'Grants full CRUD access to crontab entries for hosting services.',
    ],
    'role:db.user' => [
        'description' => 'Grants full CRUD access to databases for hosting services.',
    ],
    'role:zone.manager' => [
        'description' => 'Grants full CRUD access to DNS zones.',
    ],
    'role:hdomain.user' => [
        'description' => 'Grants full CRUD access to hosting domains including DNS configuration.',
    ],
    'role:ip.admin' => [
        'description' => 'Grants full CRUD access to IP address records.',
    ],
    'role:mail.user' => [
        'description' => 'Grants full CRUD access to mail records for hosting services.',
    ],
    'role:request.user' => [
        'description' => 'Grants full CRUD access to hosting configuration requests.',
    ],
    'role:service.admin' => [
        'description' => 'Grants full CRUD access to software services associated with hosting accounts.',
    ],
    'role:vhost.user' => [
        'description' => 'Grants full CRUD access to virtual hosts for hosting services.',
    ],
    'role:hosting.reader' => [
        'description' => 'Grants read-only access to all hosting service objects: accounts, backups, backup configs, crontabs, databases, hosting domains, IPs, mail, requests, services, and virtual hosts.',
    ],
    'role:hosting.user' => [
        'description' => 'Grants full CRUD access to accounts, backups, backup configs, crontabs, databases, hosting domains, mail, requests, and virtual hosts, plus read access to IPs and services.',
    ],
    'role:hosting.admin' => [
        'description' => 'Extends hosting.user with full CRUD access to IP addresses and software services, replacing read-only IP/service access.',
    ],
    'role:bill.user' => [
        'description' => 'Grants read access to bills and the ability to make deposits.',
    ],
    'role:bill.junior-manager' => [
        'description' => 'Grants read-only access to bills, without the ability to create, modify, or deposit.',
    ],
    'role:bill.manager' => [
        'description' => 'Grants full CRUD access to bills, deposits, and purse management (read and update).',
    ],
    'role:bill.master' => [
        'description' => 'Extends bill.manager with the ability to import bills, perform currency exchange, and view server charges.',
    ],
    'role:requisites.user' => [
        'description' => 'Grants read access to financial requisites.',
    ],
    'role:requisites.manager' => [
        'description' => 'Grants full CRUD access to financial requisites.',
    ],
    'role:plan.user' => [
        'description' => 'Grants read access to tariff plans, prices, and financial summary data.',
    ],
    'role:plan.manager' => [
        'description' => 'Grants full CRUD access to tariff plans and prices, including force-read and plan notes.',
    ],
    'role:plan.master' => [
        'description' => 'Alias for plan.manager; grants full CRUD access to tariff plans and prices.',
    ],
    'role:document.user' => [
        'description' => 'Grants the ability to read and create documents and generate invoices.',
    ],
    'role:document.employee' => [
        'description' => 'Grants the ability to read and create documents, and accept contractor/employee documents.',
    ],
    'role:document.manager' => [
        'description' => 'Grants full CRUD access to documents, plus the ability to generate, accept, and invoice documents.',
    ],
    'role:document.master' => [
        'description' => 'Grants the ability to generate all documents system-wide, regardless of ownership.',
    ],
    'role:sale.user' => [
        'description' => 'Grants read access to sales records.',
    ],
    'role:sale.manager' => [
        'description' => 'Grants full CRUD access to sales records.',
    ],
    'role:sale.master' => [
        'description' => 'Alias for sale.manager; grants full CRUD access to sales records.',
    ],
    'role:finance.reader' => [
        'description' => 'Grants read-only access to tariff plans, bills, documents, and financial summary data.',
    ],
    'role:finance.user' => [
        'description' => 'Grants read access to financial data plus the ability to read bills, make deposits, read plans/prices, and create/read documents and invoices.',
    ],
    'role:finance.employee' => [
        'description' => 'Grants the ability to read bills and make deposits, read and create documents and acceptance records, and read financial summary data.',
    ],
    'role:finance.manager' => [
        'description' => 'Grants read access to financial data and bills, plus full management of tariff plans, documents, and sales.',
    ],
    'role:finance.master' => [
        'description' => 'Extends finance.manager with full bill CRUD (including deposits), purse management, and plan/sale master permissions.',
    ],
    'role:stock.user' => [
        'description' => 'Grants read access to stock overview, parts, moves, models, and orders.',
    ],
    'role:stock.manager' => [
        'description' => 'Extends stock.user with full part master permissions (including hierarchy read and erase), move management, and model master permissions.',
    ],
    'role:stock.master' => [
        'description' => 'Extends stock.manager with read-all access to moves and full order management including profit visibility.',
    ],
    'role:order.user' => [
        'description' => 'Grants read access to stock orders.',
    ],
    'role:order.manager' => [
        'description' => 'Grants full CRUD access to stock orders.',
    ],
    'role:order.master' => [
        'description' => 'Extends order.manager with access to order profit information.',
    ],
    'role:part.user' => [
        'description' => 'Grants read access to stock parts.',
    ],
    'role:part.manager' => [
        'description' => 'Grants full CRUD access to stock parts.',
    ],
    'role:part.master' => [
        'description' => 'Extends part.manager with access to the full part hierarchy and the ability to permanently erase parts with their move history.',
    ],
    'role:installment-plan.user' => [
        'description' => 'Grants read access to installment plans and sales records.',
    ],
    'role:installment-plan.manager' => [
        'description' => 'Extends installment-plan.user with the ability to delete, update, restore, and manually process installment plans.',
        'internal' => true,
    ],
    'role:model.user' => [
        'description' => 'Grants read access to stock hardware models.',
    ],
    'role:model.manager' => [
        'description' => 'Grants full CRUD access to stock hardware models.',
    ],
    'role:model.master' => [
        'description' => 'Alias for model.manager; grants full CRUD access to stock hardware models.',
    ],
    'role:move.user' => [
        'description' => 'Grants read access to stock movement records.',
    ],
    'role:move.manager' => [
        'description' => 'Extends move.user with the ability to retrieve valid move directions and perform full CRUD on stock movements.',
    ],
    'role:move.master' => [
        'description' => 'Extends move.manager with the ability to read all stock movements regardless of ownership.',
    ],
    'role:project.user' => [
        'description' => 'Grants read access to resource consumption, stock parts, and valid stock move directions; intended for internal project tracking.',
    ],
    'role:client' => [
        'description' => 'Base role for authenticated clients: grants access to tickets, domains, DNS, SSL certificates, contacts, documents, servers, hosting, financial reading, sales, installment plans, and the ability to pay and notify.',
    ],
    'role:support' => [
        'description' => 'Grants ticket management access and read access to clients, domains, DNS, certificates, contacts, servers, and hosting, plus subclient visibility and blacklist management.',
    ],
    'role:admin' => [
        'description' => 'Extends support with hub read access, stock read access, server administration (including system info and wizard), and full hosting administration (IP and service CRUD).',
    ],
    'role:staff-admin' => [
        'description' => 'Extends admin with stock admin permissions (move management, administrative part data), the ability to create/delete/update servers and assign hubs, create/delete hubs, and visibility of unsold objects.',
    ],
    'role:accounter' => [
        'description' => 'Extends manager with hub selling rights and full stock management permissions (parts, moves, models).',
        'internal' => true,
    ],
    'role:manager' => [
        'description' => 'Grants comprehensive staff management access: support permissions, full document/domain/certificate/contact/client/finance management, server management, consumption management, DNS management, mailing, and billing targets.',
    ],
    'role:reseller' => [
        'description' => 'Grants all manager permissions plus full finance master access (bills, plans, documents, sales), integration management, and the ability to resell services to sub-clients.',
    ],
    'role:owner' => [
        'description' => 'Grants manager permissions plus bill master, stock management, cost price management, and ownership privileges; intended for the root account holder.',
    ],
    'role:superpowers' => [
        'description' => 'Grants the ability to see unsold objects, sell parts, and set allowed IPs on behalf of other clients.',
    ],
    'role:employee' => [
        'description' => 'Grants employees the ability to restore their password, manage contacts, read bills and make deposits, accept documents, and read employee records.',
    ],
    'role:junior-manager' => [
        'description' => 'Grants read-only access to hubs, stock (including full part hierarchy and move directions), tariff plans, documents, bills, clients, contacts, servers, and consumption data; no write permissions.',
    ],
    'role:partner' => [
        'description' => 'Grants read-only access to documents, financial data, bills, and contacts, plus the ability to hold goods.',
    ],
    'role:domain.user' => [
        'description' => 'Grants the ability to read, update, delete AGP-period domains, and set nameservers.',
    ],
    'role:domain.manager' => [
        'description' => 'Extends domain.user with the ability to fully delete domains.',
    ],
    'role:domain.master' => [
        'description' => 'Extends domain.manager with the ability to freeze/unfreeze, force-push, force-send FOA, force-set nameservers, approve transfers out, and perform maintenance operations on domains.',
    ],
    'role:dns.user' => [
        'description' => 'Grants full CRUD access to DNS records.',
    ],
    'role:dns.manager' => [
        'description' => 'Alias for dns.user; grants full CRUD access to DNS records.',
    ],
    'role:certificate.user' => [
        'description' => 'Grants the ability to read, create, and update SSL certificates.',
    ],
    'role:certificate.manager' => [
        'description' => 'Extends certificate.user with the ability to delete SSL certificates.',
    ],
    'role:ticket.user' => [
        'description' => 'Grants the ability to read, create, answer, and close support tickets.',
    ],
    'role:ticket.manager' => [
        'description' => 'Extends ticket.user with the ability to update and delete tickets, read templates and statistics, set private flags, recipients, and time tracking.',
    ],
    'role:beta-tester' => [
        'description' => 'Grants access to beta-stage features.',
    ],
    'role:alpha-tester' => [
        'description' => 'Grants access to alpha and beta-stage features for early-access testing.',
    ],
    'role:owner-staff' => [
        'description' => 'Grants owner-representative staff access to bill charges, server charges, full part hierarchy, client descriptions, all stock moves, blacklist management, audit reading, and installment plan management, plus visibility of unsold objects.',
    ],
    'role:purse.user' => [
        'description' => 'Grants read access to purses.',
    ],
    'role:purse.manager' => [
        'description' => 'Grants the ability to read, create, and update purses.',
    ],
    'role:purse.master' => [
        'description' => 'Alias for purse.manager; grants the ability to read, create, and update purses.',
    ],
    'access-reseller' => [
        'description' => 'Allows a reseller to see and link to sub-clients managed through their own seller account (used for client/seller link visibility and tariff data access in grids)',
    ],
    'access-subclients' => [
        'description' => 'Access to subclients
            - Simple clients are NOT granted with this permission
            - This permission is given to resellers and personnel (both internal and external)
            - Without this permission user is limited to see ONLY their own objects
        ',
    ],
    'account.create' => [
        'description' => 'Create accounts',
    ],
    'account.delete' => [
        'description' => 'Delete accounts',
    ],
    'account.read' => [
        'description' => 'Read accounts',
    ],
    'account.update' => [
        'description' => 'Update accounts',
    ],
    'admin' => [
        'description' => 'OBSOLETE. To be replaced with specific permissions',
    ],
    'backup.delete' => [
        'description' => 'Delete backups',
    ],
    'backup.read' => [
        'description' => 'Read backups',
    ],
    'backuping.create' => [
        'description' => 'Create backups',
    ],
    'backuping.delete' => [
        'description' => 'Delete backups',
    ],
    'backuping.read' => [
        'description' => 'Read backups',
    ],
    'backuping.update' => [
        'description' => 'Update backups',
    ],
    'bill.charges.read' => [
        'description' => 'Read charges (detailed bill info)',
        'internal' => true,
    ],
    'bill.see-server-charges' => [
        'description' => 'Read server charges (detailed server bill info)',
        'internal' => true,
    ],
    'bill.create' => [
        'description' => 'Create bills',
    ],
    'bill.delete' => [
        'description' => 'Delete bills',
    ],
    'bill.read' => [
        'description' => 'Read bills',
    ],
    'bill.update' => [
        'description' => 'Update bills',
    ],
    'bill.import' => [
        'description' => 'Import bills from external sources or files into the billing system',
        'internal' => true,
    ],
    'bill.create-exchange' => [
        'description' => 'Create a currency exchange bill that converts funds between currencies in a client purse',
        'internal' => true,
    ],
    'certificate.create' => [
        'description' => 'Create certificates',
    ],
    'certificate.delete' => [
        'description' => 'Delete certificates',
    ],
    'certificate.pay' => [
        'description' => 'Pay certificates',
    ],
    'certificate.push' => [
        'description' => 'Push certificates',
    ],
    'certificate.read' => [
        'description' => 'Read certificates',
    ],
    'certificate.update' => [
        'description' => 'Update certificates',
    ],
    'client.block' => [
        'description' => 'Block clients',
    ],
    'client.create' => [
        'description' => 'Create clients',
    ],
    'client.delete' => [
        'description' => 'Delete clients',
    ],
    'client.get-note' => [
        'description' => 'Get client note',
    ],
    'client.impersonate' => [
        'description' => 'Impersonate a client account by logging in on their behalf',
        'internal' => true,
    ],
    'client.list' => [
        'description' => 'List clients',
    ],
    'client.read' => [
        'description' => 'Read clients',
    ],
    'client.set-description' => [
        'description' => 'Set client description',
        'internal' => true,
    ],
    'client.set-note' => [
        'description' => 'Set client note',
    ],
    'client.set-others-allowed-ips' => [
        'description' => 'Set allowed IPs to other clients',
        'internal' => true,
    ],
    'client.set-tmp-pwd' => [
        'description' => 'Set temporary password to client',
    ],
    'client.set-roles' => [
        'description' => 'Set roles to clients',
        'internal' => true,
    ],
    'client.unblock' => [
        'description' => 'Unblock clients',
    ],
    'client.update' => [
        'description' => 'Update clients',
    ],
    'client.read-ip' => [
        'description' => 'See client IP',
    ],
    'client.read-financial-info' => [
        'description' => 'Read client financial info',
    ],
    'client.read-requisite' => [
        'description' => 'Read requisites set to client',
    ],
    'client.read-referral' => [
        'description' => 'Read referral set to client',
    ],
    'client.read-deleted' => [
        'description' => 'Read deleted clients',
    ],
    'config.create' => [
        'description' => 'Create server configuration entries (staff-only)',
        'internal' => true,
    ],
    'config.delete' => [
        'description' => 'Delete server configuration entries (staff-only)',
        'internal' => true,
    ],
    'config.read' => [
        'description' => 'Read server configuration entries (staff-only)',
        'internal' => true,
    ],
    'config.update' => [
        'description' => 'Update server configuration entries (staff-only)',
        'internal' => true,
    ],
    'consumption.update' => [
        'description' => 'Update resource consumption records for servers',
    ],
    'consumption.delete' => [
        'description' => 'Delete resource consumption records for servers (e.g. clear server resources or flush switch graphs)',
    ],
    'consumption.read' => [
        'description' => 'Read resource consumption records for servers',
    ],
    'contact.create' => [
        'description' => 'Create contacts',
    ],
    'contact.delete' => [
        'description' => 'Delete contacts',
    ],
    'contact.force-verify' => [
        'description' => 'Force-verify contacts',
    ],
    'contact.read' => [
        'description' => 'Read contacts',
    ],
    'contact.set-verified' => [
        'description' => 'Set contact verified',
    ],
    'contact.update' => [
        'description' => 'Update contacts',
    ],
    'crontab.create' => [
        'description' => 'Create crontabs',
    ],
    'crontab.delete' => [
        'description' => 'Delete crontabs',
    ],
    'crontab.read' => [
        'description' => 'Read crontabs',
    ],
    'crontab.update' => [
        'description' => 'Update crontabs',
    ],
    'db.create' => [
        'description' => 'Create DBs',
    ],
    'db.delete' => [
        'description' => 'Delete DBs',
    ],
    'db.read' => [
        'description' => 'Read DBs',
    ],
    'db.update' => [
        'description' => 'Update DBs',
    ],
    'deny:access-reseller' => [
        'description' => 'Prohibits reseller-level access to sub-client data and tariff visibility',
    ],
    'deny:access-subclients' => [
        'description' => 'Prohibits access-subclients operation',
    ],
    'deny:account.create' => [
        'description' => 'Prohibits creating of the account',
    ],
    'deny:account.delete' => [
        'description' => 'Prohibits deleting of the account',
    ],
    'deny:account.read' => [
        'description' => 'Prohibits reading of the account',
    ],
    'deny:account.update' => [
        'description' => 'Prohibits updating of the account',
    ],
    'deny:admin' => [
        'description' => 'Prohibits admining',
    ],
    'deny:backup.delete' => [
        'description' => 'Prohibits deleting of the backup',
    ],
    'deny:backup.read' => [
        'description' => 'Prohibits reading of the backup',
    ],
    'deny:backuping.create' => [
        'description' => 'Prohibits creating of the backuping',
    ],
    'deny:backuping.delete' => [
        'description' => 'Prohibits deleting of the backuping',
    ],
    'deny:backuping.read' => [
        'description' => 'Prohibits reading of the backuping',
    ],
    'deny:backuping.update' => [
        'description' => 'Prohibits updating of the backuping',
    ],
    'deny:bill.charges.read' => [
        'description' => 'Prohibits charges.read operation on the bill',
    ],
    'deny:bill.create' => [
        'description' => 'Prohibits creating of the bill',
    ],
    'deny:bill.delete' => [
        'description' => 'Prohibits deleting of the bill',
    ],
    'deny:bill.read' => [
        'description' => 'Prohibits reading of the bill',
    ],
    'deny:bill.update' => [
        'description' => 'Prohibits updating of the bill',
    ],
    'deny:bill.import' => [
        'description' => 'Prohibits importing bills from external sources or files',
        'internal' => true,
    ],
    'deny:bill.create-exchange' => [
        'description' => 'Prohibits creating currency exchange bills',
        'internal' => true,
    ],
    'deny:bill.see-server-charges' => [
        'description' => 'Denies to see server charges (detailed bill info)',
    ],
    'deny:certificate.create' => [
        'description' => 'Prohibits creating of the certificate',
    ],
    'deny:certificate.delete' => [
        'description' => 'Prohibits deleting of the certificate',
    ],
    'deny:certificate.pay' => [
        'description' => 'Prohibits paying of the certificate',
    ],
    'deny:certificate.push' => [
        'description' => 'Prohibits pushing of the certificate',
    ],
    'deny:certificate.read' => [
        'description' => 'Prohibits reading of the certificate',
    ],
    'deny:certificate.update' => [
        'description' => 'Prohibits updating of the certificate',
    ],
    'deny:client.block' => [
        'description' => 'Prohibits blocking of the client',
    ],
    'deny:client.create' => [
        'description' => 'Prohibits creating of the client',
    ],
    'deny:client.delete' => [
        'description' => 'Prohibits deleting of the client',
    ],
    'deny:client.get-note' => [
        'description' => 'Prohibits get-note operation on the client',
    ],
    'deny:client.impersonate' => [
        'description' => 'Prohibits impersonating a client account',
        'internal' => true,
    ],
    'deny:client.list' => [
        'description' => 'Prohibits listing of the client',
    ],
    'deny:client.read' => [
        'description' => 'Prohibits reading of the client',
    ],
    'deny:client.set-description' => [
        'description' => 'Prohibits set-description operation on the client',
    ],
    'deny:client.set-note' => [
        'description' => 'Prohibits set-note operation on the client',
    ],
    'deny:client.set-others-allowed-ips' => [
        'description' => 'Prohibits setting allowed IPs on behalf of other clients',
        'internal' => true,
    ],
    'deny:client.set-tmp-pwd' => [
        'description' => 'Prohibits set-tmp-pwd operation on the client',
    ],
    'deny:client.set-roles' => [
        'description' => 'Prohibits assigning roles to client accounts',
        'internal' => true,
    ],
    'deny:client.unblock' => [
        'description' => 'Prohibits unblocking of the client',
    ],
    'deny:client.update' => [
        'description' => 'Prohibits updating of the client',
    ],
    'deny:config.create' => [
        'description' => 'Prohibits creating server configuration entries',
        'internal' => true,
    ],
    'deny:config.delete' => [
        'description' => 'Prohibits deleting server configuration entries',
        'internal' => true,
    ],
    'deny:config.read' => [
        'description' => 'Prohibits reading server configuration entries',
        'internal' => true,
    ],
    'deny:config.update' => [
        'description' => 'Prohibits updating server configuration entries',
        'internal' => true,
    ],
    'deny:consumption.update' => [
        'description' => 'Prohibits updating of the consumption',
    ],
    'deny:consumption.delete' => [
        'description' => 'Prohibits deleting of the consumption',
    ],
    'deny:consumption.read' => [
        'description' => 'Prohibits reading of the consumption',
    ],
    'deny:contact.create' => [
        'description' => 'Prohibits creating of the contact',
    ],
    'deny:contact.delete' => [
        'description' => 'Prohibits deleting of the contact',
    ],
    'deny:contact.force-verify' => [
        'description' => 'Prohibits force-verify operation on the contact',
    ],
    'deny:contact.read' => [
        'description' => 'Prohibits reading of the contact',
    ],
    'deny:contact.set-verified' => [
        'description' => 'Prohibits set-verified operation on the contact',
    ],
    'deny:contact.update' => [
        'description' => 'Prohibits updating of the contact',
    ],
    'deny:crontab.create' => [
        'description' => 'Prohibits creating of the crontab',
    ],
    'deny:crontab.delete' => [
        'description' => 'Prohibits deleting of the crontab',
    ],
    'deny:crontab.read' => [
        'description' => 'Prohibits reading of the crontab',
    ],
    'deny:crontab.update' => [
        'description' => 'Prohibits updating of the crontab',
    ],
    'deny:db.create' => [
        'description' => 'Prohibits creating of the db',
    ],
    'deny:db.delete' => [
        'description' => 'Prohibits deleting of the db',
    ],
    'deny:db.read' => [
        'description' => 'Prohibits reading of the db',
    ],
    'deny:db.update' => [
        'description' => 'Prohibits updating of the db',
    ],
    'deny:deposit' => [
        'description' => 'Prohibits depositing',
    ],
    'deny:dns.create' => [
        'description' => 'Prohibits creating of the dns',
    ],
    'deny:dns.delete' => [
        'description' => 'Prohibits deleting of the dns',
    ],
    'deny:dns.read' => [
        'description' => 'Prohibits reading of the dns',
    ],
    'deny:dns.update' => [
        'description' => 'Prohibits updating of the dns',
    ],
    'deny:document.acceptance' => [
        'description' => 'Prohibits accepting of the document',
    ],
    'deny:document.create' => [
        'description' => 'Prohibits creating of the document',
    ],
    'deny:document.delete' => [
        'description' => 'Prohibits deleting of the document',
    ],
    'deny:document.generate' => [
        'description' => 'Prohibits generating of the document',
    ],
    'deny:document.generate-all' => [
        'description' => 'Prohibits bulk generation of financial documents for all purses',
    ],
    'deny:document.invoice' => [
        'description' => 'Prohibits invoicing of the document',
    ],
    'deny:document.read' => [
        'description' => 'Prohibits reading of the document',
    ],
    'deny:document.update' => [
        'description' => 'Prohibits updating of the document',
    ],
    'deny:domain.approve-trasfer-out' => [
        'description' => 'Prohibits approving domain transfer out',
        'internal' => true,
    ],
    'deny:domain.delete' => [
        'description' => 'Prohibits deleting of the domain',
    ],
    'deny:domain.delete-agp' => [
        'description' => 'Prohibits delete-agp operation on the domain',
    ],
    'deny:domain.force-push' => [
        'description' => 'Prohibits force-push operation on the domain',
        'internal' => true,
    ],
    'deny:domain.force-send-foa' => [
        'description' => 'Prohibits force-send-foa operation on the domain',
        'internal' => true,
    ],
    'deny:domain.freeze' => [
        'description' => 'Prohibits freezing of the domain',
        'internal' => true,
    ],
    'deny:domain.pay' => [
        'description' => 'Prohibits paying of the domain',
    ],
    'deny:domain.push' => [
        'description' => 'Prohibits pushing of the domain',
    ],
    'deny:domain.read' => [
        'description' => 'Prohibits reading of the domain',
    ],
    'deny:domain.set-nss' => [
        'description' => 'Prohibits set-nss operation on the domain',
    ],
    'deny:domain.force-set-nss' => [
        'description' => 'Prohibits force-set-nss operation on the domain',
        'internal' => true,
    ],
    'deny:domain.unfreeze' => [
        'description' => 'Prohibits unfreezing of the domain',
        'internal' => true,
    ],
    'deny:domain.update' => [
        'description' => 'Prohibits updating of the domain',
    ],
    'deny:employee.create' => [
        'description' => 'Prohibits creating of the employee',
    ],
    'deny:employee.delete' => [
        'description' => 'Prohibits deleting of the employee',
    ],
    'deny:employee.read' => [
        'description' => 'Prohibits reading of the employee',
    ],
    'deny:employee.update' => [
        'description' => 'Prohibits updating of the employee',
    ],
    'deny:finance.read' => [
        'description' => 'Prohibits reading of the finance',
    ],
    'deny:have-goods' => [
        'description' => 'Prohibits have-goods operation',
    ],
    'deny:hdomain.create' => [
        'description' => 'Prohibits creating of the hdomain',
    ],
    'deny:hdomain.delete' => [
        'description' => 'Prohibits deleting of the hdomain',
    ],
    'deny:hdomain.read' => [
        'description' => 'Prohibits reading of the hdomain',
    ],
    'deny:hdomain.set-dns' => [
        'description' => 'Prohibits set-dns operation on the hdomain',
    ],
    'deny:hdomain.update' => [
        'description' => 'Prohibits updating of the hdomain',
    ],
    'deny:domain.maintain' => [
        'description' => 'Prohibits low-level maintenance operations on domains in the database',
        'internal' => true,
    ],
    'deny:hub.create' => [
        'description' => 'Prohibits creating of the hub',
    ],
    'deny:hub.delete' => [
        'description' => 'Prohibits deleting of the hub',
    ],
    'deny:hub.read' => [
        'description' => 'Prohibits reading of the hub',
    ],
    'deny:hub.sell' => [
        'description' => 'Prohibits selling of the hub',
        'internal' => true,
    ],
    'deny:hub.update' => [
        'description' => 'Prohibits updating of the hub',
    ],
    'deny:integration.create' => [
        'description' => 'Prohibits creating of the integration',
    ],
    'deny:integration.delete' => [
        'description' => 'Prohibits deleting of the integration',
    ],
    'deny:integration.read' => [
        'description' => 'Prohibits reading of the integration',
    ],
    'deny:integration.update' => [
        'description' => 'Prohibits updating of the integration',
    ],
    'deny:ip.create' => [
        'description' => 'Prohibits creating of the ip',
    ],
    'deny:ip.delete' => [
        'description' => 'Prohibits deleting of the ip',
    ],
    'deny:ip.read' => [
        'description' => 'Prohibits reading of the ip',
    ],
    'deny:ip.update' => [
        'description' => 'Prohibits updating of the ip',
    ],
    'deny:mail.create' => [
        'description' => 'Prohibits creating of the mail',
    ],
    'deny:mail.delete' => [
        'description' => 'Prohibits deleting of the mail',
    ],
    'deny:mail.read' => [
        'description' => 'Prohibits reading of the mail',
    ],
    'deny:mail.update' => [
        'description' => 'Prohibits updating of the mail',
    ],
    'deny:mailing.prepare' => [
        'description' => 'Prohibits preparing of the mailing',
    ],
    'deny:mailing.send' => [
        'description' => 'Prohibits sending of the mailing',
    ],
    'deny:manage' => [
        'description' => 'Prohibits managing',
    ],
    'deny:model.create' => [
        'description' => 'Prohibits creating of the model',
        'internal' => true,
    ],
    'deny:model.delete' => [
        'description' => 'Prohibits deleting of the model',
        'internal' => true,
    ],
    'deny:model.read' => [
        'description' => 'Prohibits reading of the model',
    ],
    'deny:model.update' => [
        'description' => 'Prohibits updating of the model',
        'internal' => true,
    ],
    'deny:move.create' => [
        'description' => 'Prohibits creating of the move',
    ],
    'deny:move.delete' => [
        'description' => 'Prohibits deleting of the move',
    ],
    'deny:move.get-directions' => [
        'description' => 'Prohibits get-directions operation on the move',
    ],
    'deny:move.read' => [
        'description' => 'Prohibits reading of the move',
    ],
    'deny:move.read-all' => [
        'description' => 'Prohibits read-all operation on the move',
    ],
    'deny:move.update' => [
        'description' => 'Prohibits updating of the move',
    ],
    'deny:nothing' => [
        'description' => 'Prohibits nothinging',
    ],
    'deny:order.create' => [
        'description' => 'Prohibits creating of the order',
    ],
    'deny:order.delete' => [
        'description' => 'Prohibits deleting of the order',
    ],
    'deny:order.read' => [
        'description' => 'Prohibits reading of the order',
    ],
    'deny:order.read-profits' => [
        'description' => 'Prohibits read-profits operation on the order',
    ],
    'deny:order.update' => [
        'description' => 'Prohibits updating of the order',
    ],
    'deny:own' => [
        'description' => 'Prohibits owning',
    ],
    'deny:part.create' => [
        'description' => 'Prohibits creating of the part',
    ],
    'deny:part.delete' => [
        'description' => 'Prohibits deleting of the part',
    ],
    'deny:part.read' => [
        'description' => 'Prohibits reading of the part',
    ],
    'deny:part.sell' => [
        'description' => 'Prohibits selling of the part',
        'internal' => true,
    ],
    'deny:part.update' => [
        'description' => 'Prohibits updating of the part',
    ],
    'deny:part.read-administrative' => [
        'description' => 'Prohibits reading admin data of the parts',
    ],
    'deny:plan.create' => [
        'description' => 'Prohibits creating of the plan',
    ],
    'deny:plan.delete' => [
        'description' => 'Prohibits deleting of the plan',
    ],
    'deny:plan.force-read' => [
        'description' => 'Prohibits force-read operation on the plan',
    ],
    'deny:plan.read' => [
        'description' => 'Prohibits reading of the plan',
    ],
    'deny:plan.update' => [
        'description' => 'Prohibits updating of the plan',
    ],
    'deny:plan.set-note' => [
        'description' => 'Prohibits set note to plan',
    ],
    'deny:price.create' => [
        'description' => 'Prohibits creating of the price',
    ],
    'deny:price.delete' => [
        'description' => 'Prohibits deleting of the price',
    ],
    'deny:price.read' => [
        'description' => 'Prohibits reading of the price',
    ],
    'deny:price.update' => [
        'description' => 'Prohibits updating of the price',
    ],
    'deny:purse.update' => [
        'description' => 'Prohibits updating of the purse',
    ],
    'deny:purse.set-credit' => [
        'description' => 'Prohibits set credit to purse',
    ],
    'deny:ref.view.not-used' => [
        'description' => 'Prohibits view.not-used operation on the ref',
    ],
    'deny:request.create' => [
        'description' => 'Prohibits creating of the request',
    ],
    'deny:request.delete' => [
        'description' => 'Prohibits deleting of the request',
    ],
    'deny:request.read' => [
        'description' => 'Prohibits reading of the request',
    ],
    'deny:request.update' => [
        'description' => 'Prohibits updating of the request',
    ],
    'deny:requisites.create' => [
        'description' => 'Prohibits creating of the requisites',
    ],
    'deny:requisites.delete' => [
        'description' => 'Prohibits deleting of the requisites',
    ],
    'deny:requisites.read' => [
        'description' => 'Prohibits reading of the requisites',
    ],
    'deny:requisites.update' => [
        'description' => 'Prohibits updating of the requisites',
    ],
    'deny:resell' => [
        'description' => 'Prohibits reselling',
    ],
    'deny:restore-password' => [
        'description' => 'Prohibits restore-password operation',
    ],
    'deny:sale.delete' => [
        'description' => 'Prohibits deleting of the sale',
    ],
    'deny:sale.read' => [
        'description' => 'Prohibits reading of the sale',
    ],
    'deny:see-no-mans' => [
        'description' => 'Prohibits see-no-mans operation',
    ],
    'deny:server.control-power' => [
        'description' => 'Prohibits control-power operation on the server',
    ],
    'deny:server.control-system' => [
        'description' => 'Prohibits control-system operation on the server',
    ],
    'deny:server.create' => [
        'description' => 'Prohibits creating of the server',
    ],
    'deny:server.delete' => [
        'description' => 'Prohibits deleting of the server',
    ],
    'deny:server.disable-block' => [
        'description' => 'Prohibits disable-block operation on the server',
    ],
    'deny:server.enable-block' => [
        'description' => 'Prohibits enable-block operation on the server',
    ],
    'deny:server.manage-settings' => [
        'description' => 'Prohibits manage-settings operation on the server',
    ],
    'deny:server.pay' => [
        'description' => 'Prohibits paying of the server',
    ],
    'deny:server.read' => [
        'description' => 'Prohibits reading of the server',
    ],
    'deny:server.read-financial-info' => [
        'description' => 'Prohibits reading financial info of the server',
    ],
    'deny:server.read-system-info' => [
        'description' => 'Prohibits reading system info of the server',
    ],
    'deny:server.read-billing' => [
        'description' => 'Prohibits reading of tariff and sale information of server',
    ],
    'deny:server.read-wizzard' => [
        'description' => 'Prohibits reading wizard mode info of the server',
    ],
    'deny:server.read-legend' => [
        'description' => 'Prohibits reading legend of the server',
    ],
    'deny:server.sell' => [
        'description' => 'Prohibits selling of the server',
    ],
    'deny:server.set-label' => [
        'description' => 'Prohibits set-label operation on the server',
    ],
    'deny:server.set-note' => [
        'description' => 'Prohibits set-note operation on the server',
    ],
    'deny:server.update' => [
        'description' => 'Prohibits updating of the server',
    ],
    'deny:server.wizzard' => [
        'description' => 'Prohibits disabling wizard mode on the server',
    ],
    'deny:server.assign-hub' => [
        'description' => 'Prohibits assign hub to server',
    ],
    'deny:service.create' => [
        'description' => 'Prohibits creating of the service',
    ],
    'deny:service.delete' => [
        'description' => 'Prohibits deleting of the service',
    ],
    'deny:service.read' => [
        'description' => 'Prohibits reading of the service',
    ],
    'deny:service.update' => [
        'description' => 'Prohibits updating of the service',
    ],
    'deny:stock.read' => [
        'description' => 'Prohibits reading of the stock',
    ],
    'deny:support' => [
        'description' => 'Prohibits supporting',
    ],
    'deny:test.alpha' => [
        'description' => 'Prohibits alphatesting of the test',
    ],
    'deny:test.beta' => [
        'description' => 'Prohibits betatesting of the test',
    ],
    'deny:ticket.answer' => [
        'description' => 'Prohibits answering of the ticket',
    ],
    'deny:ticket.close' => [
        'description' => 'Prohibits closing of the ticket',
    ],
    'deny:ticket.create' => [
        'description' => 'Prohibits creating of the ticket',
    ],
    'deny:ticket.delete' => [
        'description' => 'Prohibits deleting of the ticket',
    ],
    'deny:ticket.read' => [
        'description' => 'Prohibits reading of the ticket',
    ],
    'deny:ticket.update' => [
        'description' => 'Prohibits updating of the ticket',
    ],
    'deny:ticket.read-templates' => [
        'description' => 'Prohibits viewing ticket templates',
    ],
    'deny:ticket.read-statistics' => [
        'description' => 'Prohibits viewing tickets statistics',
    ],
    'deny:ticket.set-private' => [
        'description' => 'Prohibits setting `private` to answer',
    ],
    'deny:ticket.set-recipient' => [
        'description' => 'Prohibits setting ticket\'s recipient',
    ],
    'deny:ticket.set-time' => [
        'description' => 'Prohibits setting spent time to ticket',
    ],
    'deny:vhost.create' => [
        'description' => 'Prohibits creating of the vhost',
    ],
    'deny:vhost.delete' => [
        'description' => 'Prohibits deleting of the vhost',
    ],
    'deny:vhost.read' => [
        'description' => 'Prohibits reading of the vhost',
    ],
    'deny:vhost.update' => [
        'description' => 'Prohibits updating of the vhost',
    ],
    'deny:zone.create' => [
        'description' => 'Prohibits creating of the zone',
    ],
    'deny:zone.delete' => [
        'description' => 'Prohibits deleting of the zone',
    ],
    'deny:zone.read' => [
        'description' => 'Prohibits reading of the zone',
    ],
    'deny:zone.update' => [
        'description' => 'Prohibits updating of the zone',
    ],
    'deposit' => [
        'description' => 'Deposit money',
    ],
    'dns.create' => [
        'description' => 'Create DNS records',
    ],
    'dns.delete' => [
        'description' => 'Delete DNS records',
    ],
    'dns.read' => [
        'description' => 'Read DNS records',
    ],
    'dns.update' => [
        'description' => 'Update DNS records',
    ],
    'document.acceptance' => [
        'description' => 'Access acceptance documents',
    ],
    'document.create' => [
        'description' => 'Create documents',
    ],
    'document.delete' => [
        'description' => 'Delete documents',
    ],
    'document.generate' => [
        'description' => 'Generate documents',
    ],
    'document.generate-all' => [
        'description' => 'Trigger bulk generation of financial documents for all purses system-wide',
    ],
    'document.invoice' => [
        'description' => 'Access invoice documents',
    ],
    'document.read' => [
        'description' => 'Read documents',
    ],
    'document.update' => [
        'description' => 'Update documents',
    ],
    'domain.approve-trasfer-out' => [
        'description' => 'Approve domain transfer out',
        'internal' => true,
    ],
    'domain.delete' => [
        'description' => 'Delete domains',
    ],
    'domain.delete-agp' => [
        'description' => 'Delete AGP domains',
    ],
    'domain.force-push' => [
        'description' => 'Force push domains',
        'internal' => true,
    ],
    'domain.force-send-foa' => [
        'description' => 'Force send FOA for domains',
        'internal' => true,
    ],
    'domain.freeze' => [
        'description' => 'Freeze domains',
        'internal' => true,
    ],
    'domain.pay' => [
        'description' => 'Pay domains',
    ],
    'domain.push' => [
        'description' => 'Push domains',
    ],
    'domain.read' => [
        'description' => 'Read domains',
    ],
    'domain.set-nss' => [
        'description' => 'Set domain NSs',
    ],
    'domain.force-set-nss' => [
        'description' => 'Force set domain NSs',
        'internal' => true,
    ],
    'domain.unfreeze' => [
        'description' => 'Unfreeze domains',
        'internal' => true,
    ],
    'domain.update' => [
        'description' => 'Update domains',
    ],
    'domain.maintain' => [
        'description' => 'Perform low-level maintenance operations on domains directly in the database (staff-only)',
        'internal' => true,
    ],
    'employee.create' => [
        'description' => 'Create employees',
        'internal' => true,
    ],
    'employee.delete' => [
        'description' => 'Delete employees',
        'internal' => true,
    ],
    'employee.read' => [
        'description' => 'Read employees',
        'internal' => true,
    ],
    'employee.update' => [
        'description' => 'Update employees',
        'internal' => true,
    ],
    'finance.read' => [
        'description' => 'Read finances',
    ],
    'have-goods' => [
        'description' => 'OBSOLETE. To be removed',
    ],
    'hdomain.create' => [
        'description' => 'Create hosting domains',
    ],
    'hdomain.delete' => [
        'description' => 'Delete hosting domains',
    ],
    'hdomain.read' => [
        'description' => 'Read hosting domains',
    ],
    'hdomain.set-dns' => [
        'description' => 'Set DNS for hosting domains',
    ],
    'hdomain.update' => [
        'description' => 'Update hosting domains',
    ],
    'hub.create' => [
        'description' => 'Create switches/hubs',
        'internal' => true,
    ],
    'hub.delete' => [
        'description' => 'Delete switches/hubs',
        'internal' => true,
    ],
    'hub.read' => [
        'description' => 'Read switches/hubs',
    ],
    'hub.sell' => [
        'description' => 'Sell switches/hubs',
        'internal' => true,
    ],
    'hub.update' => [
        'description' => 'Update switches/hubs',
        'internal' => true,
    ],
    'integration.create' => [
        'description' => 'Create integrations',
    ],
    'integration.delete' => [
        'description' => 'Delete integrations',
    ],
    'integration.read' => [
        'description' => 'Read integrations',
    ],
    'integration.update' => [
        'description' => 'Update integrations',
    ],
    'ip.create' => [
        'description' => 'Create IPs',
    ],
    'ip.delete' => [
        'description' => 'Delete IPs',
    ],
    'ip.read' => [
        'description' => 'Read IPs',
    ],
    'ip.update' => [
        'description' => 'Update IPs',
    ],
    'mail.create' => [
        'description' => 'Create mail records',
    ],
    'mail.delete' => [
        'description' => 'Delete mail records',
    ],
    'mail.read' => [
        'description' => 'Read mail records',
    ],
    'mail.update' => [
        'description' => 'Update mail records',
    ],
    'mailing.prepare' => [
        'description' => 'Prepare a client mailing by filtering recipients and exporting or forwarding the target list to the mailing service',
    ],
    'mailing.send' => [
        'description' => 'Trigger sending of a prepared mailing to its recipients via the mailing service',
    ],
    'manage' => [
        'description' => 'OBSOLETE. To be replaced with specific permissions',
    ],
    'model.create' => [
        'description' => 'Create stock models',
        'internal' => true,
    ],
    'model.delete' => [
        'description' => 'Delete stock models',
        'internal' => true,
    ],
    'model.read' => [
        'description' => 'Read stock models',
    ],
    'model.update' => [
        'description' => 'Update stock models',
        'internal' => true,
    ],
    'move.create' => [
        'description' => 'Create stock moves',
        'internal' => true,
    ],
    'move.delete' => [
        'description' => 'Delete stock moves',
        'internal' => true,
    ],
    'move.get-directions' => [
        'description' => 'Get available stock move directions',
        'internal' => true,
    ],
    'move.read' => [
        'description' => 'Read stock moves',
    ],
    'move.read-all' => [
        'description' => 'Read all stock moves',
        'internal' => true,
    ],
    'move.update' => [
        'description' => 'Update stock moves',
        'internal' => true,
    ],
    'nothing' => [
        'description' => 'SYSTEM. Allows nothing',
    ],
    'order.create' => [
        'description' => 'Create stock orders',
        'internal' => true,
    ],
    'order.delete' => [
        'description' => 'Delete stock orders',
        'internal' => true,
    ],
    'order.read' => [
        'description' => 'Read stock orders',
        'internal' => true,
    ],
    'order.read-profits' => [
        'description' => 'Read info about stock order profits',
        'internal' => true,
    ],
    'order.update' => [
        'description' => 'Update stock orders',
        'internal' => true,
    ],
    'own' => [
        'description' => 'OBSOLETE. Replaced with more specific permissions',
    ],
    'part.create' => [
        'description' => 'Create stock parts',
    ],
    'part.delete' => [
        'description' => 'Delete stock parts',
    ],
    'part.erase' => [
        'description' => 'Completely delete the part along with its move history',
    ],
    'part.read' => [
        'description' => 'Read stock parts',
    ],
    'part.sell' => [
        'description' => 'Create a sale for a stock part, assigning it to a buyer client',
        'internal' => true,
    ],
    'part.update' => [
        'description' => 'Update stock parts',
    ],
    'part.read-administrative' => [
        'description' => 'Read administrative part data such as cost, price, and internal fields visible only to staff',
    ],
    'plan.create' => [
        'description' => 'Create tariff plans',
    ],
    'plan.delete' => [
        'description' => 'Delete tariff plans',
    ],
    'plan.force-read' => [
        'description' => 'Read tariff plans additional data',
    ],
    'plan.read' => [
        'description' => 'Read tariff plans',
    ],
    'plan.update' => [
        'description' => 'Update tariff plans',
    ],
    'plan.set-note' => [
        'description' => 'Set tariff plans notes',
    ],
    'price.create' => [
        'description' => 'Create tariff prices',
    ],
    'price.delete' => [
        'description' => 'Delete tariff prices',
    ],
    'price.read' => [
        'description' => 'Read tariff prices',
    ],
    'price.update' => [
        'description' => 'Update tariff prices',
    ],
    'purse.update' => [
        'description' => 'Update purses',
    ],
    'purse.set-credit' => [
        'description' => 'Set purse credit',
    ],
    'ref.view.not-used' => [
        'description' => 'View all reference values including unused/inactive types (e.g. all server types, not just those currently in use)',
        'internal' => true,
    ],
    'request.create' => [
        'description' => 'Create requests',
    ],
    'request.delete' => [
        'description' => 'Delete requests',
    ],
    'request.read' => [
        'description' => 'Read requests',
    ],
    'request.update' => [
        'description' => 'Update requests',
    ],
    'requisites.create' => [
        'description' => 'Create requisites',
    ],
    'requisites.delete' => [
        'description' => 'Delete requisites',
    ],
    'requisites.read' => [
        'description' => 'Read requisites',
    ],
    'requisites.update' => [
        'description' => 'Update requisites',
    ],
    'resell' => [
        'description' => 'OBSOLETE. To be replaced with specific permissions',
    ],
    'restore-password' => [
        'description' => 'Restore password',
    ],
    'sale.delete' => [
        'description' => 'Delete sales',
    ],
    'sale.read' => [
        'description' => 'Read sales',
    ],
    'installment-plan.read' => [
        'description' => 'Read installment plans',
    ],
    'installment-plan.delete' => [
        'description' => 'Delete installment plans',
        'internal' => true,
    ],
    'installment-plan.restore' => [
        'description' => 'Restore installment plans',
        'internal' => true,
    ],
    'installment-plan.update' => [
        'description' => 'Update installment plans',
        'internal' => true,
    ],
    'installment-plan.process' => [
        'description' => 'Manually initiate installment plan processing',
        'internal' => true,
    ],
    'deny:installment-plan.read' => [
        'description' => 'Prohibits reading of the installment plan',
    ],
    'deny:installment-plan.delete' => [
        'description' => 'Prohibits deleting of installment plans',
    ],
    'deny:installment-plan.restore' => [
        'description' => 'Prohibits restoring of installment plans',
    ],
    'deny:installment-plan.update' => [
        'description' => 'Prohibits updating of installment plans',
    ],
    'deny:installment-plan.process' => [
        'description' => 'Prohibits manual initiation of installment plan processing',
    ],
    'see-no-mans' => [
        'description' => 'See unowned (no-mans-land) objects such as servers and parts that do not yet belong to any client',
        'internal' => true,
    ],
    'server.control-power' => [
        'description' => 'Control server power',
    ],
    'server.control-system' => [
        'description' => 'Control server system',
    ],
    'server.create' => [
        'description' => 'Create servers',
        'internal' => true,
    ],
    'server.assign-hub' => [
        'description' => 'Assign switches/hubs to server',
        'internal' => true,
    ],
    'server.delete' => [
        'description' => 'Delete servers',
        'internal' => true,
    ],
    'server.disable-block' => [
        'description' => 'Unblock servers',
    ],
    'server.enable-block' => [
        'description' => 'Block servers',
    ],
    'server.manage-settings' => [
        'description' => 'Manage server settings',
    ],
    'server.pay' => [
        'description' => 'Pay servers',
    ],
    'server.read' => [
        'description' => 'Read servers',
    ],
    'server.read-financial-info' => [
        'description' => 'Read server financial info',
    ],
    'server.read-system-info' => [
        'description' => 'Read server system info',
    ],
    'server.read-wizzard' => [
        'description' => 'Read whether a server is in wizard mode (i.e. has multiple active services associated with it)',
    ],
    'server.read-legend' => [
        'description' => 'View the color-coded legend explaining server state and type indicators in the server grid',
    ],
    'server.read-billing' => [
        'description' => 'Access manager and billing grid views showing tariff plan, monthly fee, client, and consumption data for servers',
    ],
    'server.sell' => [
        'description' => 'Assign a server to a client under a tariff plan (create or update a sale record for the server)',
    ],
    'server.set-label' => [
        'description' => 'Set server label',
    ],
    'server.set-note' => [
        'description' => 'Set server note',
    ],
    'server.update' => [
        'description' => 'Update servers',
        'internal' => true,
    ],
    'server.wizzard' => [
        'description' => 'Disable wizard mode on a server (wizard mode marks a server as having multiple active services; disabling removes this marker)',
    ],
    'server.move-disks' => [
        'description' => 'Exchange/swap disk hardware between servers',
    ],
    'deny:server.move-disks' => [
        'description' => 'Deny move disks between servers',
    ],
    'service.create' => [
        'description' => 'Create services',
    ],
    'service.delete' => [
        'description' => 'Delete services',
    ],
    'service.read' => [
        'description' => 'Read services',
    ],
    'service.update' => [
        'description' => 'Update services',
    ],
    'stock.read' => [
        'description' => 'Read the stock overview dashboard (aggregate stock statistics)',
    ],
    'support' => [
        'description' => 'OBSOLETE. To be replaced with specific permissions',
    ],
    'test.alpha' => [
        'description' => 'Alpha testing',
    ],
    'test.beta' => [
        'description' => 'Beta testing',
    ],
    'ticket.answer' => [
        'description' => 'Answer tickets',
    ],
    'ticket.close' => [
        'description' => 'Close tickets',
    ],
    'ticket.create' => [
        'description' => 'Create tickets',
    ],
    'ticket.delete' => [
        'description' => 'Delete tickets',
    ],
    'ticket.read' => [
        'description' => 'Read tickets',
    ],
    'ticket.update' => [
        'description' => 'Update tickets',
    ],
    'ticket.read-templates' => [
        'description' => 'Read ticket templates',
    ],
    'ticket.read-statistics' => [
        'description' => 'Read ticket statistics',
    ],
    'ticket.set-private' => [
        'description' => 'Make private ticket answers',
    ],
    'ticket.set-recipient' => [
        'description' => 'Set ticket recipient',
    ],
    'ticket.set-time' => [
        'description' => 'Set ticket answer spent time',
    ],
    'vhost.create' => [
        'description' => 'Create virthosts',
    ],
    'vhost.delete' => [
        'description' => 'Delete virthosts',
    ],
    'vhost.read' => [
        'description' => 'Read virthosts',
    ],
    'vhost.update' => [
        'description' => 'Update virthosts',
    ],
    'zone.create' => [
        'description' => 'Create DNS zones',
        'internal' => true,
    ],
    'zone.delete' => [
        'description' => 'Delete DNS zones',
        'internal' => true,
    ],
    'zone.read' => [
        'description' => 'Read DNS zones',
        'internal' => true,
    ],
    'zone.update' => [
        'description' => 'Update DNS zones',
        'internal' => true,
    ],
    'deny:server.see-label' => [
        'description' => 'Prohibits see-label operation on the server',
    ],
    'server.see-label' => [
        'description' => 'Read server label',
    ],
    'client.notify' => [
        'description' => 'Notify clients',
    ],
    'deny:client.notify' => [
        'description' => 'Prohibits notifying of the client',
    ],
    'deny:client.read-ip' => [
        'description' => 'Prohibits viewing client\'s IP',
    ],
    'deny:client.read-financial-info' => [
        'description' => 'Prohibits viewing client\'s financial info',
    ],
    'deny:client.read-requisite' => [
        'description' => 'Prohibits viewing setted requisite to client',
    ],
    'deny:client.read-referral' => [
        'description' => 'Prohibits viewing client\'s referral',
    ],
    'deny:client.read-deleted' => [
        'description' => 'Prohibits viewing deleted clients',
    ],
    'deny:part.read-all-hierarchy' => [
        'description' => 'Prohibits read-all-hierarchy operation on the part',
    ],
    'deny:sale.create' => [
        'description' => 'Prohibits creating of the sale',
    ],
    'deny:sale.update' => [
        'description' => 'Prohibits updating of the sale',
    ],
    'part.read-all-hierarchy' => [
        'description' => 'Read the full part hierarchy including parts not directly owned, enabling complete stock tree navigation',
        'internal' => true,
    ],
    'sale.create' => [
        'description' => 'Create sales',
    ],
    'sale.update' => [
        'description' => 'Update sales',
    ],
    'role:almighty' => [
        'description' => 'Testing-only role that combines all staff-admin, staff-manager, manager, document master, finance master, stock master, config manager, cost price manager, PnL master, and blacklist manager permissions.',
    ],
    'deny:purse.create' => [
        'description' => 'Prohibits creating of the purse',
    ],
    'deny:purse.read' => [
        'description' => 'Prohibits reading of the purse',
    ],
    'purse.create' => [
        'description' => 'Create purses',
    ],
    'purse.read' => [
        'description' => 'Read purses',
    ],
    'owner-staff' => [
        'description' => 'OBSOLETE. To be replaced with specific permissions',
        'internal' => true,
    ],
    'role:consumption.master' => [
        'description' => 'Grants access to read all resource consumption regardless of ownership, plus the ability to update and delete consumption records.',
    ],
    'consumption.read-all' => [
        'description' => 'Read all resource consumptions',
        'internal' => true,
    ],
    'deny:consumption.read-all' => [
        'description' => 'Prohibits read-all operation on the consumption',
    ],
    'deny:owner-staff' => [
        'description' => 'Prohibits owner-staff operation',
    ],
    'role:costprice.user' => [
        'description' => 'Grants read access to cost price data.',
    ],
    'role:costprice.manager' => [
        'description' => 'Grants full CRUD access to cost price data.',
    ],
    'role:stock.admin' => [
        'description' => 'Extends stock.user with move management permissions and read access to administrative part data.',
    ],
    'costprice.create' => [
        'description' => 'Create costprices',
        'internal' => true,
    ],
    'costprice.delete' => [
        'description' => 'Delete costprices',
        'internal' => true,
    ],
    'costprice.read' => [
        'description' => 'Read costprices',
        'internal' => true,
    ],
    'costprice.update' => [
        'description' => 'Update costprices',
        'internal' => true,
    ],
    'deny:costprice.create' => [
        'description' => 'Prohibits creating of the costprice',
    ],
    'deny:costprice.delete' => [
        'description' => 'Prohibits deleting of the costprice',
    ],
    'deny:costprice.read' => [
        'description' => 'Prohibits reading of the costprice',
    ],
    'deny:costprice.update' => [
        'description' => 'Prohibits updating of the costprice',
    ],
    'deny:pay' => [
        'description' => 'Prohibits paying',
    ],
    'pay' => [
        'description' => 'OBSOLETE. Replaced with specific pay permissions like server.pay and domain.pay',
    ],
    'audit.read' => [
        'description' => 'Read changes history of core objects, you have direct access to',
        'internal' => true,
    ],
    'audit.read_everything' => [
        'description' => 'Read changes history of any objects',
        'internal' => true,
    ],
    'deny:audit.read' => [
        'description' => 'Explicitly denies reading the change history of core objects.',
    ],
    'deny:audit.read_everything' => [
        'description' => 'Explicitly denies reading system objects and comprehensive audit data.',
    ],
    'role:bill.staff-manager' => [
        'description' => 'Extends bill.manager with access to detailed charge data and server charge information.',
    ],
    'role:blacklist.manager' => [
        'description' => 'Grants full CRUD access to blacklist entries.',
    ],
    'role:pnl.user' => [
        'description' => 'Grants read access to the profit and loss report.',
    ],
    'role:pnl.master' => [
        'description' => 'Grants the ability to read and update the profit and loss report, including access to expenses data.',
    ],
    'role:target.manager' => [
        'description' => 'Grants full CRUD access to billing targets.',
    ],
    'role:audit.user' => [
        'description' => 'Grants the ability to read the change history of objects the user has direct access to.',
    ],
    'role:audit.master' => [
        'description' => 'Extends audit.user with the ability to read change history for any system object regardless of ownership.',
    ],
    'role:staff-manager' => [
        'description' => 'Extends manager with bill staff-manager permissions (detailed charge access), installment plan management, and visibility of unsold objects.',
    ],
    'blacklist.create' => [
        'description' => 'Create blacklists',
        'internal' => true,
    ],
    'blacklist.delete' => [
        'description' => 'Delete blacklists',
        'internal' => true,
    ],
    'blacklist.read' => [
        'description' => 'Read blacklists',
        'internal' => true,
    ],
    'blacklist.update' => [
        'description' => 'Update blacklists',
        'internal' => true,
    ],
    'deny:blacklist.create' => [
        'description' => 'Prohibits creating of the blacklist',
    ],
    'deny:blacklist.delete' => [
        'description' => 'Prohibits deleting of the blacklist',
    ],
    'deny:blacklist.read' => [
        'description' => 'Prohibits reading of the blacklist',
    ],
    'deny:blacklist.update' => [
        'description' => 'Prohibits updating of the blacklist',
    ],
    'deny:pnl.read' => [
        'description' => 'Prohibits reading of the pnl',
    ],
    'deny:pnl.read-expenses' => [
        'description' => 'Prohibits read-expenses operation on the pnl',
    ],
    'deny:pnl.update' => [
        'description' => 'Prohibits updating of the pnl',
    ],
    'deny:target.create' => [
        'description' => 'Prohibits creating of the target',
    ],
    'deny:target.delete' => [
        'description' => 'Prohibits deleting of the target',
    ],
    'deny:target.read' => [
        'description' => 'Prohibits reading of the target',
    ],
    'deny:target.update' => [
        'description' => 'Prohibits updating of the target',
    ],
    'pnl.read' => [
        'description' => 'Read PNL report',
        'internal' => true,
    ],
    'pnl.read-expenses' => [
        'description' => 'Read expenses data in PNL report',
        'internal' => true,
    ],
    'pnl.update' => [
        'description' => 'Update PNL report',
        'internal' => true,
    ],
    'target.create' => [
        'description' => 'Create billing targets',
    ],
    'target.delete' => [
        'description' => 'Delete billing targets',
    ],
    'target.read' => [
        'description' => 'Read billing targets',
    ],
    'target.update' => [
        'description' => 'Update billing targets',
    ],
    'deny:part.erase' => [
        'description' => 'Prohibits erasing of the part',
    ],
    'deny:role:stock.admin' => [
        'description' => 'Prohibits role:stock-admin operation',
    ],
];
