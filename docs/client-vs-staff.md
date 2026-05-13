# Client vs. Staff Permission Boundary

Documented decisions from the 2025-05 security audit. Treat client as an **account owner** (self-service portal user), staff as **company employees** running the business.

---

## Decision log

### Ticket operations

| Permission | Client? | Rationale |
|---|---|---|
| ticket.read/create/answer/close | ✅ | Core support workflow |
| ticket.update | ✅ | Clients can edit their own ticket content |
| ticket.delete | ❌ | Deletion is destructive; require staff oversight |
| ticket.read-templates | ❌ | Internal support tooling |
| ticket.read-statistics | ❌ | Internal KPI data |
| ticket.set-private | ❌ | Private flag is a staff-internal concept |
| ticket.set-recipient | ❌ | Routing tickets is a staff operation |
| ticket.set-time | ❌ | Time tracking is internal |

### Certificate operations

| Permission | Client? | Rationale |
|---|---|---|
| certificate.read/create/update | ✅ | Normal certificate lifecycle |
| certificate.pay/push | ✅ | Client pays for and deploys their cert |
| certificate.delete | ❌ | User decision: require staff to delete ("own-object delete: NO") |

### Domain operations

| Permission | Client? | Rationale |
|---|---|---|
| domain.read/update/set-nss/delete-agp | ✅ | Normal domain management |
| domain.delete | ✅ | Clients can delete their own domains |
| domain.pay/push | ✅ | Client pays for and pushes their domain |
| domain.freeze/unfreeze | ❌ | Business-level domain lock; internal |
| domain.force-push/force-set-nss/force-send-foa | ❌ | Force operations bypass client workflow |
| domain.approve-trasfer-out | ❌ | Registrar-level operation; internal |
| domain.maintain | ❌ | Low-level DB maintenance; internal |

### Client/account management

| Permission | Client? | Rationale |
|---|---|---|
| client.read/list/read-ip | ✅ | Account owner reads their own account and sub-users |
| client.create/update | ✅ | Sub-user management is client-safe |
| client.set-tmp-pwd | ✅ | Account owner sets temporary password for sub-users |
| client.read-financial-info/requisite/referral | ✅ | Own financial data |
| client.notify | ✅ | Send notifications — needed for sub-user workflows |
| client.delete | ❌ | Deletion is permanent business action |
| client.block/unblock | ❌ | Business-level enforcement; code has `$user->not($model->client_id)` guard |
| client.get-note/set-note | ❌ | Staff internal notes on a client |
| client.read-deleted | ❌ | Exposes deleted accounts; internal |
| client.impersonate | ❌ | Log in as another client; strictly internal |
| client.set-roles | ❌ | Role assignment is a staff action |
| client.set-description | ❌ | Internal CRM field |
| client.set-others-allowed-ips | ❌ | Cross-client IP allowlisting; internal |

### Server operations

| Permission | Client? | Rationale |
|---|---|---|
| server.read/control-power/control-system/set-note | ✅ | Basic server management |
| server.read-wizzard/read-legend/read-system-info | ✅ | Read-only status info (via role:server.admin) |
| server.set-label/see-label/manage-settings | ✅ | Server configuration (via role:server.admin) |
| server.read-financial-info/read-billing | ✅ | Own billing data (via role:manager) |
| server.pay | ✅ | Clients pay for their servers |
| server.enable-block/disable-block | ❌ | Code explicitly checks `$user->not($model->client_id)` |
| server.sell | ❌ | Assigns a server to a client; internal provisioning action |
| server.wizzard | ❌ | Disabling wizard mode; staff datacenter operation |
| server.move-disks | ❌ | Physical hardware swap; strictly internal |
| server.create/delete/update | ❌ | Server provisioning; internal |
| server.assign-hub | ❌ | Datacenter network topology; internal |

### Financial operations

| Permission | Client? | Rationale |
|---|---|---|
| bill.read | ✅ | Read own bills |
| deposit | ✅ | Add funds |
| purse.read | ✅ | View own purse |
| plan.read/price.read/finance.read | ✅ | View tariffs and financial summary |
| installment-plan.read | ✅ | View own installment plans |
| sale.read | ✅ | View own subscriptions/sales |
| bill.create/update/delete | ❌ | Business accounting; staff-only |
| bill.import/create-exchange | ❌ | Bulk import and currency exchange; internal |
| bill.charges.read/see-server-charges | ❌ | Internal detailed charge views |
| purse.update | ❌ | Changing purse metadata (legal entity linkage); internal |
| purse.set-credit | ❌ | Setting credit limit; business-controlled |
| plan.create/update/delete | ❌ | Business pricing; staff-only |
| sale.create/update/delete | ❌ | Sales management; staff-only |
| installment-plan.delete/update/restore/process | ❌ | Business installment control |

### Mailing

| Permission | Client? | Reseller? | Rationale |
|---|---|---|---|
| mailing.prepare | ❌ | ❌ | Strictly internal; user decision |
| mailing.send | ❌ | ❌ | Strictly internal; user decision |

### Blacklist

| Permission | Client? | Reseller? | Rationale |
|---|---|---|---|
| blacklist.* | ❌ | ❌ | Company-level abuse control; strictly internal |

### Consumption

| Permission | Client? | Rationale |
|---|---|---|
| consumption.read | ✅ | Clients see their server resource usage |
| consumption.update/delete | ❌ | Modify consumption records; staff-only |

### Contact

| Permission | Client? | Rationale |
|---|---|---|
| contact.read/create/update/delete | ✅ | Manage own contacts |
| contact.force-verify | ❌ | Bypass verification workflow; staff |
| contact.set-verified | ❌ | Trust elevation; removes payment blocks |

---

## Role assignments for client sub-users

When a client creates a sub-user, they may assign one of these roles:
- `role:support` — read access, ticket handling
- `role:admin` — + server admin, full hosting
- `role:manager` — + document/domain/finance management, sub-user CRUD

None of these roles carry `admin`, `manage`, `mailing.*`, `blacklist.*`, or any other staff primitive.

---

## Resellers vs. Staff

Resellers are external mini-business-owners, not company staff. They get:
- Client management (block/unblock/delete/notes) — they manage their own sub-clients
- Plan/price management — they set their own reseller pricing
- Server blocking/selling — they provision services for their sub-clients
- Certificate and ticket deletion — they fully manage their clients' resources
- Contact verification — they verify contacts for their clients

Resellers do NOT get:
- `mailing.prepare/send` — bulk company mailing; strictly internal
- `blacklist.*` — company-level abuse control; strictly internal
- `see-no-mans` — internal unowned-object visibility
- `bill.charges.read/see-server-charges` — internal charge detail views
- `installment-plan.manager` — company-level installment control
