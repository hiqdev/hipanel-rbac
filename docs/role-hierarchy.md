# Role Hierarchy Reference

Full permission sets for each top-level role, as of the 2025-05 restructuring.

## Notation

- `→` means "inherits from"
- Permissions listed are the *net result* after full transitive expansion
- Permissions in **bold** are additions relative to the parent role

---

## role:nobody
Nothing. Used as a sentinel.

---

## role:unauthorized
For unauthenticated visitors.

`restore-password`, `deposit`, `server.pay`, `plan.read`

---

## role:support
Client-safe base role. Assigned to client sub-users who need support access.

`access-subclients`, `support`,
`ticket.read`, `ticket.create`, `ticket.answer`, `ticket.close`, `ticket.update`,
`client.read`, `client.list`, `client.read-ip`,
`domain.read`, `domain.update`, `domain.delete-agp`, `domain.set-nss`,
`dns.create`, `dns.read`, `dns.update`, `dns.delete`,
`certificate.read`, `certificate.create`, `certificate.update`,
`contact.read`, `contact.create`, `contact.update`, `contact.delete`,
`server.read`, `server.control-power`, `server.control-system`, `server.set-note`,
`account.read`, `account.create`, `account.update`, `account.delete`,
`backup.read`, `backup.delete`,
`backuping.read`, `backuping.create`, `backuping.update`, `backuping.delete`,
`crontab.read`, `crontab.create`, `crontab.update`, `crontab.delete`,
`db.read`, `db.create`, `db.update`, `db.delete`,
`hdomain.read`, `hdomain.create`, `hdomain.update`, `hdomain.delete`, `hdomain.set-dns`,
`mail.read`, `mail.create`, `mail.update`, `mail.delete`,
`request.read`, `request.create`, `request.update`, `request.delete`,
`vhost.read`, `vhost.create`, `vhost.update`, `vhost.delete`,
`ip.read`, `service.read`

---

## role:admin
→ role:support + server admin layer. Still client-safe.

Everything from `role:support` plus:

`server.read-wizzard`, `server.read-legend`, `server.read-system-info`,
`server.set-label`, `server.see-label`, `server.manage-settings`, `consumption.read`

---

## role:manager
→ role:admin + management layer. Still client-safe. This is the richest client-assignable role.

Everything from `role:admin` plus:

`document.update`, `document.delete`, `document.generate`, `document.acceptance`, `document.invoice`,
`domain.delete`, `domain.pay`, `domain.push`,
`certificate.pay`, `certificate.push`,
`server.read-financial-info`, `server.read-billing`, `server.pay`,
`client.create`, `client.update`, `client.set-tmp-pwd`,
`client.read-financial-info`, `client.read-requisite`, `client.read-referral`,
`bill.read`, `deposit`, `finance.read`, `price.read`,
`sale.read`, `installment-plan.read`, `purse.read`,
`client.notify`

---

## role:client
→ role:unauthorized + role:manager

Everything from `role:manager` plus:
`restore-password`, `have-goods`, `pay`

(server.pay and deposit appear via both role:unauthorized and role:manager — duplicates are harmless)

---

## role:staff-admin
→ role:admin + all infrastructure-level staff powers

Everything from `role:admin` plus:

`admin`,
`hub.read`,
`ticket.update`, `ticket.delete`, `ticket.read-templates`, `ticket.read-statistics`,
`ticket.set-private`, `ticket.set-recipient`, `ticket.set-time`,
`blacklist.read`, `blacklist.create`, `blacklist.update`, `blacklist.delete`,
`server.wizzard`, `server.move-disks`,
`server.create`, `server.delete`, `server.update`, `server.assign-hub`,
`hub.create`, `hub.update`, `hub.delete`,
`ip.create`, `ip.update`, `ip.delete`,
`service.create`, `service.update`, `service.delete`,
`stock.read`, `part.read`, `move.read`, `model.read`, `order.read`,
`move.create`, `move.update`, `move.delete`, `move.get-directions`,
`part.read-administrative`,
`consumption.update`, `consumption.delete`,
`see-no-mans`

---

## role:staff-manager
→ role:manager + all management-level staff powers

Everything from `role:manager` plus:

`manage`, `access-reseller`,
`bill.create`, `bill.update`, `bill.delete`,
`bill.charges.read`, `bill.see-server-charges`,
`purse.create`, `purse.update`, `purse.set-credit`,
`plan.create`, `plan.update`, `plan.delete`, `plan.force-read`, `plan.set-note`,
`price.create`, `price.update`, `price.delete`,
`sale.create`, `sale.update`, `sale.delete`,
`installment-plan.delete`, `installment-plan.update`, `installment-plan.restore`, `installment-plan.process`,
`certificate.delete`,
`ticket.update`, `ticket.delete`, `ticket.read-templates`, `ticket.read-statistics`,
`ticket.set-private`, `ticket.set-recipient`, `ticket.set-time`,
`blacklist.read`, `blacklist.create`, `blacklist.update`, `blacklist.delete`,
`consumption.update`, `consumption.delete`,
`contact.force-verify`, `contact.set-verified`,
`client.delete`, `client.block`, `client.unblock`,
`client.get-note`, `client.set-note`, `client.read-deleted`,
`target.read`, `target.create`, `target.update`, `target.delete`,
`mailing.prepare`, `mailing.send`,
`server.enable-block`, `server.disable-block`, `server.sell`,
`see-no-mans`

---

## role:accounter
→ role:staff-manager + hub manager + stock manager

Everything from `role:staff-manager` plus:

`hub.read`, `hub.sell`,
`part.read`, `part.create`, `part.update`, `part.delete`, `part.erase`,
`part.read-all-hierarchy`,
`move.read`, `move.create`, `move.update`, `move.delete`, `move.get-directions`,
`model.read`, `model.create`, `model.update`, `model.delete`,
`stock.read`, `order.read`

---

## role:reseller
→ role:manager + finance master + reseller-specific management

Everything from `role:manager` plus:

`manage`,
`resell`,
`bill.create`, `bill.update`, `bill.delete`, `deposit`,
`purse.create`, `purse.update`, `purse.set-credit`,
`plan.create`, `plan.update`, `plan.delete`, `plan.force-read`, `plan.set-note`,
`price.create`, `price.update`, `price.delete`,
`sale.create`, `sale.update`, `sale.delete`,
`certificate.delete`,
`ticket.update`, `ticket.delete`, `ticket.read-templates`, `ticket.read-statistics`,
`ticket.set-private`, `ticket.set-recipient`, `ticket.set-time`,
`consumption.update`, `consumption.delete`,
`contact.force-verify`, `contact.set-verified`,
`client.delete`, `client.block`, `client.unblock`,
`client.get-note`, `client.set-note`, `client.read-deleted`,
`target.read`, `target.create`, `target.update`, `target.delete`,
`server.enable-block`, `server.disable-block`, `server.sell`,
`integration.read`, `integration.create`, `integration.update`, `integration.delete`

**Not included**: `mailing.prepare`, `mailing.send` (strictly internal), `blacklist.*` (strictly internal)

---

## role:almighty
Testing-only super-role. Combines everything. See `testAlmighty` in `CheckAccessTrait.php` for the exhaustive list.
