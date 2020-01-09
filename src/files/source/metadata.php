<?php

return [
    'role:nobody' => [
        'description' => 'The role is generally assigned to nobody and used to indicate a user without any permissions.',
    ],
    'role:unauthorized' => [
        'description' => 'The role is generally assigned to guests automatically.',
    ],
    'role:client.support' => [
        'description' => 'The role is generally assigned to contractors who are members of the support team',
    ],
    'role:client.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of client management',
    ],
    'role:employee.manager' => [
        'description' => 'The role is generally assigned to employees who are responsible for employee management',
    ],
    'role:client.impersonator' => [
        'description' => 'The role is generally assigned to contractors who are allowed to wear a client disguise',
    ],
    'role:contact.user' => [
        'description' => 'The role is generally assigned to users who are allowed to use contacts',
    ],
    'role:server.user' => [
        'description' => 'The role is generally assigned to users who are allowed to use servers',
    ],
    'role:server.admin' => [
        'description' => 'The role is generally assigned to contractors who are in charge of client\'s servers administration',
    ],
    'role:server.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of client\'s servers management',
    ],
    'role:hub.user' => [
        'description' => 'The role is generally assigned to users who are allowed to rents hubs',
    ],
    'role:hub.admin' => [
        'description' => 'The role is generally assigned to contractors who are in charge of client\'s hubs administration',
    ],
    'role:hub.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of client\'s hubs management',
    ],
    'role:consumption.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see the device resources consumption details',
    ],
    'role:consumption.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of client\'s devices consumption management',
    ],
    'role:config.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of publicly offered servers configuration management',
    ],
    'role:integration.manager' => [
        'description' => 'The role is generally assigned to contractors who are allowed to change technical configuration of integrations with 3rd party services',
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
        'description' => 'The role is generally assigned to contractors who are in charge of domain zones management',
    ],
    'role:hdomain.user' => [
        'description' => 'The role is generally assigned to users who are allowed to have hosting domains on their services',
    ],
    'role:ip.admin' => [
        'description' => 'The role is generally assigned to contractors who manage company IP addresses pool',
    ],
    'role:mail.user' => [
        'description' => 'The role is generally assigned to users who are allowed to use mailboxes on their hosting services',
    ],
    'role:request.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see configuration requests of their hosting services',
    ],
    'role:service.admin' => [
        'description' => 'The role is generally assigned to contractors who manage software services of user\'s hosting services',
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
        'description' => 'The role is generally assigned to contractors who are in charge of the client\'s hosting services administration',
    ],
    'role:bill.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see bills',
    ],
    'role:bill.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of bills management',
    ],
    'role:bill.master' => [
        'description' => 'The role is generally assigned to contractors who have exceptionally high permissions on bills management',
    ],
    'role:requisites.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see bank requisites',
    ],
    'role:requisites.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of financial requisites management',
    ],
    'role:plan.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see tariff plans',
    ],
    'role:plan.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of tariff plans management',
    ],
    'role:plan.master' => [
        'description' => 'The role is generally assigned to contractors who have exceptionally high permissions for the tariff plans management',
    ],
    'role:document.user' => [
        'description' => 'The role is generally assigned to users who are allowed to work with documents',
    ],
    'role:document.employee' => [
        'description' => 'The role is generally assigned to contractors who are in charge of employees\' and other contractors\' documents management',
    ],
    'role:document.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of customer\'s documents management',
    ],
    'role:document.master' => [
        'description' => 'The role is generally assigned to contractors who have exceptionally high permissions for the documents management',
    ],
    'role:sale.user' => [
        'description' => 'The role is generally assigned to users who are allowed to see own sales',
    ],
    'role:sale.manager' => [
        'description' => 'The role is generally assigned to contractors who are allowed to sell objects to clients',
    ],
    'role:sale.master' => [
        'description' => 'The role is generally assigned to contractors who have exceptionally high permissions for sales management',
    ],
    'role:finance.reader' => [
        'description' => 'The role is generally assigned to users who have read-only access to financial information',
    ],
    'role:finance.user' => [
        'description' => 'The role is generally assigned to users who have limited write permissions on the financial information',
    ],
    'role:finance.employee' => [
        'description' => 'The role is generally assigned to employees and contractors who have access to payments information',
    ],
    'role:finance.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of finances management',
    ],
    'role:finance.master' => [
        'description' => 'The role is generally assigned to contractors who have exceptionally high permissions for finances management',
    ],
    'role:stock.user' => [
        'description' => 'The role is generally assigned to users who have limited stock reading access',
    ],
    'role:stock.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of stock management',
    ],
    'role:stock.master' => [
        'description' => 'The role is generally assigned to contractors who have exceptionally high permissions for the stock management',
    ],
    'role:order.user' => [
        'description' => 'The role is generally assigned to users who have access to orders information',
    ],
    'role:order.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of orders management',
    ],
    'role:order.master' => [
        'description' => 'The role is generally assigned to contractors who have exceptionally high permissions for the orders management',
    ],
    'role:project.user' => [
        'description' => 'The role is generally assigned to contractors who manage internal company sub-projects',
    ],
    'role:client' => [
        'description' => 'The role is generally assigned to users who are clients',
    ],
    'role:support' => [
        'description' => 'The role is generally assigned to contractors who are in charge of customer support',
    ],
    'role:admin' => [
        'description' => 'The role is generally assigned to contractors who are in charge for the technical management of the resources',
    ],
    'role:accounter' => [
        'description' => 'The role is generally assigned to contractors who are in charge of accounting',
    ],
    'role:manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of services and clients management',
    ],
    'role:reseller' => [
        'description' => 'The role is generally assigned to contractors who resell services',
    ],
    'role:owner' => [
        'description' => 'The role is generally assigned to a root user and is not used by any other customers',
    ],
    'role:superpowers' => [
        'description' => 'The role is generally assigned to contractors who have exceptionally high permissions',
    ],
    'role:employee' => [
        'description' => 'The role is generally assigned to employees',
    ],
    'role:junior-manager' => [
        'description' => 'The role is generally assigned to contractors who are managers with reduced permissions',
    ],
    'role:domain.user' => [
        'description' => 'The role is generally assigned to users who have access to domain name registration services',
    ],
    'role:domain.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of domain name registration services',
    ],
    'role:domain.master' => [
        'description' => 'The role is generally assigned to contractors who have exceptionally high permissions on domain name registration services',
    ],
    'role:dns.user' => [
        'description' => 'The role is generally assigned to users who have access to DNS management',
    ],
    'role:dns.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of DNS services management',
    ],
    'role:certificate.user' => [
        'description' => 'The role is generally assigned to users who have access to SSL certificates services',
    ],
    'role:certificate.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of SSL certificates management',
    ],
    'role:ticket.user' => [
        'description' => 'The role is generally assigned to users who have access to the ticket system',
    ],
    'role:ticket.manager' => [
        'description' => 'The role is generally assigned to contractors who are in charge of tickets management',
    ],
    'role:beta-tester' => [
        'description' => 'The role is generally assigned to users who participate in beta testing program',
    ],
    'role:alpha-tester' => [
        'description' => 'The role is generally assigned to users who participate in early access testing program',
    ],
    'role:owner-staff' => [
        'description' => 'The role is generally assigned to contractors who represents owners of the company resources',
    ],
    'access-reseller' => [
        'description' => 'Allows access-reseller operation',
    ],
    'access-subclients' => [
        'description' => 'Allows access-subclients operation',
    ],
    'account.create' => [
        'description' => 'Allows creating of the account',
    ],
    'account.delete' => [
        'description' => 'Allows deleting of the account',
    ],
    'account.read' => [
        'description' => 'Allows reading of the account',
    ],
    'account.update' => [
        'description' => 'Allows updating of the account',
    ],
    'admin' => [
        'description' => 'Allows admining',
    ],
    'backup.delete' => [
        'description' => 'Allows deleting of the backup',
    ],
    'backup.read' => [
        'description' => 'Allows reading of the backup',
    ],
    'backuping.create' => [
        'description' => 'Allows creating of the backuping',
    ],
    'backuping.delete' => [
        'description' => 'Allows deleting of the backuping',
    ],
    'backuping.read' => [
        'description' => 'Allows reading of the backuping',
    ],
    'backuping.update' => [
        'description' => 'Allows updating of the backuping',
    ],
    'bill.charges.read' => [
        'description' => 'Allows charges.read operation on the bill',
    ],
    'bill.create' => [
        'description' => 'Allows creating of the bill',
    ],
    'bill.delete' => [
        'description' => 'Allows deleting of the bill',
    ],
    'bill.read' => [
        'description' => 'Allows reading of the bill',
    ],
    'bill.update' => [
        'description' => 'Allows updating of the bill',
    ],
    'certificate.create' => [
        'description' => 'Allows creating of the certificate',
    ],
    'certificate.delete' => [
        'description' => 'Allows deleting of the certificate',
    ],
    'certificate.pay' => [
        'description' => 'Allows paying of the certificate',
    ],
    'certificate.push' => [
        'description' => 'Allows pushing of the certificate',
    ],
    'certificate.read' => [
        'description' => 'Allows reading of the certificate',
    ],
    'certificate.update' => [
        'description' => 'Allows updating of the certificate',
    ],
    'client.block' => [
        'description' => 'Allows blocking of the client',
    ],
    'client.create' => [
        'description' => 'Allows creating of the client',
    ],
    'client.delete' => [
        'description' => 'Allows deleting of the client',
    ],
    'client.get-note' => [
        'description' => 'Allows get-note operation on the client',
    ],
    'client.impersonate' => [
        'description' => 'Allows impersonateing of the client',
    ],
    'client.list' => [
        'description' => 'Allows listing of the client',
    ],
    'client.read' => [
        'description' => 'Allows reading of the client',
    ],
    'client.set-description' => [
        'description' => 'Allows set-description operation on the client',
    ],
    'client.set-note' => [
        'description' => 'Allows set-note operation on the client',
    ],
    'client.set-others-allowed-ips' => [
        'description' => 'Allows set-others-allowed-ips operation on the client',
    ],
    'client.set-tmp-pwd' => [
        'description' => 'Allows set-tmp-pwd operation on the client',
    ],
    'client.unblock' => [
        'description' => 'Allows unblocking of the client',
    ],
    'client.update' => [
        'description' => 'Allows updating of the client',
    ],
    'config.create' => [
        'description' => 'Allows creating of the config',
    ],
    'config.delete' => [
        'description' => 'Allows deleting of the config',
    ],
    'config.read' => [
        'description' => 'Allows reading of the config',
    ],
    'config.update' => [
        'description' => 'Allows updating of the config',
    ],
    'consumption.delete' => [
        'description' => 'Allows deleting of the consumption',
    ],
    'consumption.read' => [
        'description' => 'Allows reading of the consumption',
    ],
    'contact.create' => [
        'description' => 'Allows creating of the contact',
    ],
    'contact.delete' => [
        'description' => 'Allows deleting of the contact',
    ],
    'contact.force-verify' => [
        'description' => 'Allows force-verify operation on the contact',
    ],
    'contact.read' => [
        'description' => 'Allows reading of the contact',
    ],
    'contact.set-verified' => [
        'description' => 'Allows set-verified operation on the contact',
    ],
    'contact.update' => [
        'description' => 'Allows updating of the contact',
    ],
    'crontab.create' => [
        'description' => 'Allows creating of the crontab',
    ],
    'crontab.delete' => [
        'description' => 'Allows deleting of the crontab',
    ],
    'crontab.read' => [
        'description' => 'Allows reading of the crontab',
    ],
    'crontab.update' => [
        'description' => 'Allows updating of the crontab',
    ],
    'db.create' => [
        'description' => 'Allows creating of the db',
    ],
    'db.delete' => [
        'description' => 'Allows deleting of the db',
    ],
    'db.read' => [
        'description' => 'Allows reading of the db',
    ],
    'db.update' => [
        'description' => 'Allows updating of the db',
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
        'description' => 'Prohibits impersonateing of the client',
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
        'description' => 'Prohibits acceptanceing of the document',
    ],
    'deny:document.create' => [
        'description' => 'Prohibits creating of the document',
    ],
    'deny:document.delete' => [
        'description' => 'Prohibits deleting of the document',
    ],
    'deny:document.generate' => [
        'description' => 'Prohibits generateing of the document',
    ],
    'deny:document.generate-all' => [
        'description' => 'Prohibits generate-all operation on the document',
    ],
    'deny:document.invoice' => [
        'description' => 'Prohibits invoiceing of the document',
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
        'description' => 'Prohibits freezeing of the domain',
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
    'deny:domain.unfreeze' => [
        'description' => 'Prohibits unfreezeing of the domain',
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
        'description' => 'Prohibits prepareing of the mailing',
    ],
    'deny:mailing.send' => [
        'description' => 'Prohibits sending of the mailing',
    ],
    'deny:manage' => [
        'description' => 'Prohibits manageing',
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
        'description' => 'Prohibits alphaing of the test',
    ],
    'deny:test.beta' => [
        'description' => 'Prohibits betaing of the test',
    ],
    'deny:ticket.answer' => [
        'description' => 'Prohibits answering of the ticket',
    ],
    'deny:ticket.close' => [
        'description' => 'Prohibits closeing of the ticket',
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
        'description' => 'Allows depositing',
    ],
    'dns.create' => [
        'description' => 'Allows creating of the dns',
    ],
    'dns.delete' => [
        'description' => 'Allows deleting of the dns',
    ],
    'dns.read' => [
        'description' => 'Allows reading of the dns',
    ],
    'dns.update' => [
        'description' => 'Allows updating of the dns',
    ],
    'document.acceptance' => [
        'description' => 'Allows acceptanceing of the document',
    ],
    'document.create' => [
        'description' => 'Allows creating of the document',
    ],
    'document.delete' => [
        'description' => 'Allows deleting of the document',
    ],
    'document.generate' => [
        'description' => 'Allows generateing of the document',
    ],
    'document.generate-all' => [
        'description' => 'Allows generate-all operation on the document',
    ],
    'document.invoice' => [
        'description' => 'Allows invoiceing of the document',
    ],
    'document.read' => [
        'description' => 'Allows reading of the document',
    ],
    'document.update' => [
        'description' => 'Allows updating of the document',
    ],
    'domain.approve-trasfer-out' => [
        'description' => 'Allows approve-trasfer-out operation on the domain',
    ],
    'domain.delete' => [
        'description' => 'Allows deleting of the domain',
    ],
    'domain.delete-agp' => [
        'description' => 'Allows delete-agp operation on the domain',
    ],
    'domain.force-push' => [
        'description' => 'Allows force-push operation on the domain',
    ],
    'domain.force-send-foa' => [
        'description' => 'Allows force-send-foa operation on the domain',
    ],
    'domain.freeze' => [
        'description' => 'Allows freezeing of the domain',
    ],
    'domain.pay' => [
        'description' => 'Allows paying of the domain',
    ],
    'domain.push' => [
        'description' => 'Allows pushing of the domain',
    ],
    'domain.read' => [
        'description' => 'Allows reading of the domain',
    ],
    'domain.set-nss' => [
        'description' => 'Allows set-nss operation on the domain',
    ],
    'domain.unfreeze' => [
        'description' => 'Allows unfreezeing of the domain',
    ],
    'domain.update' => [
        'description' => 'Allows updating of the domain',
    ],
    'employee.create' => [
        'description' => 'Allows creating of the employee',
    ],
    'employee.delete' => [
        'description' => 'Allows deleting of the employee',
    ],
    'employee.read' => [
        'description' => 'Allows reading of the employee',
    ],
    'employee.update' => [
        'description' => 'Allows updating of the employee',
    ],
    'finance.read' => [
        'description' => 'Allows reading of the finance',
    ],
    'have-goods' => [
        'description' => 'Allows have-goods operation',
    ],
    'hdomain.create' => [
        'description' => 'Allows creating of the hdomain',
    ],
    'hdomain.delete' => [
        'description' => 'Allows deleting of the hdomain',
    ],
    'hdomain.read' => [
        'description' => 'Allows reading of the hdomain',
    ],
    'hdomain.set-dns' => [
        'description' => 'Allows set-dns operation on the hdomain',
    ],
    'hdomain.update' => [
        'description' => 'Allows updating of the hdomain',
    ],
    'hub.create' => [
        'description' => 'Allows creating of the hub',
    ],
    'hub.delete' => [
        'description' => 'Allows deleting of the hub',
    ],
    'hub.read' => [
        'description' => 'Allows reading of the hub',
    ],
    'hub.sell' => [
        'description' => 'Allows selling of the hub',
    ],
    'hub.update' => [
        'description' => 'Allows updating of the hub',
    ],
    'integration.create' => [
        'description' => 'Allows creating of the integration',
    ],
    'integration.delete' => [
        'description' => 'Allows deleting of the integration',
    ],
    'integration.read' => [
        'description' => 'Allows reading of the integration',
    ],
    'integration.update' => [
        'description' => 'Allows updating of the integration',
    ],
    'ip.create' => [
        'description' => 'Allows creating of the ip',
    ],
    'ip.delete' => [
        'description' => 'Allows deleting of the ip',
    ],
    'ip.read' => [
        'description' => 'Allows reading of the ip',
    ],
    'ip.update' => [
        'description' => 'Allows updating of the ip',
    ],
    'mail.create' => [
        'description' => 'Allows creating of the mail',
    ],
    'mail.delete' => [
        'description' => 'Allows deleting of the mail',
    ],
    'mail.read' => [
        'description' => 'Allows reading of the mail',
    ],
    'mail.update' => [
        'description' => 'Allows updating of the mail',
    ],
    'mailing.prepare' => [
        'description' => 'Allows prepareing of the mailing',
    ],
    'mailing.send' => [
        'description' => 'Allows sending of the mailing',
    ],
    'manage' => [
        'description' => 'Allows manageing',
    ],
    'model.create' => [
        'description' => 'Allows creating of the model',
    ],
    'model.delete' => [
        'description' => 'Allows deleting of the model',
    ],
    'model.read' => [
        'description' => 'Allows reading of the model',
    ],
    'model.update' => [
        'description' => 'Allows updating of the model',
    ],
    'move.create' => [
        'description' => 'Allows creating of the move',
    ],
    'move.delete' => [
        'description' => 'Allows deleting of the move',
    ],
    'move.get-directions' => [
        'description' => 'Allows get-directions operation on the move',
    ],
    'move.read' => [
        'description' => 'Allows reading of the move',
    ],
    'move.read-all' => [
        'description' => 'Allows read-all operation on the move',
    ],
    'move.update' => [
        'description' => 'Allows updating of the move',
    ],
    'nothing' => [
        'description' => 'Allows nothinging',
    ],
    'order.create' => [
        'description' => 'Allows creating of the order',
    ],
    'order.delete' => [
        'description' => 'Allows deleting of the order',
    ],
    'order.read' => [
        'description' => 'Allows reading of the order',
    ],
    'order.read-profits' => [
        'description' => 'Allows read-profits operation on the order',
    ],
    'order.update' => [
        'description' => 'Allows updating of the order',
    ],
    'own' => [
        'description' => 'Allows owning',
    ],
    'part.create' => [
        'description' => 'Allows creating of the part',
    ],
    'part.delete' => [
        'description' => 'Allows deleting of the part',
    ],
    'part.read' => [
        'description' => 'Allows reading of the part',
    ],
    'part.sell' => [
        'description' => 'Allows selling of the part',
    ],
    'part.update' => [
        'description' => 'Allows updating of the part',
    ],
    'plan.create' => [
        'description' => 'Allows creating of the plan',
    ],
    'plan.delete' => [
        'description' => 'Allows deleting of the plan',
    ],
    'plan.force-read' => [
        'description' => 'Allows force-read operation on the plan',
    ],
    'plan.read' => [
        'description' => 'Allows reading of the plan',
    ],
    'plan.update' => [
        'description' => 'Allows updating of the plan',
    ],
    'price.create' => [
        'description' => 'Allows creating of the price',
    ],
    'price.delete' => [
        'description' => 'Allows deleting of the price',
    ],
    'price.read' => [
        'description' => 'Allows reading of the price',
    ],
    'price.update' => [
        'description' => 'Allows updating of the price',
    ],
    'ref.view.not-used' => [
        'description' => 'Allows view.not-used operation on the ref',
    ],
    'request.create' => [
        'description' => 'Allows creating of the request',
    ],
    'request.delete' => [
        'description' => 'Allows deleting of the request',
    ],
    'request.read' => [
        'description' => 'Allows reading of the request',
    ],
    'request.update' => [
        'description' => 'Allows updating of the request',
    ],
    'requisites.create' => [
        'description' => 'Allows creating of the requisites',
    ],
    'requisites.delete' => [
        'description' => 'Allows deleting of the requisites',
    ],
    'requisites.read' => [
        'description' => 'Allows reading of the requisites',
    ],
    'requisites.update' => [
        'description' => 'Allows updating of the requisites',
    ],
    'resell' => [
        'description' => 'Allows reselling',
    ],
    'restore-password' => [
        'description' => 'Allows restore-password operation',
    ],
    'sale.delete' => [
        'description' => 'Allows deleting of the sale',
    ],
    'sale.read' => [
        'description' => 'Allows reading of the sale',
    ],
    'see-no-mans' => [
        'description' => 'Allows see-no-mans operation',
    ],
    'server.control-power' => [
        'description' => 'Allows control-power operation on the server',
    ],
    'server.control-system' => [
        'description' => 'Allows control-system operation on the server',
    ],
    'server.create' => [
        'description' => 'Allows creating of the server',
    ],
    'server.delete' => [
        'description' => 'Allows deleting of the server',
    ],
    'server.disable-block' => [
        'description' => 'Allows disable-block operation on the server',
    ],
    'server.enable-block' => [
        'description' => 'Allows enable-block operation on the server',
    ],
    'server.manage-settings' => [
        'description' => 'Allows manage-settings operation on the server',
    ],
    'server.pay' => [
        'description' => 'Allows paying of the server',
    ],
    'server.read' => [
        'description' => 'Allows reading of the server',
    ],
    'server.sell' => [
        'description' => 'Allows selling of the server',
    ],
    'server.set-label' => [
        'description' => 'Allows set-label operation on the server',
    ],
    'server.set-note' => [
        'description' => 'Allows set-note operation on the server',
    ],
    'server.update' => [
        'description' => 'Allows updating of the server',
    ],
    'server.wizzard' => [
        'description' => 'Allows wizzarding of the server',
    ],
    'service.create' => [
        'description' => 'Allows creating of the service',
    ],
    'service.delete' => [
        'description' => 'Allows deleting of the service',
    ],
    'service.read' => [
        'description' => 'Allows reading of the service',
    ],
    'service.update' => [
        'description' => 'Allows updating of the service',
    ],
    'stock.read' => [
        'description' => 'Allows reading of the stock',
    ],
    'support' => [
        'description' => 'Allows supporting',
    ],
    'test.alpha' => [
        'description' => 'Allows alphaing of the test',
    ],
    'test.beta' => [
        'description' => 'Allows betaing of the test',
    ],
    'ticket.answer' => [
        'description' => 'Allows answering of the ticket',
    ],
    'ticket.close' => [
        'description' => 'Allows closeing of the ticket',
    ],
    'ticket.create' => [
        'description' => 'Allows creating of the ticket',
    ],
    'ticket.delete' => [
        'description' => 'Allows deleting of the ticket',
    ],
    'ticket.read' => [
        'description' => 'Allows reading of the ticket',
    ],
    'ticket.update' => [
        'description' => 'Allows updating of the ticket',
    ],
    'vhost.create' => [
        'description' => 'Allows creating of the vhost',
    ],
    'vhost.delete' => [
        'description' => 'Allows deleting of the vhost',
    ],
    'vhost.read' => [
        'description' => 'Allows reading of the vhost',
    ],
    'vhost.update' => [
        'description' => 'Allows updating of the vhost',
    ],
    'zone.create' => [
        'description' => 'Allows creating of the zone',
    ],
    'zone.delete' => [
        'description' => 'Allows deleting of the zone',
    ],
    'zone.read' => [
        'description' => 'Allows reading of the zone',
    ],
    'zone.update' => [
        'description' => 'Allows updating of the zone',
    ],
];