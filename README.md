# HiPanel RBAC

**RBAC implementation for HiPanel**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hipanel-rbac/v/stable)](https://packagist.org/packages/hiqdev/hipanel-rbac)
[![Total Downloads](https://poser.pugx.org/hiqdev/hipanel-rbac/downloads)](https://packagist.org/packages/hiqdev/hipanel-rbac)

[![Logo](https://raw.githubusercontent.com/hiqdev/hipanel-core/master/docs/logo.png)](https://hipanel.com/)

[HiPanel](http://hipanel.com/) is the next generation control panel for hosting, domains and more.

This package defines every role and permission used by HiPanel's RBAC system (Yii2 `DbManager` + file-based source).

---

## Architecture

### Source files (hand-edited)

| File | Purpose |
|------|---------|
| `src/files/source/tree.php` | Role hierarchy — who inherits what |
| `src/files/source/metadata.php` | Descriptions and `internal` flags for every item |

### Generated files (do not edit)

| File | Purpose |
|------|---------|
| `src/files/items.php` | Flat map of all roles and permissions with full metadata |
| `src/files/assignments.php` | Default assignments (self-assignment of every item) |
| `js/index.ts` | TypeScript export of the tree |

After editing `tree.php` or `metadata.php`, rebuild with:

```sh
./vendor/bin/hidev rbac/reinit
```

Then run tests to verify:

```sh
./vendor/bin/phpunit
```

---

## Role Hierarchy

The hierarchy forms a tree. Lower roles are more privileged. `role:client` is the base for all authenticated users.

```
role:nobody          — nothing at all
role:unauthorized    — unauthenticated visitors (password reset, deposit, server.pay, plan.read)

role:client          — every authenticated client
  └─ role:manager    — client-safe management layer (sub-user CRUD, finance read, domain/cert ops)
       └─ role:admin — client-safe admin layer (server admin, hosting user)
            └─ role:support — client-safe base (tickets, domains, DNS, certs, contacts, hosting)

role:staff-manager   — staff with management powers (inherits role:manager + staff additions)
role:staff-admin     — staff with admin powers (inherits role:admin + staff additions)
role:accounter       — role:staff-manager + hub manager + stock manager
role:reseller        — role:manager + finance master + cert/ticket management + client control
role:owner           — role:manager + bill master + stock + cost price
role:almighty        — testing super-role combining all staff roles
```

### Key invariant

**`role:client` must never receive a permission that was not approved as client-safe.**
The `internal` flag in `metadata.php` marks things that must never reach a client or their sub-users.
Staff-only capabilities live exclusively in `role:staff-admin`, `role:staff-manager`, and their sub-roles.

---

## The `internal` Flag

```php
'some.permission' => [
    'description' => '...',
    'internal' => true,    // staff-only; never assignable to clients/resellers
],
```

A permission marked `internal` must not appear in any role reachable by `role:client` or `role:reseller`.
`deny:*` entries mirror the `internal` flag of their positive counterpart.

### Currently internal (selected list)

- `admin`, `manage`, `support` primitives (OBSOLETE, being replaced)
- `see-no-mans` — view unowned objects
- `mailing.prepare`, `mailing.send` — bulk mailing operations
- `bill.import`, `bill.create-exchange`, `bill.charges.read`, `bill.see-server-charges`
- `client.impersonate`, `client.set-roles`, `client.set-others-allowed-ips`, `client.set-description`
- `config.*` — system configuration
- `domain.freeze`, `domain.unfreeze`, `domain.force-*`, `domain.maintain`, `domain.approve-trasfer-out`
- `hub.create`, `hub.delete`, `hub.update`, `hub.sell`
- `server.create`, `server.delete`, `server.update`, `server.assign-hub`
- `blacklist.*`, `pnl.*`, `costprice.*`, `audit.*`
- `order.*` (all stock order operations)
- `move.create`, `move.delete`, `move.update`, `move.read-all`, `move.get-directions`
- `zone.*` (DNS zone management)
- `installment-plan.delete`, `installment-plan.update`, `installment-plan.restore`, `installment-plan.process`
- `ref.view.not-used`, `part.sell`, `part.read-all-hierarchy`, `consumption.read-all`
- `employee.*`

---

## The `deny:` Pattern

Every permission `foo` has a corresponding `deny:foo` that explicitly revokes it. This allows fine-grained restriction of a role's inherited permissions:

```php
// role:reseller can't spawn further sub-resellers:
'deny:access-reseller',

// Restrict a client:
'role:client,deny:server.pay,deny:deposit'
```

The `deny:` wins over a positive grant at the same level.

---

## Client vs. Staff boundary

**Client** = account owner managing their own services.
**Staff** = company employees running the business.

### Client-safe (in `role:manager` and below)

- Ticket CRUD (read/create/answer/close/update)
- Domain CRUD (own domains), DNS CRUD, certificate read/create/update, pay/push
- Contact CRUD, document CRUD (own documents), finance read
- Server read + power control + settings management
- Hosting CRUD (accounts, backups, crontabs, DBs, hosting domains, mail, vhosts)
- Sub-user CRUD (`client.create`, `client.update`, `client.set-tmp-pwd`)
- Own financial data (bills read, plans read, purse read, installment-plan read)

### Staff-only (requires `role:staff-admin` or `role:staff-manager`)

- Ticket deletion + staff ticket features (templates, statistics, set-private, recipient, time)
- Certificate deletion
- Blacklist management
- Client blocking/unblocking/deletion, client notes (get/set), read-deleted
- Purse update and credit control
- Plan/price CRUD (business pricing)
- Sale CRUD (not just read)
- Server provisioning (create/delete/update/assign-hub)
- Server blocking/unblocking, server selling
- Hub CRUD, consumption update/delete
- Contact set-verified, contact force-verify
- Mailing (prepare + send)
- IP admin (create/update/delete IPs)
- Service admin (create/update/delete services)
- Stock operations (moves, orders, models CRUD, part hierarchy)

---

## Deny-only permissions used by tests

`role:limited` (in `testLimited`) is `role:client` with explicit denies:

```
role:client,deny:pay,deny:deposit,deny:domain.push,deny:server.pay,
deny:server.read,deny:server.control-power,deny:server.control-system,
deny:server.set-note,deny:ip.read,deny:service.read,
deny:domain.delete-agp,deny:domain.set-nss,deny:access-subclients
```

---

## Adding a new permission

1. Add it to `src/files/source/tree.php` under the appropriate role.
2. Add its description (and `internal` flag if staff-only) to `src/files/source/metadata.php`.
3. Add the `deny:` counterpart to `metadata.php` (mirror the `internal` flag).
4. Run `./vendor/bin/hidev rbac/reinit`.
5. Update `tests/unit/CheckAccessTrait.php` for every affected role's `testXxx()` method.
6. Run `./vendor/bin/phpunit`.

---

## Installation

```sh
composer require hiqdev/hipanel-rbac
```

## License

BSD-3-Clause. Copyright © 2016–2025, HiQDev (http://hiqdev.com/)
