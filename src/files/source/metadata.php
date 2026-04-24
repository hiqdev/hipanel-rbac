<?php

return [
    'role:nobody' => [
        'description' => 'The role is generally assigned to nobody and used to indicate a user without any permissions.',
    ],
    'role:unauthorized' => [
        'description' => 'The role is generally assigned to guests automatically.',
    ],
    'role:master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on everything',
    ],
    'role:client.support' => [
        'description' => 'The role is generally assigned to staff who are members of the support team',
    ],
    'role:client.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of client management',
    ],
    'role:client.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on clients management',
    ],
    'role:employee.manager' => [
        'description' => 'The role is generally assigned to employees who are responsible for employee management',
    ],
    'role:client.impersonator' => [
        'description' => 'The role is generally assigned to staff who are allowed to wear a client disguise',
    ],
    'role:contact.user' => [
        'description' => 'The role is generally assigned to users who are allowed to use contacts',
    ],
    'role:server.user' => [
        'description' => 'The role is generally assigned to users who are allowed to use servers',
    ],
    'role:server.admin' => [
        'description' => 'The role is generally assigned to reseller clients who are in charge of clients\' server administration',
    ],
    'role:server.staff-admin' => [
        'description' => 'The role is generally assigned to staff who are in charge of client\'s servers administration',
    ],
    'role:server.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of client\'s servers management',
    ],
    'role:server.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on servers management',
    ],
    'role:hub.user' => [
        'description' => 'The role is generally assigned to users who are allowed to rents hubs',
    ],
    'role:hub.admin' => [
        'description' => 'The role is generally assigned to reseller staff who are in charge of clients\' hub administration',
    ],
    'role:hub.staff-admin' => [
        'description' => 'The role is generally assigned to staff who are in charge of client\'s hubs administration',
    ],
    'role:hub.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of client\'s hubs management',
    ],
    'role:hub.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on hubs management',
    ],
    'role:consumption.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see the device resources consumption details',
    ],
    'role:consumption.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of client\'s devices consumption management',
    ],
    'role:config.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of publicly offered servers configuration management',
    ],
    'role:integration.manager' => [
        'description' => 'The role is generally assigned to staff who are allowed to change technical configuration of integrations with 3rd party services',
    ],
    'role:account.user' => [
        'description' => 'The role is generally assigned to users who can use accounts with their hosting services',
    ],
    'role:backup.user' => [
        'description' => 'The role is generally assigned to users who need access to backus of their hosting services',
    ],
    'role:backuping.user' => [
        'description' => 'The role is generally assigned to users who need access to backups configurations of their hosting services',
    ],
    'role:crontab.user' => [
        'description' => 'The role is generally assigned to users who need access to crontab configuration of their hosting services',
    ],
    'role:db.user' => [
        'description' => 'The role is generally assigned to users who need access to DBMS configuration of their hosting services',
    ],
    'role:zone.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of domain zones management',
    ],
    'role:hdomain.user' => [
        'description' => 'The role is generally assigned to users who are allowed to have hosting domains on their services',
    ],
    'role:ip.admin' => [
        'description' => 'The role is generally assigned to staff who manage company IP addresses pool',
    ],
    'role:mail.user' => [
        'description' => 'The role is generally assigned to users who are allowed to use mailboxes on their hosting services',
    ],
    'role:request.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see configuration requests of their hosting services',
    ],
    'role:service.admin' => [
        'description' => 'The role is generally assigned to staff who manage software services of user\'s hosting services',
    ],
    'role:vhost.user' => [
        'description' => 'The role is generally assigned to users who are allowed to have virtual hosts on their hosting services',
    ],
    'role:hosting.reader' => [
        'description' => 'The role is generally assigned to users who have read-only access to hosting services',
    ],
    'role:hosting.user' => [
        'description' => 'The role is generally assigned to users who have default user permissions for hosting services',
    ],
    'role:hosting.admin' => [
        'description' => 'The role is generally assigned to staff who are in charge of the client\'s hosting services administration',
    ],
    'role:bill.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see bills',
    ],
    'role:bill.junior-manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of bills management',
    ],
    'role:bill.manager' => [
        'description' => 'The role is generally assigned to staff who have high permissions on bills management',
    ],
    'role:bill.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on bills management',
    ],
    'role:requisites.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see bank requisites',
    ],
    'role:requisites.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of financial requisites management',
    ],
    'role:plan.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see tariff plans',
    ],
    'role:plan.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of tariff plans management',
    ],
    'role:plan.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the tariff plans management',
    ],
    'role:document.user' => [
        'description' => 'The role is generally assigned to users who are allowed to work with documents',
    ],
    'role:document.employee' => [
        'description' => 'The role is generally assigned to staff who are in charge of employees\' and other contractors\' documents management',
    ],
    'role:document.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of customer\'s documents management',
    ],
    'role:document.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the documents management',
    ],
    'role:sale.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see own sales',
    ],
    'role:sale.manager' => [
        'description' => 'The role is generally assigned to staff who are allowed to sell objects to clients',
    ],
    'role:sale.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for sales management',
    ],
    'role:finance.reader' => [
        'description' => 'The role is generally assigned to users who have read-only access to financial information',
    ],
    'role:finance.user' => [
        'description' => 'The role is generally assigned to users who have limited write permissions on the financial information',
    ],
    'role:finance.employee' => [
        'description' => 'The role is generally assigned to employees and staff who have access to payments information',
    ],
    'role:finance.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of finances management',
    ],
    'role:finance.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for finances management',
    ],
    'role:stock.user' => [
        'description' => 'The role is generally assigned to users who have limited stock reading access',
    ],
    'role:stock.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of stock management',
    ],
    'role:stock.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the stock management',
    ],
    'role:order.user' => [
        'description' => 'The role is generally assigned to users who have access to orders information',
    ],
    'role:order.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of orders management',
    ],
    'role:order.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the orders management',
    ],
    'role:part.user' => [
        'description' => 'The role is generally assigned to users who have access to part information',
    ],
    'role:part.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of parts management',
    ],
    'role:part.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the parts management',
    ],
    'role:installment-plan.user' => [
        'description' => 'The role is generally assigned to users who have access to installment plan information',
    ],
    'role:installment-plan.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of installment plan management',
        'internal' => true,
    ],
    'role:model.user' => [
        'description' => 'The role is generally assigned to users who have access to models information',
    ],
    'role:model.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of models management',
    ],
    'role:model.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the models management',
    ],
    'role:move.user' => [
        'description' => 'The role is generally assigned to users who have access to moves information',
    ],
    'role:move.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of moves management',
    ],
    'role:move.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for the moves management',
    ],
    'role:project.user' => [
        'description' => 'The role is generally assigned to staff who manage internal company sub-projects',
    ],
    'role:client' => [
        'description' => 'The role is generally assigned to users who are clients',
    ],
    'role:support' => [
        'description' => 'The role is generally assigned to staff who are in charge of customer support',
    ],
    'role:admin' => [
        'description' => 'The role is generally assigned to reseller\'s clients who are in charge of the technical management of the resources',
    ],
    'role:staff-admin' => [
        'description' => 'The role is generally assigned to staff who are in charge for the technical management of the resources',
    ],
    'role:accounter' => [
        'description' => 'The role is generally assigned to staff who are in charge of accounting',
    ],
    'role:manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of services and clients management',
    ],
    'role:reseller' => [
        'description' => 'The role is generally assigned to staff who resell services',
    ],
    'role:owner' => [
        'description' => 'The role is generally assigned to a root user and is not used by any other customers',
    ],
    'role:superpowers' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions',
    ],
    'role:employee' => [
        'description' => 'The role is generally assigned to employees',
    ],
    'role:junior-manager' => [
        'description' => 'The role is generally assigned to staff who are managers with reduced permissions',
    ],
    'role:partner' => [
        'description' => 'The role is generally assigned to partners',
    ],
    'role:domain.user' => [
        'description' => 'The role is generally assigned to users who have access to domain name registration services',
    ],
    'role:domain.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of domain name registration services',
    ],
    'role:domain.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions on domain name registration services',
    ],
    'role:dns.user' => [
        'description' => 'The role is generally assigned to users who have access to DNS management',
    ],
    'role:dns.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of DNS services management',
    ],
    'role:certificate.user' => [
        'description' => 'The role is generally assigned to users who have access to SSL certificates services',
    ],
    'role:certificate.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of SSL certificates management',
    ],
    'role:ticket.user' => [
        'description' => 'The role is generally assigned to users who have access to the ticket system',
    ],
    'role:ticket.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of tickets management',
    ],
    'role:beta-tester' => [
        'description' => 'The role is generally assigned to users who participate in beta testing program',
    ],
    'role:alpha-tester' => [
        'description' => 'The role is generally assigned to users who participate in early access testing program',
    ],
    'role:owner-staff' => [
        'description' => 'The role is generally assigned to staff who represents owners of the company resources',
    ],
    'role:purse.user' => [
        'description' => 'The role is generally assigned to users who have access to the purses',
    ],
    'role:purse.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of purses',
    ],
    'role:purse.master' => [
        'description' => 'The role is generally assigned to staff who are in charge of purses',
    ],
    'access-reseller' => [
        'description' => 'Allows access-reseller operation',
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
        'description' => 'Import bills',
    ],
    'bill.create-exchange' => [
        'description' => 'Exchange currencies',
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
        'description' => 'Impersonate',
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
    ],
    'client.set-tmp-pwd' => [
        'description' => 'Set temporary password to client',
    ],
    'client.set-roles' => [
        'description' => 'Set roles to clients',
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
        'description' => 'Create configs',
    ],
    'config.delete' => [
        'description' => 'Delete configs',
    ],
    'config.read' => [
        'description' => 'Read configs',
    ],
    'config.update' => [
        'description' => 'Update configs',
    ],
    'consumption.update' => [
        'description' => 'Update consumptions',
        'internal' => true,
    ],
    'consumption.delete' => [
        'description' => 'Delete consumptions',
        'internal' => true,
    ],
    'consumption.read' => [
        'description' => 'Read consumptions',
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
        'description' => 'Prohibits access-reseller operation',
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
        'description' => 'Prohibits import bills',
    ],
    'deny:bill.create-exchange' => [
        'description' => 'Prohibits exchange currencies',
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
        'description' => 'Prohibits impersonating of the client',
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
        'description' => 'Prohibits set-others-allowed-ips operation on the client',
    ],
    'deny:client.set-tmp-pwd' => [
        'description' => 'Prohibits set-tmp-pwd operation on the client',
    ],
    'deny:client.set-roles' => [
        'description' => 'Prohibits set-roles operation on the client',
    ],
    'deny:client.unblock' => [
        'description' => 'Prohibits unblocking of the client',
    ],
    'deny:client.update' => [
        'description' => 'Prohibits updating of the client',
    ],
    'deny:config.create' => [
        'description' => 'Prohibits creating of the config',
    ],
    'deny:config.delete' => [
        'description' => 'Prohibits deleting of the config',
    ],
    'deny:config.read' => [
        'description' => 'Prohibits reading of the config',
    ],
    'deny:config.update' => [
        'description' => 'Prohibits updating of the config',
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
        'description' => 'Prohibits generate-all operation on the document',
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
        'description' => 'Prohibits approve-trasfer-out operation on the domain',
    ],
    'deny:domain.delete' => [
        'description' => 'Prohibits deleting of the domain',
    ],
    'deny:domain.delete-agp' => [
        'description' => 'Prohibits delete-agp operation on the domain',
    ],
    'deny:domain.force-push' => [
        'description' => 'Prohibits force-push operation on the domain',
    ],
    'deny:domain.force-send-foa' => [
        'description' => 'Prohibits force-send-foa operation on the domain',
    ],
    'deny:domain.freeze' => [
        'description' => 'Prohibits freezing of the domain',
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
    ],
    'deny:domain.unfreeze' => [
        'description' => 'Prohibits unfreezing of the domain',
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
        'description' => 'Prohibits operation with domain in DB',
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
    ],
    'deny:model.delete' => [
        'description' => 'Prohibits deleting of the model',
    ],
    'deny:model.read' => [
        'description' => 'Prohibits reading of the model',
    ],
    'deny:model.update' => [
        'description' => 'Prohibits updating of the model',
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
        'description' => 'Prohibits reading of the info about wizzarding of server',
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
        'description' => 'Prohibits wizzarding of the server',
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
        'description' => 'Generate all documents',
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
        'description' => 'Approve domain trasfer out',
    ],
    'domain.delete' => [
        'description' => 'Delete domains',
    ],
    'domain.delete-agp' => [
        'description' => 'Delete AGP domains',
    ],
    'domain.force-push' => [
        'description' => 'Force push domains',
    ],
    'domain.force-send-foa' => [
        'description' => 'Force send FOA for domains',
    ],
    'domain.freeze' => [
        'description' => 'Freeze domains',
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
    ],
    'domain.unfreeze' => [
        'description' => 'Unfreeze domains',
    ],
    'domain.update' => [
        'description' => 'Update domains',
    ],
    'domain.maintain' => [
        'description' => 'Modify domains in DB',
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
        'description' => 'Mailing preparation',
    ],
    'mailing.send' => [
        'description' => 'Send mailings',
    ],
    'manage' => [
        'description' => 'OBSOLETE. To be replaced with specific permissions',
    ],
    'model.create' => [
        'description' => 'Create stock models',
    ],
    'model.delete' => [
        'description' => 'Delete stock models',
    ],
    'model.read' => [
        'description' => 'Read stock models',
    ],
    'model.update' => [
        'description' => 'Update stock models',
    ],
    'move.create' => [
        'description' => 'Create stock moves',
        'internal' => true,
    ],
    'move.delete' => [
        'description' => 'Delete stock moves',
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
        'description' => 'Sell stock parts',
    ],
    'part.update' => [
        'description' => 'Update stock parts',
    ],
    'part.read-administrative' => [
        'description' => 'Reading parts administrative data',
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
        'description' => 'Read not used refs',
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
        'description' => 'Maually initiate installment plan processing',
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
        'description' => 'Prohibits maual initiation of installment plan processing',
    ],
    'see-no-mans' => [
        'description' => 'See unsold objects',
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
        'description' => 'Read server wizzarding info',
    ],
    'server.read-legend' => [
        'description' => 'Read servers legend',
    ],
    'server.read-billing' => [
        'description' => 'Read server billing information',
    ],
    'server.sell' => [
        'description' => 'Sell servers',
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
        'description' => 'Wizards servers',
    ],
    'server.move-disks' => [
        'description' => 'Move disks in servers',
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
        'description' => 'Read stock',
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
        'description' => 'Read all parts',
        'internal' => true,
    ],
    'sale.create' => [
        'description' => 'Create sales',
    ],
    'sale.update' => [
        'description' => 'Update sales',
    ],
    'role:almighty' => [
        'description' => 'The role is for testing only',
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
        'description' => 'The role is generally assigned to ____',
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
        'description' => 'The role is generally assigned to staff who can see cost prices',
    ],
    'role:costprice.manager' => [
        'description' => 'The role is generally assigned to staff who can manage cost prices',
    ],
    'role:stock.admin' => [
        'description' => 'The role is generally assigned to staff who can manage stock',
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
        'description' => 'The role is generally assigned to staff who are responsible for supervising billing operations.',
    ],
    'role:blacklist.manager' => [
        'description' => 'The role is generally assigned to staff who are in charge of blacklist management.',
    ],
    'role:pnl.user' => [
        'description' => 'The role is generally assigned to users who are allowed to view profit and loss information.',
    ],
    'role:pnl.master' => [
        'description' => 'The role is generally assigned to staff who have exceptionally high permissions for profit and loss management.',
    ],
    'role:target.manager' => [
        'description' => 'The role is generally assigned to users who can manage target details.',
    ],
    'role:audit.user' => [
        'description' => 'The role is generally assigned to users who are allowed to read audit logs for objects they have access to.',
    ],
    'role:audit.master' => [
        'description' => 'The role is generally assigned to staff who have full audit permissions across all system objects.',
    ],
    'role:staff-manager' => [
        'description' => 'The role is generally assigned to staff who are responsible for managing company resources.',
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
        'description' => 'Prohibits eraseing of the part',
    ],
    'deny:role:stock.admin' => [
        'description' => 'Prohibits role:stock-admin operation',
    ],
];
