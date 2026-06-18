# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```sh
# Run all tests (from the Yii2 application root, not from within this package)
./vendor/bin/phpunit -c vendor/hiqdev/hipanel-rbac/phpunit.xml.dist

# Run a single test method
./vendor/bin/phpunit -c vendor/hiqdev/hipanel-rbac/phpunit.xml.dist --filter testManager
```

## Architecture

### Source of truth vs generated files

`src/files/source/tree.php` defines the role/permission hierarchy as a compact PHP array mapping role names to their direct children (roles or permissions).

`src/files/source/metadata.php` holds descriptions and flags (e.g. `'internal' => true`) for each item.

`src/files/items.php` is the flat PHP array loaded by `AuthManager` at runtime via Yii2's `PhpManager`. It must be kept in sync with the source files manually when making changes.

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

1. Edit `src/files/source/tree.php` and `src/files/source/metadata.php` as needed
2. Edit `src/files/items.php` to match (it mirrors the source files at runtime)
3. Update `tests/unit/CheckAccessTrait.php`: add the permission to every role test that should have it (and verify it's absent from role tests that should not)
4. If the permission is marked `'internal' => true`, also add it (and any role that becomes internal as a result) to the expected list in `tests/unit/AuthManagerTest.php::testIsRoleInternal`
5. Run tests to confirm

### Tests

`tests/unit/CheckAccessTrait.php` contains exhaustive per-role assertions (`assertAccesses`) that list every permission a role should have. Each role has its own `test*` method. When a role's permissions change, the corresponding test method must be updated to match exactly — the assertions check both presence and absence of every known permission.

`tests/unit/AuthManagerTest.php::testIsRoleInternal` maintains a hardcoded list of all internal permissions and roles. A role is considered internal if any of its children are internal. Keep this list in sync whenever `'internal' => true` is added or removed from metadata.
