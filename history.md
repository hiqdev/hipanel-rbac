hiqdev/hipanel-rbac
-------------------

## [0.0.2] - 2016-10-07

- Added own `checkAccess`
    - [5e19f40] 2016-10-07 greatly improved checkAccess to use findIdentity, removed setCurrencyUserRole [sol@hiqdev.com]
    - [5f125bb] 2016-10-07 minor fix [sol@hiqdev.com]
    - [de94806] 2016-10-07 csfixed [sol@hiqdev.com]
    - [443cc4a] 2016-10-07 splitted out SetterTrait to see AuthManager idea clearly [sol@hiqdev.com]
    - [96ea515] 2016-09-30 fixed setCurrentUserRole to work when no role could be found [sol@hiqdev.com]
    - [a7579fb] 2016-09-30 added own `checkAccess()` going to production [sol@hiqdev.com]
- Added `restore-password` and `edit/delete-bills` permissions
    - [92fa7a7] 2016-10-07 added restore-password permission to files [sol@hiqdev.com]
    - [d179692] 2016-10-07 removed getRoles and getPermissions cause they are already there from BaseManager [sol@hiqdev.com]
    - [c988cc5] 2016-10-07 + restore-password permission [sol@hiqdev.com]
    - [8cdad28] 2016-09-30 changed yii2 version constraint, yii2 is not semver [sol@hiqdev.com]
    - [e1a90ce] 2016-09-30 + edit/delete bills permission, billManager role [sol@hiqdev.com]

## [0.0.1] - 2016-09-27

- Added basics
    - [d8568fa] 2016-09-27 skipped csfixing for `src/files` [sol@hiqdev.com]
    - [32ef7a3] 2016-09-27 redone bumping to `chkipper` [sol@hiqdev.com]
    - [48cae72] 2016-09-27 csfixed [sol@hiqdev.com]
    - [c2b514a] 2016-09-27 greatly improved tests: splitted out IniterTest and CheckAccessTrait [sol@hiqdev.com]
    - [235625b] 2016-09-27 fixed roles and permissions names [sol@hiqdev.com]
    - [17d1714] 2016-09-27 improved `rbac/show` action [sol@hiqdev.com]
    - [b03792f] 2016-09-27 added rbac files to repository [sol@hiqdev.com]
    - [dce698a] 2016-09-27 set files paths in class [sol@hiqdev.com]
    - [78852f3] 2016-09-27 added hisite config [sol@hiqdev.com]
    - [0ca8c7a] 2016-05-28 fixed tests [sol@hiqdev.com]
    - [ce82cea] 2016-05-28 csfixed [sol@hiqdev.com]
    - [b853f4b] 2016-05-28 csfixed [sol@hiqdev.com]
    - [ab0ccf7] 2016-05-27 + rbac/show action [sol@hiqdev.com]
    - [f34dd8d] 2016-05-27 added authManager configuration to hidev [sol@hiqdev.com]
    - [2d333a4] 2016-05-26 added RbacController [sol@hiqdev.com]
    - [000cc9b] 2016-05-26 renamed to adminRole and removed guest and loggedin [sol@hiqdev.com]
    - [8a235e1] 2016-05-26 moved hidev plugins requiring to composer.json [sol@hiqdev.com]
    - [8f94631] 2016-04-08 fixed name to `hipanel-core` [sol@hiqdev.com]
    - [07695f4] 2016-04-08 phpcsfixed [sol@hiqdev.com]
    - [be4ab26] 2016-04-08 improved comments [sol@hiqdev.com]
    - [e90861b] 2016-04-08 inited [sol@hiqdev.com]

## [Development started] - 2016-04-08

[48cae72]: https://github.com/hiqdev/hipanel-rbac/commit/48cae72
[c2b514a]: https://github.com/hiqdev/hipanel-rbac/commit/c2b514a
[235625b]: https://github.com/hiqdev/hipanel-rbac/commit/235625b
[17d1714]: https://github.com/hiqdev/hipanel-rbac/commit/17d1714
[b03792f]: https://github.com/hiqdev/hipanel-rbac/commit/b03792f
[dce698a]: https://github.com/hiqdev/hipanel-rbac/commit/dce698a
[78852f3]: https://github.com/hiqdev/hipanel-rbac/commit/78852f3
[0ca8c7a]: https://github.com/hiqdev/hipanel-rbac/commit/0ca8c7a
[ce82cea]: https://github.com/hiqdev/hipanel-rbac/commit/ce82cea
[b853f4b]: https://github.com/hiqdev/hipanel-rbac/commit/b853f4b
[ab0ccf7]: https://github.com/hiqdev/hipanel-rbac/commit/ab0ccf7
[f34dd8d]: https://github.com/hiqdev/hipanel-rbac/commit/f34dd8d
[2d333a4]: https://github.com/hiqdev/hipanel-rbac/commit/2d333a4
[000cc9b]: https://github.com/hiqdev/hipanel-rbac/commit/000cc9b
[8a235e1]: https://github.com/hiqdev/hipanel-rbac/commit/8a235e1
[8f94631]: https://github.com/hiqdev/hipanel-rbac/commit/8f94631
[07695f4]: https://github.com/hiqdev/hipanel-rbac/commit/07695f4
[be4ab26]: https://github.com/hiqdev/hipanel-rbac/commit/be4ab26
[e90861b]: https://github.com/hiqdev/hipanel-rbac/commit/e90861b
[d8568fa]: https://github.com/hiqdev/hipanel-rbac/commit/d8568fa
[32ef7a3]: https://github.com/hiqdev/hipanel-rbac/commit/32ef7a3
[5e19f40]: https://github.com/hiqdev/hipanel-rbac/commit/5e19f40
[5f125bb]: https://github.com/hiqdev/hipanel-rbac/commit/5f125bb
[de94806]: https://github.com/hiqdev/hipanel-rbac/commit/de94806
[443cc4a]: https://github.com/hiqdev/hipanel-rbac/commit/443cc4a
[92fa7a7]: https://github.com/hiqdev/hipanel-rbac/commit/92fa7a7
[d179692]: https://github.com/hiqdev/hipanel-rbac/commit/d179692
[c988cc5]: https://github.com/hiqdev/hipanel-rbac/commit/c988cc5
[8cdad28]: https://github.com/hiqdev/hipanel-rbac/commit/8cdad28
[96ea515]: https://github.com/hiqdev/hipanel-rbac/commit/96ea515
[a7579fb]: https://github.com/hiqdev/hipanel-rbac/commit/a7579fb
[e1a90ce]: https://github.com/hiqdev/hipanel-rbac/commit/e1a90ce
