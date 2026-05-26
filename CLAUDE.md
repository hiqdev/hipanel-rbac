# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```sh
# Run all tests
./vendor/bin/phpunit

# Run a single test method
./vendor/bin/phpunit --filter testManager

# Regenerate items.php, metadata.php, and js/index.ts from source tree
./vendor/bin/hidev rbac/reinit

# Initialize RBAC in AuthManager (without regenerating metadata)
./vendor/bin/hidev rbac/init

# Regenerate descriptions only (metadata.php)
./vendor/bin/hidev rbac/generate-descriptions

# Export permissions matrix to permissions.csv
./vendor/bin/hidev rbac/export

# Show all roles and permissions
./vendor/bin/hidev rbac/show
```

## Architecture

### Source of truth vs generated files

`src/files/source/tree.php` is the **only file you should edit** to define the role/permission hierarchy. It is a compact PHP array mapping role names to their direct children (roles or permissions).

Running `rbac/reinit` regenerates three files from the source:
- `src/files/items.php` — flat PHP array (roles + permissions + descriptions) loaded by `AuthManager` at runtime via Yii2's `PhpManager`
- `src/files/source/metadata.php` — descriptions for each item; hand-written descriptions survive regeneration (the generator only fills missing ones)
- `js/index.ts` — TypeScript enums and the full hierarchy object for frontend consumption

Do not edit `src/files/items.php` directly; changes will be overwritten on the next `reinit`.

### Role/permission naming conventions

- Roles are prefixed: `role:module.level` (e.g. `role:server.manager`, `role:finance.master`)
- Permissions follow `module.action` (e.g. `server.create`, `bill.read`)
- Every permission automatically gets a corresponding `deny:permission` that, when assigned, overrides the grant (`AuthManager::checkAccess` checks both)
- Permissions with `'internal' => true` in metadata are staff-only and hidden from client-facing UI

### Hierarchy levels

Roles follow a consistent `user → admin → manager → master` pattern per module. Higher-level roles typically include lower ones via `role:module.lower`. Top-level composite roles (`role:client`, `role:manager`, `role:reseller`, `role:almighty`, etc.) aggregate module-level roles.

### AuthManager

`src/AuthManager.php` extends Yii2's `PhpManager`. Its `checkAccess()` method adds the denial layer: a permission is granted only if the positive check passes **and** the `deny:permission` check fails. Assignments are not auto-saved; call `persistAssignments()` explicitly when needed.

### Adding a new permission

1. Add the permission name to the appropriate role(s) in `src/files/source/tree.php`
2. Run `./vendor/bin/hidev rbac/reinit`
3. Update `tests/unit/CheckAccessTrait.php`: add the permission to every role test that should have it (and verify it's absent from role tests that should not)
4. Run `./vendor/bin/phpunit` to confirm

### Tests

`tests/unit/CheckAccessTrait.php` contains exhaustive per-role assertions (`assertAccesses`) that list every permission a role should have. Each role has its own `test*` method. When a role's permissions change, the corresponding test method must be updated to match exactly — the assertions check both presence and absence of every known permission.
