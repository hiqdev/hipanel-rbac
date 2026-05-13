# Development Workflow

## Making changes

### Edit the role hierarchy

Edit `src/files/source/tree.php`. Roles are PHP arrays:

```php
'role:foo' => [
    'role:parent-role',
    'some.permission',
    'another.permission',
],
```

### Edit descriptions and internal flags

Edit `src/files/source/metadata.php`:

```php
'some.permission' => [
    'description' => 'What this permission allows.',
    'internal' => true,   // only if staff-only
],
'deny:some.permission' => [
    'description' => 'Prohibits some.permission operation.',
    'internal' => true,   // mirror the positive counterpart
],
```

### Rebuild generated files

```sh
# From: vendor/hiqdev/hipanel-rbac/
./vendor/bin/hidev rbac/reinit
```

This regenerates:
- `src/files/items.php` — flat map of all items with full metadata
- `src/files/assignments.php` — self-assignments for test setup
- `js/index.ts` — TypeScript export

### Run tests

```sh
./vendor/bin/phpunit
```

Tests will tell you exactly which permissions are wrong for each role. Add or remove them from `tests/unit/CheckAccessTrait.php`.

---

## Adding a new permission

1. Decide: is it client-safe or staff-only?
2. Add to `tree.php` under the right role.
3. Add description to `metadata.php`. If staff-only, add `'internal' => true`.
4. Add `deny:foo` counterpart to `metadata.php` (mirrors `internal` flag).
5. Run `./vendor/bin/hidev rbac/reinit`.
6. Update affected `testXxx()` methods in `CheckAccessTrait.php`.
7. Run `./vendor/bin/phpunit` and iterate.
8. Update `AuthManagerTest::testIsRoleInternal()` if the `internal` flag changed.

---

## Adding a new role

1. Add to `tree.php`:
   ```php
   'role:new-thing' => [
       'parent.permission',
       'other.permission',
   ],
   ```
2. Add description to `metadata.php`:
   ```php
   'role:new-thing' => [
       'description' => 'What this role grants.',
       'internal' => true,  // if staff-only
   ],
   ```
3. Run reinit + phpunit.
4. Add a `testNewThing()` method to `CheckAccessTrait.php` if the role needs explicit coverage.

---

## Checking access programmatically

```php
// In Yii2 controller / service:
Yii::$app->user->can('some.permission')

// In PHP tests:
$auth->checkAccess($userId, 'some.permission')
```

---

## The `isItemInternal()` API

```php
$auth->isItemInternal($item)  // returns true if metadata.php marks it internal
```

Used by the UI to hide internal permissions from external users.

---

## Syntax validation

```sh
php -l src/files/source/tree.php
php -l src/files/source/metadata.php
php -l src/files/items.php
```

---

## Common mistakes

**Wrong**: Adding a staff-only permission to `role:manager` or `role:admin` or `role:support`.
These roles are inherited by `role:client`. Anything in them is visible to every authenticated client.

**Wrong**: Forgetting to add a `deny:foo` entry to `metadata.php` when adding `foo`.
The generated `items.php` will be missing the deny counterpart.

**Wrong**: Forgetting to run `reinit` after editing `tree.php`.
The generated `items.php` will be stale and tests will pass against old data.

**Wrong**: Editing `src/files/items.php` directly.
It's generated and will be overwritten by the next `reinit`.

**Right**: When unsure whether a permission is client-safe, check `docs/client-vs-staff.md` for precedent, or trace the full role hierarchy in `tree.php` to verify it doesn't reach `role:client`.
