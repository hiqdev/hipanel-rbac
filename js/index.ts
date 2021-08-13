export const ROLES_AND_PERMISSIONS    = {"role:nobody":["nothing"],"role:unauthorized":["restore-password","deposit","server.pay","plan.read"],"role:client.support":["client.read","client.list"],"role:client.manager":["role:client.support","client.create","client.update","client.delete","contact.set-verified","client.block","client.unblock","client.get-note","client.set-note","client.set-description","purse.update","purse.read"],"role:employee.manager":["client.list","employee.read","employee.create","employee.update","employee.delete","document.acceptance","purse.update","purse.read"],"role:client.impersonator":["client.impersonate"],"role:client.master":["client.set-roles"],"role:contact.user":["contact.read","contact.create","contact.update","contact.delete"],"role:server.user":["server.read","server.control-power","server.control-system","server.set-note"],"role:server.admin":["role:server.user","server.create","server.update","server.delete","server.wizzard","server.set-label","consumption.read","server.manage-settings","server.see-label"],"role:server.manager":["role:server.user","server.enable-block","server.disable-block","server.pay","server.sell","server.set-label","server.see-label"],"role:server.master":["role:server.admin","role:server.manager"],"role:hub.user":["hub.read"],"role:hub.admin":["hub.read","hub.create","hub.update","hub.delete"],"role:hub.manager":["hub.read","hub.sell"],"role:hub.master":["role:hub.admin","role:hub.manager"],"role:consumption.user":["consumption.read"],"role:consumption.manager":["consumption.read","consumption.update","consumption.delete"],"role:config.manager":["config.read","config.create","config.update","config.delete"],"role:integration.manager":["integration.read","integration.create","integration.update","integration.delete"],"role:account.user":["account.read","account.create","account.update","account.delete"],"role:backup.user":["backup.read","backup.delete"],"role:backuping.user":["backuping.read","backuping.create","backuping.update","backuping.delete"],"role:crontab.user":["crontab.read","crontab.create","crontab.update","crontab.delete"],"role:db.user":["db.read","db.create","db.update","db.delete"],"role:zone.manager":["zone.create","zone.update","zone.read","zone.delete"],"role:hdomain.user":["hdomain.read","hdomain.create","hdomain.update","hdomain.delete","hdomain.set-dns"],"role:ip.admin":["ip.read","ip.create","ip.update","ip.delete"],"role:mail.user":["mail.read","mail.create","mail.update","mail.delete"],"role:request.user":["request.read","request.create","request.update","request.delete"],"role:service.admin":["service.read","service.create","service.update","service.delete"],"role:vhost.user":["vhost.read","vhost.create","vhost.update","vhost.delete"],"role:hosting.reader":["account.read","backup.read","backuping.read","crontab.read","db.read","hdomain.read","ip.read","mail.read","request.read","service.read","vhost.read"],"role:hosting.user":["role:account.user","role:backup.user","role:backuping.user","role:crontab.user","role:db.user","role:hdomain.user","role:mail.user","role:request.user","role:vhost.user","ip.read","service.read"],"role:hosting.admin":["role:account.user","role:backup.user","role:backuping.user","role:crontab.user","role:db.user","role:hdomain.user","role:mail.user","role:request.user","role:vhost.user","role:ip.admin","role:service.admin"],"role:purse.user":["purse.read"],"role:purse.manager":["role:purse.user","purse.update","purse.create"],"role:purse.master":["role:purse.manager"],"role:bill.user":["bill.read","deposit"],"role:bill.junior-manager":["bill.read"],"role:bill.manager":["bill.read","bill.create","bill.update","bill.delete","deposit","role:purse.manager"],"role:bill.master":["bill.read","bill.create","bill.update","bill.delete","deposit","bill.import","bill.create-exchange","role:purse.master"],"role:requisites.user":["requisites.read"],"role:requisites.manager":["requisites.read","requisites.create","requisites.update","requisites.delete"],"role:plan.user":["plan.read","price.read","finance.read"],"role:plan.manager":["plan.read","plan.create","plan.update","plan.delete","plan.force-read","price.read","price.update","price.delete","price.create"],"role:plan.master":["role:plan.manager"],"role:document.user":["document.read","document.create","document.invoice"],"role:document.employee":["document.read","document.create","document.acceptance"],"role:document.manager":["role:document.user","document.update","document.delete","document.generate","document.acceptance","document.invoice"],"role:document.master":["document.generate-all"],"role:sale.user":["sale.read"],"role:sale.manager":["sale.read","sale.delete","sale.update","sale.create"],"role:sale.master":["role:sale.manager"],"role:finance.reader":["plan.read","bill.read","document.read","finance.read","bill.read"],"role:finance.user":["role:finance.reader","role:bill.user","role:plan.user","role:document.user"],"role:finance.employee":["role:bill.user","role:document.employee","finance.read"],"role:finance.manager":["role:finance.reader","role:bill.junior-manager","role:plan.manager","role:document.manager","role:sale.manager","finance.read"],"role:finance.master":["role:finance.manager","role:bill.manager","role:plan.master","role:document.manager","role:sale.master"],"role:stock.user":["stock.read","part.read","move.read","model.read","move.get-directions","order.read"],"role:stock.manager":["role:stock.user","part.read-all-hierarchy","part.create","part.update","part.delete","move.create","move.update","move.delete","model.create","model.update","model.delete"],"role:stock.master":["role:stock.manager","move.read-all","role:order.master"],"role:order.user":["order.read","order.create","order.update","order.delete"],"role:order.manager":["role:order.user"],"role:order.master":["role:order.manager","order.read-profits"],"role:project.user":["consumption.read","part.read","move.get-directions"],"role:client":["role:unauthorized","have-goods","role:ticket.user","role:domain.user","domain.pay","domain.push","domain.delete-agp","role:dns.user","role:certificate.user","certificate.pay","certificate.push","role:contact.user","role:document.user","document.invoice","role:server.user","server.pay","role:hosting.user","role:finance.user","role:sale.user","client.notify"],"role:support":["access-subclients","support","role:ticket.manager","role:client.support","role:domain.user","role:dns.user","role:certificate.user","role:contact.user","role:server.user","role:hosting.user"],"role:admin":["admin","role:support","role:hub.admin","role:stock.manager","role:server.admin","role:hosting.admin"],"role:accounter":["role:manager","role:hub.manager","role:stock.manager"],"role:manager":["manage","access-reseller","role:support","role:document.manager","role:domain.manager","domain.pay","domain.push","domain.delete-agp","role:server.manager","role:consumption.manager","role:dns.manager","role:certificate.manager","certificate.pay","certificate.push","role:contact.user","contact.force-verify","role:client.manager","role:finance.manager","mailing.prepare","mailing.send","client.set-tmp-pwd","client.notify","role:purse.user"],"role:reseller":["have-goods","resell","role:finance.master","deny:access-reseller","role:manager","role:integration.manager"],"role:employee":["restore-password","role:contact.user","role:finance.employee","employee.read"],"role:master":["role:client.master","role:finance.master","role:bill.master","role:document.master","role:plan.master","role:sale.master","role:stock.master","role:domain.master","role:server.master","role:hub.master","role:superpowers","resell"],"role:owner":["role:manager","role:bill.master","role:stock.manager","resell","own"],"role:superpowers":["see-no-mans","part.sell","client.set-others-allowed-ips"],"role:junior-manager":["access-subclients","access-reseller","role:hub.user","role:stock.user","plan.force-read","plan.read","document.read","finance.read","bill.read","client.read","client.list","contact.read","server.read","consumption.read"],"role:domain.user":["domain.read","domain.update","domain.delete-agp","domain.set-nss"],"role:domain.manager":["role:domain.user","domain.delete"],"role:domain.master":["role:domain.manager","domain.freeze","domain.unfreeze","domain.push","domain.force-push","domain.force-send-foa","domain.approve-trasfer-out","domain.maintain"],"role:dns.user":["dns.create","dns.read","dns.update","dns.delete"],"role:dns.manager":["role:dns.user"],"role:certificate.user":["certificate.read","certificate.create","certificate.update"],"role:certificate.manager":["role:certificate.user","certificate.delete"],"role:ticket.user":["ticket.read","ticket.create","ticket.answer","ticket.close"],"role:ticket.manager":["role:ticket.user","ticket.update","ticket.delete"],"role:beta-tester":["test.beta"],"role:alpha-tester":["role:beta-tester","test.alpha"],"role:owner-staff":["ref.view.not-used","bill.charges.read","part.read-all-hierarchy"],"role:almighty":["role:admin","role:manager","role:document.master","role:finance.master","role:stock.master","role:config.manager","domain.freeze","domain.force-push","domain.delete","employee.read","domain.force-send-foa","deny:deposit"]};

export enum ROLES_ENUM    {
    "RoleNobody" = "role:nobody",
    "RoleUnauthorized" = "role:unauthorized",
    "RoleClientSupport" = "role:client.support",
    "RoleClientManager" = "role:client.manager",
    "RoleEmployeeManager" = "role:employee.manager",
    "RoleClientImpersonator" = "role:client.impersonator",
    "RoleClientMaster" = "role:client.master",
    "RoleContactUser" = "role:contact.user",
    "RoleServerUser" = "role:server.user",
    "RoleServerAdmin" = "role:server.admin",
    "RoleServerManager" = "role:server.manager",
    "RoleServerMaster" = "role:server.master",
    "RoleHubUser" = "role:hub.user",
    "RoleHubAdmin" = "role:hub.admin",
    "RoleHubManager" = "role:hub.manager",
    "RoleHubMaster" = "role:hub.master",
    "RoleConsumptionUser" = "role:consumption.user",
    "RoleConsumptionManager" = "role:consumption.manager",
    "RoleConfigManager" = "role:config.manager",
    "RoleIntegrationManager" = "role:integration.manager",
    "RoleAccountUser" = "role:account.user",
    "RoleBackupUser" = "role:backup.user",
    "RoleBackupingUser" = "role:backuping.user",
    "RoleCrontabUser" = "role:crontab.user",
    "RoleDbUser" = "role:db.user",
    "RoleZoneManager" = "role:zone.manager",
    "RoleHdomainUser" = "role:hdomain.user",
    "RoleIpAdmin" = "role:ip.admin",
    "RoleMailUser" = "role:mail.user",
    "RoleRequestUser" = "role:request.user",
    "RoleServiceAdmin" = "role:service.admin",
    "RoleVhostUser" = "role:vhost.user",
    "RoleHostingReader" = "role:hosting.reader",
    "RoleHostingUser" = "role:hosting.user",
    "RoleHostingAdmin" = "role:hosting.admin",
    "RolePurseUser" = "role:purse.user",
    "RolePurseManager" = "role:purse.manager",
    "RolePurseMaster" = "role:purse.master",
    "RoleBillUser" = "role:bill.user",
    "RoleBillJuniorManager" = "role:bill.junior-manager",
    "RoleBillManager" = "role:bill.manager",
    "RoleBillMaster" = "role:bill.master",
    "RoleRequisitesUser" = "role:requisites.user",
    "RoleRequisitesManager" = "role:requisites.manager",
    "RolePlanUser" = "role:plan.user",
    "RolePlanManager" = "role:plan.manager",
    "RolePlanMaster" = "role:plan.master",
    "RoleDocumentUser" = "role:document.user",
    "RoleDocumentEmployee" = "role:document.employee",
    "RoleDocumentManager" = "role:document.manager",
    "RoleDocumentMaster" = "role:document.master",
    "RoleSaleUser" = "role:sale.user",
    "RoleSaleManager" = "role:sale.manager",
    "RoleSaleMaster" = "role:sale.master",
    "RoleFinanceReader" = "role:finance.reader",
    "RoleFinanceUser" = "role:finance.user",
    "RoleFinanceEmployee" = "role:finance.employee",
    "RoleFinanceManager" = "role:finance.manager",
    "RoleFinanceMaster" = "role:finance.master",
    "RoleStockUser" = "role:stock.user",
    "RoleStockManager" = "role:stock.manager",
    "RoleStockMaster" = "role:stock.master",
    "RoleOrderUser" = "role:order.user",
    "RoleOrderManager" = "role:order.manager",
    "RoleOrderMaster" = "role:order.master",
    "RoleProjectUser" = "role:project.user",
    "RoleClient" = "role:client",
    "RoleSupport" = "role:support",
    "RoleAdmin" = "role:admin",
    "RoleAccounter" = "role:accounter",
    "RoleManager" = "role:manager",
    "RoleReseller" = "role:reseller",
    "RoleEmployee" = "role:employee",
    "RoleMaster" = "role:master",
    "RoleOwner" = "role:owner",
    "RoleSuperpowers" = "role:superpowers",
    "RoleJuniorManager" = "role:junior-manager",
    "RoleDomainUser" = "role:domain.user",
    "RoleDomainManager" = "role:domain.manager",
    "RoleDomainMaster" = "role:domain.master",
    "RoleDnsUser" = "role:dns.user",
    "RoleDnsManager" = "role:dns.manager",
    "RoleCertificateUser" = "role:certificate.user",
    "RoleCertificateManager" = "role:certificate.manager",
    "RoleTicketUser" = "role:ticket.user",
    "RoleTicketManager" = "role:ticket.manager",
    "RoleBetaTester" = "role:beta-tester",
    "RoleAlphaTester" = "role:alpha-tester",
    "RoleOwnerStaff" = "role:owner-staff",
    "RoleAlmighty" = "role:almighty",
};

export enum PERMISSIONS_ENUM    {
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
    "DenyDeposit" = "deny:deposit",
};
