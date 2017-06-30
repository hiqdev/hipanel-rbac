# hiqdev/hipanel-rbac

## [0.1.0] - 2017-06-30

- Refactored Initer with `tree`
    - [508101e] 2017-06-30 refactored Initer with `tree` [@hiqsol]
- Added `deny` permission
    - [5581422] 2017-06-29 added `deny` permission implementation (with tests) [@hiqsol]
- Added `employee` CRUD permissions
    - [2229b5f] 2017-05-12 fixed tests for phpunit 6 [@hiqsol]
    - [947327d] 2017-05-12 csfixed [@hiqsol]
    - [a3e3739] 2017-05-12 renamed configs to common and console [@hiqsol]
    - [c082743] 2017-05-12 csfixed [@hiqsol]
    - [8d1ea54] 2017-05-12 renamed `hidev.yml` [@hiqsol]
    - [7bfb4be] 2017-04-05 hideved [@SilverFire]
    - [a13b3bf] 2017-04-05 Added employee.read permission to employee role [@SilverFire]
    - [fd239bf] 2017-04-04 Added employee role [@SilverFire]
    - [26d6d49] 2017-02-21 added domain.delete permission and csfixed [@hiqsol]
    - [b5101ab] 2017-02-09 added employee CRUD permission and employee.manager role with tests [@hiqsol]
- Added more domain, server, contact, mailing and document permissions
    - [e27d95a] 2017-06-29 added domain.push permission [@hiqsol]
    - [3970c44] 2017-02-09 Merge pull request #2 from bladeroot/domain-force-push [@hiqsol]
    - [c937899] 2017-02-09 fixedttests [@BladeRoot]
    - [535d5aa] 2017-02-09 + test domain.force-push [@BladeRoot]
    - [7a7c8b1] 2017-02-08 changed domain.freezer -> domain.master [@hiqsol]
    - [48e21bd] 2017-01-03 Added mailing.perpare, mailing.send permissions [@SilverFire]
    - [d6e26d2] 2016-12-27 Added contact.force-verify permission [@SilverFire]
    - [c8b26c8] 2016-11-24 Added document.manager role [@SilverFire]
    - [d1ea29b] 2016-11-11 added `domain.pay` and `server.pay` permissions [@hiqsol]
    - [c015235] 2016-11-10 changed setAssignments to work with comma separated string [@hiqsol]
    - [84c6b5a] 2016-11-10 Merge pull request #1 from hiqsol/master [@hiqsol]
    - [8c68994] 2016-11-04 simplified out setSmartAssignments in favour of setAssignments [@hiqsol]
- Refactored role names to role:name, role:object.name, role:object.long-name
    - [a733e43] 2016-11-04 redone with setSmartAssignments [@hiqsol]
- Refactored permission names to name, object.name, object.long-name
    - [3aba504] 2016-11-03 refactoring roles and permissions names [@hiqsol]
    - [2741a28] 2016-11-02 fixed phpdoc [@hiqsol]
    - [b4f8334] 2016-10-31 redone bill management permissions: + roles: billManager/Creator/Deleter [@hiqsol]

## [0.0.2] - 2016-10-07

- Added own `checkAccess`
    - [5e19f40] 2016-10-07 greatly improved checkAccess to use findIdentity, removed setCurrencyUserRole [@hiqsol]
    - [5f125bb] 2016-10-07 minor fix [@hiqsol]
    - [de94806] 2016-10-07 csfixed [@hiqsol]
    - [443cc4a] 2016-10-07 splitted out SetterTrait to see AuthManager idea clearly [@hiqsol]
    - [96ea515] 2016-09-30 fixed setCurrentUserRole to work when no role could be found [@hiqsol]
    - [a7579fb] 2016-09-30 added own `checkAccess()` going to production [@hiqsol]
- Added `restore-password` and `edit/delete-bills` permissions
    - [92fa7a7] 2016-10-07 added restore-password permission to files [@hiqsol]
    - [d179692] 2016-10-07 removed getRoles and getPermissions cause they are already there from BaseManager [@hiqsol]
    - [c988cc5] 2016-10-07 + restore-password permission [@hiqsol]
    - [8cdad28] 2016-09-30 changed yii2 version constraint, yii2 is not semver [@hiqsol]
    - [e1a90ce] 2016-09-30 + edit/delete bills permission, billManager role [@hiqsol]

## [0.0.1] - 2016-09-27

- Added basics
    - [d8568fa] 2016-09-27 skipped csfixing for `src/files` [@hiqsol]
    - [32ef7a3] 2016-09-27 redone bumping to `chkipper` [@hiqsol]
    - [48cae72] 2016-09-27 csfixed [@hiqsol]
    - [c2b514a] 2016-09-27 greatly improved tests: splitted out IniterTest and CheckAccessTrait [@hiqsol]
    - [235625b] 2016-09-27 fixed roles and permissions names [@hiqsol]
    - [17d1714] 2016-09-27 improved `rbac/show` action [@hiqsol]
    - [b03792f] 2016-09-27 added rbac files to repository [@hiqsol]
    - [dce698a] 2016-09-27 set files paths in class [@hiqsol]
    - [78852f3] 2016-09-27 added hisite config [@hiqsol]
    - [0ca8c7a] 2016-05-28 fixed tests [@hiqsol]
    - [ce82cea] 2016-05-28 csfixed [@hiqsol]
    - [b853f4b] 2016-05-28 csfixed [@hiqsol]
    - [ab0ccf7] 2016-05-27 + rbac/show action [@hiqsol]
    - [f34dd8d] 2016-05-27 added authManager configuration to hidev [@hiqsol]
    - [2d333a4] 2016-05-26 added RbacController [@hiqsol]
    - [000cc9b] 2016-05-26 renamed to adminRole and removed guest and loggedin [@hiqsol]
    - [8a235e1] 2016-05-26 moved hidev plugins requiring to composer.json [@hiqsol]
    - [8f94631] 2016-04-08 fixed name to `hipanel-core` [@hiqsol]
    - [07695f4] 2016-04-08 phpcsfixed [@hiqsol]
    - [be4ab26] 2016-04-08 improved comments [@hiqsol]
    - [e90861b] 2016-04-08 inited [@hiqsol]

## [Development started] - 2016-04-08

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
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
[a13b3bf]: https://github.com/hiqdev/hipanel-rbac/commit/a13b3bf
[fd239bf]: https://github.com/hiqdev/hipanel-rbac/commit/fd239bf
[26d6d49]: https://github.com/hiqdev/hipanel-rbac/commit/26d6d49
[b5101ab]: https://github.com/hiqdev/hipanel-rbac/commit/b5101ab
[3970c44]: https://github.com/hiqdev/hipanel-rbac/commit/3970c44
[c937899]: https://github.com/hiqdev/hipanel-rbac/commit/c937899
[535d5aa]: https://github.com/hiqdev/hipanel-rbac/commit/535d5aa
[7a7c8b1]: https://github.com/hiqdev/hipanel-rbac/commit/7a7c8b1
[48e21bd]: https://github.com/hiqdev/hipanel-rbac/commit/48e21bd
[d6e26d2]: https://github.com/hiqdev/hipanel-rbac/commit/d6e26d2
[c8b26c8]: https://github.com/hiqdev/hipanel-rbac/commit/c8b26c8
[d1ea29b]: https://github.com/hiqdev/hipanel-rbac/commit/d1ea29b
[c015235]: https://github.com/hiqdev/hipanel-rbac/commit/c015235
[84c6b5a]: https://github.com/hiqdev/hipanel-rbac/commit/84c6b5a
[8c68994]: https://github.com/hiqdev/hipanel-rbac/commit/8c68994
[a733e43]: https://github.com/hiqdev/hipanel-rbac/commit/a733e43
[3aba504]: https://github.com/hiqdev/hipanel-rbac/commit/3aba504
[2741a28]: https://github.com/hiqdev/hipanel-rbac/commit/2741a28
[b4f8334]: https://github.com/hiqdev/hipanel-rbac/commit/b4f8334
[Under development]: https://github.com/hiqdev/hipanel-rbac/compare/0.0.2...HEAD
[0.0.2]: https://github.com/hiqdev/hipanel-rbac/compare/0.0.1...0.0.2
[0.0.1]: https://github.com/hiqdev/hipanel-rbac/releases/tag/0.0.1
[5581422]: https://github.com/hiqdev/hipanel-rbac/commit/5581422
[e27d95a]: https://github.com/hiqdev/hipanel-rbac/commit/e27d95a
[2229b5f]: https://github.com/hiqdev/hipanel-rbac/commit/2229b5f
[947327d]: https://github.com/hiqdev/hipanel-rbac/commit/947327d
[a3e3739]: https://github.com/hiqdev/hipanel-rbac/commit/a3e3739
[c082743]: https://github.com/hiqdev/hipanel-rbac/commit/c082743
[8d1ea54]: https://github.com/hiqdev/hipanel-rbac/commit/8d1ea54
[7bfb4be]: https://github.com/hiqdev/hipanel-rbac/commit/7bfb4be
[508101e]: https://github.com/hiqdev/hipanel-rbac/commit/508101e
[0.1.0]: https://github.com/hiqdev/hipanel-rbac/compare/0.0.2...0.1.0
