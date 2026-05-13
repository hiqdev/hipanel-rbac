# CLAUDE.md — hipanel-rbac

This file gives an AI assistant (Claude Code) everything it needs to pick up context immediately when working in this package.

## What this package is

The single source of truth for HiPanel's RBAC. Two hand-edited source files drive everything:

- `src/files/source/tree.php` — role inheritance tree (`role:X => [child-roles, permissions...]`)
- `src/files/source/metadata.php` — description + `internal` flag for every role and permission

After editing either source file, run **`./vendor/bin/hidev rbac/reinit`** (from this directory) to regenerate `src/files/items.php`. Then run **`./vendor/bin/phpunit`** to verify.

## The fundamental invariant

```
role:client ⊆ role:manager ⊆ role:admin ⊆ role:support
```

`role:client` now includes `role:manager`, which includes `role:admin`, which includes `role:support`. This means everything in `role:support`, `role:admin`, and `role:manager` is visible to any authenticated client and their sub-users.

**Consequence**: any permission added to these three roles MUST be client-safe. Staff-only things go to `role:staff-admin` or `role:staff-manager` instead.

## Client vs. staff split

**Client** = account owner (treats HiPanel as a self-service portal).
**Staff** = company employees (run the business, manage infrastructure).

### Roles available to clients (as sub-user roles)
- `role:support` — ticket handling, domain/DNS/cert/contact/server/hosting read access
- `role:admin` — extends support with server admin (system info, labels, settings) and full hosting
- `role:manager` — extends admin with document/domain/finance management and sub-user CRUD

### Roles only for staff
- `role:staff-admin` — admin + hub/stock access + server provisioning + IP/service admin + ticket deletion + blacklist
- `role:staff-manager` — manager + mailing + client blocking + purse control + plan CRUD + sale CRUD + cert deletion + ticket deletion

## The `internal` flag

```php
'foo.bar' => ['description' => '...', 'internal' => true],
```

- `internal: true` = staff-only; never reachable from `role:client` or `role:reseller`
- Every `deny:foo.bar` should mirror the `internal` flag of `foo.bar`
- `AuthManagerTest::testIsRoleInternal()` enforces which items are marked internal — update it when you add/remove `internal` flags

## The `deny:` pattern

Every positive permission `foo` has a `deny:foo` that overrides it. Used to restrict inherited permissions:

```php
// Resellers can't spawn further sub-resellers:
'deny:access-reseller',

// Restrict a specific client beyond role:client defaults:
'role:client,deny:server.pay,deny:deposit'
```

## Test structure

`tests/unit/CheckAccessTrait.php` contains one `testXxx()` per role. Each calls `assertAccesses($roleId, $allowedList)` which checks:
1. Every permission in `$allowedList` is granted — fails if any is denied
2. Every permission NOT in `$allowedList` is denied — fails if any is accidentally granted

This is exhaustive. When a role gains or loses any permission, the corresponding test must be updated. **Do not guess the list** — run phpunit, read the failure message, add/remove the listed permissions.

### Updating tests after tree.php changes

1. Edit `tree.php`
2. Run `./vendor/bin/hidev rbac/reinit`
3. Run `./vendor/bin/phpunit` — tests will fail listing wrong permissions
4. Add missing ones / remove stale ones in `CheckAccessTrait.php`
5. Iterate until all 46 tests pass

## Key role compositions (as of this writing)

### role:support (client-safe base)
`access-subclients`, `support`, `role:ticket.user` (read/create/answer/close/**update**),
`role:client.support` (client.read, client.list, client.read-ip),
`role:domain.user`, `role:dns.user`, `role:certificate.user`, `role:contact.user`,
`role:server.user`, `role:hosting.user`

### role:admin (client-safe)
`role:support` + `role:server.admin` (wizard info, system info, legend, labels, settings, consumption.read)
Note: no `admin` primitive, no hub, no stock — those moved to `role:staff-admin`

### role:manager (client-safe)
`role:admin` + `role:document.manager` + `role:domain.manager` (domain.delete) +
`role:dns.manager` + domain.pay + domain.push + cert pay/push +
server.read-financial-info + server.read-billing + server.pay +
client.create + client.update + client.read-financial-info + client.read-requisite +
client.read-referral + client.set-tmp-pwd + `role:finance.user` + `role:sale.user` +
installment-plan.read + purse.read + client.notify

### role:staff-admin
`role:admin` + `admin` + `role:hub.user` + `role:ticket.manager` + `role:blacklist.manager` +
`role:stock.admin` + `role:server.staff-admin` (server.wizzard, server.move-disks, create/delete/update, assign-hub) +
`role:hub.staff-admin` + `role:hosting.admin` (ip CRUD, service CRUD) +
`role:consumption.manager` + `see-no-mans`

### role:staff-manager
`role:manager` + `role:bill.staff-manager` + `role:installment-plan.manager` +
`role:certificate.manager` (cert.delete) + `role:ticket.manager` + `role:blacklist.manager` +
`role:consumption.manager` + `role:plan.manager` + `role:sale.manager` + `role:target.manager` +
`see-no-mans`, `manage`, `access-reseller`,
contact.force-verify, contact.set-verified,
client.delete, client.block, client.unblock, client.get-note, client.set-note, client.read-deleted,
purse.set-credit, purse.update, mailing.prepare, mailing.send,
server.enable-block, server.disable-block, server.sell

### role:reseller
`role:manager` + `role:finance.master` + `role:integration.manager` +
`role:certificate.manager` + `role:ticket.manager` + `role:consumption.manager` +
manage, contact.force-verify, contact.set-verified,
client.delete, client.block, client.unblock, client.get-note, client.set-note, client.read-deleted,
purse.set-credit, purse.update, `role:target.manager`,
server.enable-block, server.disable-block, server.sell,
`deny:access-reseller` (resellers cannot create further sub-resellers)
**NOT**: mailing (strictly internal), blacklist (strictly internal)

## Commands

```sh
# From: vendor/hiqdev/hipanel-rbac/

# Rebuild generated files after editing tree.php or metadata.php:
./vendor/bin/hidev rbac/reinit

# Run all RBAC unit tests:
./vendor/bin/phpunit

# Syntax check:
php -l src/files/source/tree.php
php -l src/files/source/metadata.php
```

## Gotchas

- `server.wizzard` and `server.move-disks` are in `role:server.staff-admin`, NOT `role:server.admin`. Clients (via role:admin) get the read info but not the write operations.
- `ticket.update` is in `role:ticket.user` (client-safe). `ticket.delete` and all staff ticket features are only in `role:ticket.manager` (staff-only).
- `certificate.delete` is staff-only (in `role:certificate.manager`). Clients only get `role:certificate.user` (read/create/update).
- `domain.delete` IS client-safe (in `role:domain.manager`). Clients can delete their own domains.
- `purse.read` is client-safe. `purse.update` and `purse.set-credit` are staff-only.
- `client.create` and `client.update` are client-safe (sub-user management). `client.delete`, `client.block`, `client.unblock` are staff-only.
- `mailing.prepare` and `mailing.send` are strictly internal — not even for resellers.
- `consumption.read` is client-safe (via role:server.admin). `consumption.update` and `consumption.delete` are staff-only.
- The `testMighty` test uses assignment `role:staff-admin,role:staff-manager,...` (not `role:manager`).
- `role:accounter` inherits `role:staff-manager` (not `role:manager`) — it's a staff role.
