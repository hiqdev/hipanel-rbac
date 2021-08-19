export declare const RoleHierarchy: {
    "role:nobody": string[];
    "role:unauthorized": string[];
    "role:client.support": string[];
    "role:client.manager": string[];
    "role:employee.manager": string[];
    "role:client.impersonator": string[];
    "role:client.master": string[];
    "role:contact.user": string[];
    "role:server.user": string[];
    "role:server.admin": string[];
    "role:server.manager": string[];
    "role:server.master": string[];
    "role:hub.user": string[];
    "role:hub.admin": string[];
    "role:hub.manager": string[];
    "role:hub.master": string[];
    "role:consumption.user": string[];
    "role:consumption.manager": string[];
    "role:config.manager": string[];
    "role:integration.manager": string[];
    "role:account.user": string[];
    "role:backup.user": string[];
    "role:backuping.user": string[];
    "role:crontab.user": string[];
    "role:db.user": string[];
    "role:zone.manager": string[];
    "role:hdomain.user": string[];
    "role:ip.admin": string[];
    "role:mail.user": string[];
    "role:request.user": string[];
    "role:service.admin": string[];
    "role:vhost.user": string[];
    "role:hosting.reader": string[];
    "role:hosting.user": string[];
    "role:hosting.admin": string[];
    "role:purse.user": string[];
    "role:purse.manager": string[];
    "role:purse.master": string[];
    "role:bill.user": string[];
    "role:bill.junior-manager": string[];
    "role:bill.manager": string[];
    "role:bill.master": string[];
    "role:requisites.user": string[];
    "role:requisites.manager": string[];
    "role:plan.user": string[];
    "role:plan.manager": string[];
    "role:plan.master": string[];
    "role:document.user": string[];
    "role:document.employee": string[];
    "role:document.manager": string[];
    "role:document.master": string[];
    "role:sale.user": string[];
    "role:sale.manager": string[];
    "role:sale.master": string[];
    "role:finance.reader": string[];
    "role:finance.user": string[];
    "role:finance.employee": string[];
    "role:finance.manager": string[];
    "role:finance.master": string[];
    "role:stock.user": string[];
    "role:stock.manager": string[];
    "role:stock.master": string[];
    "role:order.user": string[];
    "role:order.manager": string[];
    "role:order.master": string[];
    "role:project.user": string[];
    "role:client": string[];
    "role:support": string[];
    "role:admin": string[];
    "role:accounter": string[];
    "role:manager": string[];
    "role:reseller": string[];
    "role:employee": string[];
    "role:master": string[];
    "role:owner": string[];
    "role:superpowers": string[];
    "role:junior-manager": string[];
    "role:domain.user": string[];
    "role:domain.manager": string[];
    "role:domain.master": string[];
    "role:dns.user": string[];
    "role:dns.manager": string[];
    "role:certificate.user": string[];
    "role:certificate.manager": string[];
    "role:ticket.user": string[];
    "role:ticket.manager": string[];
    "role:beta-tester": string[];
    "role:alpha-tester": string[];
    "role:owner-staff": string[];
    "role:almighty": string[];
};
export declare enum Role {
    "Nobody" = "role:nobody",
    "Unauthorized" = "role:unauthorized",
    "ClientSupport" = "role:client.support",
    "ClientManager" = "role:client.manager",
    "EmployeeManager" = "role:employee.manager",
    "ClientImpersonator" = "role:client.impersonator",
    "ClientMaster" = "role:client.master",
    "ContactUser" = "role:contact.user",
    "ServerUser" = "role:server.user",
    "ServerAdmin" = "role:server.admin",
    "ServerManager" = "role:server.manager",
    "ServerMaster" = "role:server.master",
    "HubUser" = "role:hub.user",
    "HubAdmin" = "role:hub.admin",
    "HubManager" = "role:hub.manager",
    "HubMaster" = "role:hub.master",
    "ConsumptionUser" = "role:consumption.user",
    "ConsumptionManager" = "role:consumption.manager",
    "ConfigManager" = "role:config.manager",
    "IntegrationManager" = "role:integration.manager",
    "AccountUser" = "role:account.user",
    "BackupUser" = "role:backup.user",
    "BackupingUser" = "role:backuping.user",
    "CrontabUser" = "role:crontab.user",
    "DbUser" = "role:db.user",
    "ZoneManager" = "role:zone.manager",
    "HdomainUser" = "role:hdomain.user",
    "IpAdmin" = "role:ip.admin",
    "MailUser" = "role:mail.user",
    "RequestUser" = "role:request.user",
    "ServiceAdmin" = "role:service.admin",
    "VhostUser" = "role:vhost.user",
    "HostingReader" = "role:hosting.reader",
    "HostingUser" = "role:hosting.user",
    "HostingAdmin" = "role:hosting.admin",
    "PurseUser" = "role:purse.user",
    "PurseManager" = "role:purse.manager",
    "PurseMaster" = "role:purse.master",
    "BillUser" = "role:bill.user",
    "BillJuniorManager" = "role:bill.junior-manager",
    "BillManager" = "role:bill.manager",
    "BillMaster" = "role:bill.master",
    "RequisitesUser" = "role:requisites.user",
    "RequisitesManager" = "role:requisites.manager",
    "PlanUser" = "role:plan.user",
    "PlanManager" = "role:plan.manager",
    "PlanMaster" = "role:plan.master",
    "DocumentUser" = "role:document.user",
    "DocumentEmployee" = "role:document.employee",
    "DocumentManager" = "role:document.manager",
    "DocumentMaster" = "role:document.master",
    "SaleUser" = "role:sale.user",
    "SaleManager" = "role:sale.manager",
    "SaleMaster" = "role:sale.master",
    "FinanceReader" = "role:finance.reader",
    "FinanceUser" = "role:finance.user",
    "FinanceEmployee" = "role:finance.employee",
    "FinanceManager" = "role:finance.manager",
    "FinanceMaster" = "role:finance.master",
    "StockUser" = "role:stock.user",
    "StockManager" = "role:stock.manager",
    "StockMaster" = "role:stock.master",
    "OrderUser" = "role:order.user",
    "OrderManager" = "role:order.manager",
    "OrderMaster" = "role:order.master",
    "ProjectUser" = "role:project.user",
    "Client" = "role:client",
    "Support" = "role:support",
    "Admin" = "role:admin",
    "Accounter" = "role:accounter",
    "Manager" = "role:manager",
    "Reseller" = "role:reseller",
    "Employee" = "role:employee",
    "Master" = "role:master",
    "Owner" = "role:owner",
    "Superpowers" = "role:superpowers",
    "JuniorManager" = "role:junior-manager",
    "DomainUser" = "role:domain.user",
    "DomainManager" = "role:domain.manager",
    "DomainMaster" = "role:domain.master",
    "DnsUser" = "role:dns.user",
    "DnsManager" = "role:dns.manager",
    "CertificateUser" = "role:certificate.user",
    "CertificateManager" = "role:certificate.manager",
    "TicketUser" = "role:ticket.user",
    "TicketManager" = "role:ticket.manager",
    "BetaTester" = "role:beta-tester",
    "AlphaTester" = "role:alpha-tester",
    "OwnerStaff" = "role:owner-staff",
    "Almighty" = "role:almighty"
}
export declare enum Permission {
    "Nothing" = "nothing",
    "RestorePassword" = "restore-password",
    "Deposit" = "deposit",
    "ServerPay" = "server.pay",
    "PlanRead" = "plan.read",
    "ClientRead" = "client.read",
    "ClientList" = "client.list",
    "ClientCreate" = "client.create",
    "ClientUpdate" = "client.update",
    "ClientDelete" = "client.delete",
    "ContactSetVerified" = "contact.set-verified",
    "ClientBlock" = "client.block",
    "ClientUnblock" = "client.unblock",
    "ClientGetNote" = "client.get-note",
    "ClientSetNote" = "client.set-note",
    "ClientSetDescription" = "client.set-description",
    "PurseUpdate" = "purse.update",
    "PurseRead" = "purse.read",
    "EmployeeRead" = "employee.read",
    "EmployeeCreate" = "employee.create",
    "EmployeeUpdate" = "employee.update",
    "EmployeeDelete" = "employee.delete",
    "DocumentAcceptance" = "document.acceptance",
    "ClientImpersonate" = "client.impersonate",
    "ClientSetRoles" = "client.set-roles",
    "ContactRead" = "contact.read",
    "ContactCreate" = "contact.create",
    "ContactUpdate" = "contact.update",
    "ContactDelete" = "contact.delete",
    "ServerRead" = "server.read",
    "ServerControlPower" = "server.control-power",
    "ServerControlSystem" = "server.control-system",
    "ServerSetNote" = "server.set-note",
    "ServerCreate" = "server.create",
    "ServerUpdate" = "server.update",
    "ServerDelete" = "server.delete",
    "ServerWizzard" = "server.wizzard",
    "ServerSetLabel" = "server.set-label",
    "ConsumptionRead" = "consumption.read",
    "ServerManageSettings" = "server.manage-settings",
    "ServerSeeLabel" = "server.see-label",
    "ServerEnableBlock" = "server.enable-block",
    "ServerDisableBlock" = "server.disable-block",
    "ServerSell" = "server.sell",
    "HubRead" = "hub.read",
    "HubCreate" = "hub.create",
    "HubUpdate" = "hub.update",
    "HubDelete" = "hub.delete",
    "HubSell" = "hub.sell",
    "ConsumptionUpdate" = "consumption.update",
    "ConsumptionDelete" = "consumption.delete",
    "ConfigRead" = "config.read",
    "ConfigCreate" = "config.create",
    "ConfigUpdate" = "config.update",
    "ConfigDelete" = "config.delete",
    "IntegrationRead" = "integration.read",
    "IntegrationCreate" = "integration.create",
    "IntegrationUpdate" = "integration.update",
    "IntegrationDelete" = "integration.delete",
    "AccountRead" = "account.read",
    "AccountCreate" = "account.create",
    "AccountUpdate" = "account.update",
    "AccountDelete" = "account.delete",
    "BackupRead" = "backup.read",
    "BackupDelete" = "backup.delete",
    "BackupingRead" = "backuping.read",
    "BackupingCreate" = "backuping.create",
    "BackupingUpdate" = "backuping.update",
    "BackupingDelete" = "backuping.delete",
    "CrontabRead" = "crontab.read",
    "CrontabCreate" = "crontab.create",
    "CrontabUpdate" = "crontab.update",
    "CrontabDelete" = "crontab.delete",
    "DbRead" = "db.read",
    "DbCreate" = "db.create",
    "DbUpdate" = "db.update",
    "DbDelete" = "db.delete",
    "ZoneCreate" = "zone.create",
    "ZoneUpdate" = "zone.update",
    "ZoneRead" = "zone.read",
    "ZoneDelete" = "zone.delete",
    "HdomainRead" = "hdomain.read",
    "HdomainCreate" = "hdomain.create",
    "HdomainUpdate" = "hdomain.update",
    "HdomainDelete" = "hdomain.delete",
    "HdomainSetDns" = "hdomain.set-dns",
    "IpRead" = "ip.read",
    "IpCreate" = "ip.create",
    "IpUpdate" = "ip.update",
    "IpDelete" = "ip.delete",
    "MailRead" = "mail.read",
    "MailCreate" = "mail.create",
    "MailUpdate" = "mail.update",
    "MailDelete" = "mail.delete",
    "RequestRead" = "request.read",
    "RequestCreate" = "request.create",
    "RequestUpdate" = "request.update",
    "RequestDelete" = "request.delete",
    "ServiceRead" = "service.read",
    "ServiceCreate" = "service.create",
    "ServiceUpdate" = "service.update",
    "ServiceDelete" = "service.delete",
    "VhostRead" = "vhost.read",
    "VhostCreate" = "vhost.create",
    "VhostUpdate" = "vhost.update",
    "VhostDelete" = "vhost.delete",
    "PurseCreate" = "purse.create",
    "BillRead" = "bill.read",
    "BillCreate" = "bill.create",
    "BillUpdate" = "bill.update",
    "BillDelete" = "bill.delete",
    "BillImport" = "bill.import",
    "BillCreateExchange" = "bill.create-exchange",
    "RequisitesRead" = "requisites.read",
    "RequisitesCreate" = "requisites.create",
    "RequisitesUpdate" = "requisites.update",
    "RequisitesDelete" = "requisites.delete",
    "PriceRead" = "price.read",
    "FinanceRead" = "finance.read",
    "PlanCreate" = "plan.create",
    "PlanUpdate" = "plan.update",
    "PlanDelete" = "plan.delete",
    "PlanForceRead" = "plan.force-read",
    "PriceUpdate" = "price.update",
    "PriceDelete" = "price.delete",
    "PriceCreate" = "price.create",
    "DocumentRead" = "document.read",
    "DocumentCreate" = "document.create",
    "DocumentInvoice" = "document.invoice",
    "DocumentUpdate" = "document.update",
    "DocumentDelete" = "document.delete",
    "DocumentGenerate" = "document.generate",
    "DocumentGenerateAll" = "document.generate-all",
    "SaleRead" = "sale.read",
    "SaleDelete" = "sale.delete",
    "SaleUpdate" = "sale.update",
    "SaleCreate" = "sale.create",
    "StockRead" = "stock.read",
    "PartRead" = "part.read",
    "MoveRead" = "move.read",
    "ModelRead" = "model.read",
    "MoveGetDirections" = "move.get-directions",
    "OrderRead" = "order.read",
    "PartReadAllHierarchy" = "part.read-all-hierarchy",
    "PartCreate" = "part.create",
    "PartUpdate" = "part.update",
    "PartDelete" = "part.delete",
    "MoveCreate" = "move.create",
    "MoveUpdate" = "move.update",
    "MoveDelete" = "move.delete",
    "ModelCreate" = "model.create",
    "ModelUpdate" = "model.update",
    "ModelDelete" = "model.delete",
    "MoveReadAll" = "move.read-all",
    "OrderCreate" = "order.create",
    "OrderUpdate" = "order.update",
    "OrderDelete" = "order.delete",
    "OrderReadProfits" = "order.read-profits",
    "HaveGoods" = "have-goods",
    "DomainPay" = "domain.pay",
    "DomainPush" = "domain.push",
    "DomainDeleteAgp" = "domain.delete-agp",
    "CertificatePay" = "certificate.pay",
    "CertificatePush" = "certificate.push",
    "ClientNotify" = "client.notify",
    "AccessSubclients" = "access-subclients",
    "Support" = "support",
    "Admin" = "admin",
    "Manage" = "manage",
    "AccessReseller" = "access-reseller",
    "ContactForceVerify" = "contact.force-verify",
    "MailingPrepare" = "mailing.prepare",
    "MailingSend" = "mailing.send",
    "ClientSetTmpPwd" = "client.set-tmp-pwd",
    "Resell" = "resell",
    "DenyAccessReseller" = "deny:access-reseller",
    "Own" = "own",
    "SeeNoMans" = "see-no-mans",
    "PartSell" = "part.sell",
    "ClientSetOthersAllowedIps" = "client.set-others-allowed-ips",
    "DomainRead" = "domain.read",
    "DomainUpdate" = "domain.update",
    "DomainSetNss" = "domain.set-nss",
    "DomainDelete" = "domain.delete",
    "DomainFreeze" = "domain.freeze",
    "DomainUnfreeze" = "domain.unfreeze",
    "DomainForcePush" = "domain.force-push",
    "DomainForceSendFoa" = "domain.force-send-foa",
    "DomainApproveTrasferOut" = "domain.approve-trasfer-out",
    "DomainMaintain" = "domain.maintain",
    "DnsCreate" = "dns.create",
    "DnsRead" = "dns.read",
    "DnsUpdate" = "dns.update",
    "DnsDelete" = "dns.delete",
    "CertificateRead" = "certificate.read",
    "CertificateCreate" = "certificate.create",
    "CertificateUpdate" = "certificate.update",
    "CertificateDelete" = "certificate.delete",
    "TicketRead" = "ticket.read",
    "TicketCreate" = "ticket.create",
    "TicketAnswer" = "ticket.answer",
    "TicketClose" = "ticket.close",
    "TicketUpdate" = "ticket.update",
    "TicketDelete" = "ticket.delete",
    "TestBeta" = "test.beta",
    "TestAlpha" = "test.alpha",
    "RefViewNotUsed" = "ref.view.not-used",
    "BillChargesRead" = "bill.charges.read",
    "DenyDeposit" = "deny:deposit"
}
