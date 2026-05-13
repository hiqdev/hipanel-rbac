# Internal Permissions Reference

Permissions and roles marked `'internal' => true` in `metadata.php` are staff-only. They must never appear in any role reachable by `role:client` or `role:reseller`.

`AuthManagerTest::testIsRoleInternal()` enforces this list — update it when adding or removing `internal` flags.

---

## Internal roles

| Role | Why internal |
|---|---|
| `role:installment-plan.manager` | Business installment control |
| `role:accounter` | Staff-only financial management role |

---

## Internal permissions

### Server
| Permission | Reason |
|---|---|
| `server.create` | Infrastructure provisioning |
| `server.delete` | Destructive infrastructure operation |
| `server.update` | Infrastructure management |
| `server.assign-hub` | Datacenter network topology |

### Hub (network switches)
| Permission | Reason |
|---|---|
| `hub.create` | Infrastructure provisioning |
| `hub.delete` | Destructive infrastructure operation |
| `hub.update` | Infrastructure management |
| `hub.sell` | Selling network equipment |

### Billing
| Permission | Reason |
|---|---|
| `bill.import` | Bulk import of bills from external sources |
| `bill.create-exchange` | Currency exchange operations |
| `bill.charges.read` | Internal charge detail view |
| `bill.see-server-charges` | Internal server charge detail |

### Financial
| Permission | Reason |
|---|---|
| `pnl.read` | Internal profit & loss report |
| `pnl.read-expenses` | Internal expense data |
| `pnl.update` | Internal P&L management |
| `costprice.read` | Internal cost pricing |
| `costprice.create` | Internal cost pricing |
| `costprice.update` | Internal cost pricing |
| `costprice.delete` | Internal cost pricing |
| `consumption.read-all` | Read all consumption regardless of ownership |

### Client management
| Permission | Reason |
|---|---|
| `client.impersonate` | Log in as another user |
| `client.set-roles` | Assign roles to accounts |
| `client.set-others-allowed-ips` | Cross-client IP allowlisting |
| `client.set-description` | Internal CRM notes |

### Domain (force operations)
| Permission | Reason |
|---|---|
| `domain.freeze` | Business-level domain lock |
| `domain.unfreeze` | Business-level domain lock |
| `domain.force-push` | Bypass client transfer workflow |
| `domain.force-set-nss` | Bypass client NS workflow |
| `domain.force-send-foa` | Bypass FOA workflow |
| `domain.approve-trasfer-out` | Registrar-level operation |
| `domain.maintain` | Low-level DB maintenance |

### Stock
| Permission | Reason |
|---|---|
| `order.read` | Internal stock orders |
| `order.create` | Internal stock orders |
| `order.update` | Internal stock orders |
| `order.delete` | Internal stock orders |
| `order.read-profits` | Internal order profit data |
| `move.create` | Internal hardware movement |
| `move.update` | Internal hardware movement |
| `move.delete` | Internal hardware movement |
| `move.read-all` | Internal: all movements regardless of owner |
| `move.get-directions` | Internal: movement routing data |
| `model.create` | Internal hardware catalog |
| `model.update` | Internal hardware catalog |
| `model.delete` | Internal hardware catalog |
| `part.sell` | Assign stock parts to buyers |
| `part.read-all-hierarchy` | Full part tree navigation |

### Blacklist
| Permission | Reason |
|---|---|
| `blacklist.read` | Company-level abuse control |
| `blacklist.create` | Company-level abuse control |
| `blacklist.update` | Company-level abuse control |
| `blacklist.delete` | Company-level abuse control |

### Audit
| Permission | Reason |
|---|---|
| `audit.read` | Internal audit trail |
| `audit.read_everything` | Full system audit access |

### Config
| Permission | Reason |
|---|---|
| `config.read` | System configuration |
| `config.create` | System configuration |
| `config.update` | System configuration |
| `config.delete` | System configuration |

### DNS zones
| Permission | Reason |
|---|---|
| `zone.read` | DNS zone management (server-side, not domain DNS) |
| `zone.create` | DNS zone management |
| `zone.update` | DNS zone management |
| `zone.delete` | DNS zone management |

### Employee
| Permission | Reason |
|---|---|
| `employee.read` | Internal staff records |
| `employee.create` | Internal staff records |
| `employee.update` | Internal staff records |
| `employee.delete` | Internal staff records |

### Installment plans
| Permission | Reason |
|---|---|
| `installment-plan.delete` | Business installment control |
| `installment-plan.update` | Business installment control |
| `installment-plan.restore` | Business installment control |
| `installment-plan.process` | Manually trigger installment processing |

### Misc
| Permission | Reason |
|---|---|
| `see-no-mans` | See unowned objects in the system |
| `ref.view.not-used` | Show unused reference values (inactive types) |
| `owner-staff` | OBSOLETE primitive |

---

## deny: counterparts

Every `deny:X` mirrors the `internal` flag of its positive `X`. The list above covers only the positive permissions; their `deny:` counterparts carry the same flag in `metadata.php`.
