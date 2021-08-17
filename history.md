# hiqdev/hipanel-rbac

## [0.1.2] - 2021-08-17

    - [0da034f] 2021-08-17 Fixed download-artifact action [@SilverFire]
    - [a9a0e00] 2021-08-17 Download new artifact and attach it to a release [@SilverFire]
    - [ee78d33] 2021-08-17 init github actions release [smy980807@ukr.net]
    - [2fe29a4] 2021-08-17 added generation of ts file with rbac permissions, first generated file and npm init (#47) [smy980807@ukr.net]
    - [a1297c7] 2021-08-03 fixed missing part.read-all-hierarchy in role:stock.manager (#46) [smy980807@ukr.net]
    - [121a1d0] 2021-07-21 add new `role:almighty` (#45) [smy980807@ukr.net]
    - [949ab6e] 2021-06-24 add purse rules [@BladeRoot]
    - [eb52f33] 2021-03-15 Add superpowers to master role [@hiqsol]
    - [046529c] 2021-03-15 Rename `staff` instead of contractors [@hiqsol]
    - [ce70ac4] 2021-03-15 Add hub and server master roles [@hiqsol]
    - [4e8c0d6] 2021-03-12 add domain.maintain rights [@BladeRoot]
    - [cec47fa] 2021-03-05 Add `role:master` [@hiqsol]
    - [e94c9fd] 2021-02-16 Trying `focal` i.e. Ubuntu 20.04 Focal Fossa [@hiqsol]
    - [b53a909] 2021-02-16 Trying php 8 [@hiqsol]
    - [a758a4b] 2021-02-12 Build 7.4 and 8.0 only [@hiqsol]
    - [343a66a] 2021-02-12 Add `role:client.set-roles` (#41) [@tafid]
    - [f7b420b] 2021-02-10 Add AuthManager::getChildren() method [@tafid]
    - [521015b] 2020-10-29 added 'part.read-all-hierarchy' permission and missing roles descriptions (#39) [smy980807@ukr.net]
    - [d6b1c9c] 2020-10-21 Use `Buildtime::run` to follow config plugin changes [@hiqsol]
    - [9d56cee] 2020-10-20 Allow plan users to see a finance menu [@SilverFire]
    - [05c632a] 2020-09-15 Add sale create/update [@tafid]
    - [139b602] 2020-07-28 added client.notify permission to client (#37) [smy980807@ukr.net]
    - [1426628] 2020-07-28 Fix tests for client can see sales [@hiqsol]
    - [6048a1e] 2020-07-27 Client can see sales [@SilverFire]
    - [33c55ee] 2020-07-22 added client:notify permission [smy980807@ukr.net]
    - [aaa4532] 2020-07-22 Fixed errors in console usage (#35) [smy980807@ukr.net]
    - [e4d828e] 2020-07-01 Fix CheckAccessInterface definition and paths to rbac files (#34) [smy980807@ukr.net]
    - [9d5dda1] 2020-05-26 fixed error in case rule description is empty [smy980807@ukr.net]
    - [abc9a38] 2020-05-25 added rbac usage to readme and fixed 'server.see-label' permission (#32) [smy980807@ukr.net]
    - [b6c7fa9] 2020-05-25 added 'server.see-label' permission [smy980807@ukr.net]
    - [a8a459b] 2020-05-18 Allow `plan.read` for unathorized user [@hiqsol]
    - [f93281e] 2020-05-18 rehidev [@hiqsol]
    - [ae8db89] 2020-05-18 csfix [@hiqsol]
    - [58da18b] 2020-04-28 fixed c-c-p compatibility in tests [smy980807@ukr.net]
    - [b375556] 2020-04-16 Added `consumption.update` permission [@hiqsol]
    - [02059ec] 2020-04-08 Add permission purse.update [@BladeRoot]
    - [87daee1] 2020-03-23 add new rights for manual exchange currencies and import bills (#28) [@BladeRoot]
    - [54ac415] 2020-01-10 Added descriptions for permissions and roles (#27) [@SilverFire]
    - [ab25890] 2019-11-29 Tried and failed with PlantUML [@hiqsol]
    - [3e5b550] 2019-10-18 csfixed [@hiqsol]
    - [3919a58] 2019-10-17 Removed use of `yii::classKey()` [@hiqsol]
    - [e00ff4e] 2019-10-10 fixed dedicated servers billing by unauthorized users [smy980807@ukr.net]
    - [5fafdbb] 2019-10-02 Tuned `role:stock.master` to include `role:order.master` [@hiqsol]
    - [e876528] 2019-10-02 Added `role:order-master` with `order:read-profits` permission for order profit reports [@hiqsol]
    - [153b333] 2019-09-04 Added role for the owner staff team [@SilverFire]
    - [922fb8b] 2019-05-28 Added `config` permissions [@hiqsol]
    - [f8ca27a] 2019-05-10 added zone.meneger role with permissions [smy980807@ukr.net]
    - [8fb14f0] 2019-04-18 added `integrations` permissions, roles and tests [@tafid]
    - [53becc0] 2019-04-18 moved order manager role to stock master (#22) [smy980807@ukr.net]
    - [868c755] 2019-04-15 Merge pull request #21 from strorch/added_roles_for_order [@SilverFire]
    - [376520e] 2019-04-15 added `order` permissions, roles and tests [smy980807@ukr.net]
    - [0d8cc4f] 2019-04-13 Fixed default config override [@SilverFire]
    - [7f8ffa3] 2019-04-09 Switched to `phpunit 7.5` [@hiqsol]
    - [d01d508] 2019-04-09 Ignore generated files [@hiqsol]
    - [0529e3d] 2019-04-09 csfixed [@hiqsol]
    - [01c53a7] 2019-04-02 Added `role:project.user` (#20) [@BladeRoot]
    - [5edacea] 2019-03-22 New rights for junior manager (#19) [@BladeRoot]
    - [e733226] 2019-03-13 Used `yii-compat` for Yii 2/3 compatibility [@hiqsol]
    - [63eee5f] 2019-03-13 Fixed zavtyk after merging [@hiqsol]
    - [2d41c6d] 2019-03-13 Used `yii-compat` [@hiqsol]
    - [16ff0f9] 2019-03-11 Fixed merge conflicts master into 1.0 [@hiqsol]
    - [ec3e843] 2019-03-11 Making Yii 2/3 compatible code and tests [@hiqsol]
    - [8b0efdc] 2019-03-11 Making Yii 2/3 compatible `composer.json` [@hiqsol]
    - [f73b7cd] 2019-03-11 Making Yii 2/3 compatible config [@hiqsol]
    - [879f460] 2019-03-11 Making Yii 2/3 compatible code [@hiqsol]
    - [d436f32] 2019-03-11 Making Yii 2/3 compatible config [@hiqsol]
    - [f2153d2] 2019-02-24 Optimized tests: changed to run `reinit` only once [@hiqsol]
    - [7e787e9] 2019-02-24 Optimized tests: removed degenerate `testPermission` [@hiqsol]
    - [6bf9328] 2019-02-24 csfixed [@hiqsol]
    - [2447920] 2019-02-23 Moved config to root dir [@hiqsol]
    - [86ac5f4] 2019-02-23 Added whitelist phpunit config to enable code coverage [@hiqsol]
    - [78b4f99] 2019-02-21 Merge pull request #18 from bladeroot/domain-access-rights [@SilverFire]
    - [2e7bfa2] 2019-02-19 Merged master into 1.0 [@hiqsol]
    - [47c9b15] 2019-02-19 Still making Yii 2/3 compatible code [@hiqsol]
    - [d54ca59] 2019-02-19 Merged master into 1.0 [@hiqsol]
    - [e3ab8d9] 2019-02-19 Making Yii 2/3 compatible code [@hiqsol]
    - [5629d49] 2019-02-15 add domain.delete-agp, domain.set-nss, hdomain.set-dns [@BladeRoot]
    - [d1bf2b1] 2019-02-13 Fixed tests: access-reseller was added to mighty user [@hiqsol]
    - [a824fc3] 2019-02-11 Allow managers to access resellers by default [@SilverFire]
    - [6e4b6ad] 2019-02-11 csfixed [@SilverFire]
    - [d0a8b16] 2019-02-01 Added more client permissions: block, verify, tmp-pwd, note (#16) [@BladeRoot]
    - [61c9e89] 2019-01-17 Merge pull request #15 from MaksimGayduk/mg-request [@SilverFire]
    - [2476900] 2019-01-17 Added permission 'server.manage-settings' [maksim.gayduk@gmail.com]
    - [93d6fb7] 2019-01-17 Merge pull request #14 from MaksimGayduk/mg-request [@SilverFire]
    - [e8311e0] 2019-01-16 Added ability to change others allowed ips for superpowers user [maksim.gayduk@gmail.com]
    - [d8d06f1] 2018-12-28 Added DI config for `CheckAccessInterface` [@hiqsol]
    - [ae35a32] 2018-12-21 Removed access to finance (plan, prices) to admin/support [@hiqsol]
    - [532736e] 2018-12-21 rehideved [@hiqsol]
    - [3f8cae5] 2018-12-06 Merge pull request #13 from MaksimGayduk/mg-request [@SilverFire]
    - [cca0ebe] 2018-12-06 Denied manager and reseller access to stock; Added access to stock for accounter and owner [maksim.gayduk@gmail.com]
    - [32228d2] 2018-12-04 Merge pull request #12 from bladeroot/requisites-roles [@SilverFire]
    - [8a3abe0] 2018-12-04 add roles requisites.user, requisites.manager [@BladeRoot]
    - [b405008] 2018-12-03 Fixing code for Yii 3.0 [@hiqsol]
    - [4f4debc] 2018-12-03 Created Accounter Test [maksim.gayduk@gmail.com]
    - [cadf43e] 2018-12-03 Updated existing tests [maksim.gayduk@gmail.com]
    - [6ff03f2] 2018-12-03 Created role:accounter; Removed hub.manager from manager [maksim.gayduk@gmail.com]
    - [ef0e45d] 2018-12-03 Fixed DI config for Yii 3.0 [@hiqsol]
    - [4183f83] 2018-11-26 Fixing for Yii 3.0 [@hiqsol]
    - [e57ee01] 2018-11-26 rename rights client.force-read to client.list [@BladeRoot]
    - [475e7a2] 2018-11-26 Added permissions for junior-manager and hosting module (#9) [@BladeRoot]
    - [bce7a2b] 2018-11-21 Added "hub.sell" [@tafid]
    - [7493022] 2018-11-20 typo [@hiqsol]
    - [5f410fa] 2018-11-20 Allowed `move.read` for junior-manager [@hiqsol]
    - [10a6037] 2018-11-19 + generated items [@BladeRoot]
    - [6c9ad91] 2018-11-19 fix role name [@BladeRoot]
    - [b7a57ca] 2018-11-19 Added `junior-manager` role [@hiqsol]
    - [47ebd81] 2018-10-04 add rights force send foa [@BladeRoot]
    - [fc3dd6c] 2018-09-11 Added `hub` role and permissions [@tafid]
    - [bcc1a18] 2018-09-11 Merge pull request #5 from bladeroot/move-read-all [@SilverFire]
    - [7023bdb] 2018-09-11 Update CheckAccessTrait.php [@SilverFire]
    - [afa4ed0] 2018-09-07 finish commit [@BladeRoot]
    - [5f578be] 2018-09-07 add test [@BladeRoot]
    - [a26251e] 2018-09-07 add access move.read-all [@BladeRoot]
    - [1751d17] 2018-06-06 allowed `role:contact.user` to supports [@hiqsol]
    - [20b7383] 2018-06-06 added `part.sell` as superpower [@hiqsol]
    - [2a8bd95] 2018-05-30 Allowed contact.update for support to allow own contact editing [@SilverFire]
    - [c946c4c] 2018-05-03 removed `client.read` permission from clients [@hiqsol]
    - [cd7ae3b] 2018-04-30 added typed documents (acceptance, invoice) access to employee and client [@hiqsol]
    - [702d1d1] 2018-04-30 added access to documents to employee [@hiqsol]
    - [13b68f7] 2018-04-30 added `dns` permissions, roles and tests [@hiqsol]
    - [a7d1eb8] 2018-04-30 added `dns` permissions and roles [@hiqsol]
    - [b89edda] 2018-04-16 added `see-no-mans` permission [@hiqsol]
    - [3a66c95] 2018-04-11 allowed `deposit` to owner [@hiqsol]
    - [d482585] 2018-03-29 added `document.invoice` and `document.acceptance` permissions [@hiqsol]
    - [6f70569] 2018-03-13 dont try find user identity if no userId [@hiqsol]
    - [9881cf7] 2018-03-07 Update composer.json [@SilverFire]
    - [91c76fe] 2018-03-07 added `role:stock.manager` permissions to admin [@hiqsol]
    - [483ed40] 2018-03-06 added creating `deny` permissions at init [@hiqsol]
    - [e025183] 2018-03-06 added merging `common` config into console [@hiqsol]
    - [e21ded7] 2018-03-06 csfixed [@hiqsol]
    - [0215f83] 2018-03-06 allowed file upload for clients with adding `role:document.user` [@hiqsol]
    - [f3f2aa6] 2018-03-02 Fixed Yii 2.0.14 compatibility [@SilverFire]
    - [774ae2b] 2018-02-12 Refactored Initer to make it reusable [@SilverFire]
    - [d69705e] 2018-02-07 added `document.read` permission to client [@hiqsol]
    - [9a014af] 2018-01-24 added `client.read` to employee to be able to get into profile [@hiqsol]
    - [9daa814] 2018-01-04 updated items [@SilverFire]
    - [5ec36cf] 2018-01-04 Added impersonate role [@SilverFire]
    - [2816709] 2018-01-02 allowed `client.read` for clients [@hiqsol]
    - [e7c51a7] 2018-01-02 added contact CRUD permissions [@hiqsol]
    - [06019f4] 2017-12-29 added `testReseller()` to test reseller permissions [@hiqsol]
    - [e6766e5] 2017-12-29 added `have-goods` permission [@hiqsol]
    - [7ef8dd0] 2017-12-19 renamed `plan` permissions from tariff [@hiqsol]
    - [fe24d2d] 2017-12-19 added `certificate.create` permission [@hiqsol]
    - [091eee4] 2017-12-18 added tariff CRUD permissions [@hiqsol]
    - [72d8ecc] 2017-12-18 added certificate RBAC permissions [@hiqsol]
    - [c18b600] 2017-12-14 splitted stock permission to model, part and move [@hiqsol]
    - [57ab285] 2017-12-13 added `access-subclients` permission [@hiqsol]
    - [539d50b] 2017-12-13 removed `document.manage` permission [@hiqsol]
    - [9ef90c0] 2017-12-13 added and organized client CRUD permissions [@hiqsol]
    - [d962748] 2017-12-13 csfixed: renamed roles `object.user` <- object.client [@hiqsol]
    - [5062733] 2017-12-13 added account CRUD permissions [@hiqsol]
    - [85aca0f] 2017-12-13 added `testAdmin()` [@hiqsol]
    - [07b3c9b] 2017-12-13 fixed admin permissions: removed contact.force-verify [@hiqsol]
    - [d4ae4d5] 2017-12-13 csfixed [@hiqsol]
    - [2462cc5] 2017-12-13 added and organized server permissions [@hiqsol]
    - [0fa5859] 2017-12-13 organized domain permissions [@hiqsol]
    - [b3b9643] 2017-12-13 added and organized ticket CRUD permissions [@hiqsol]
    - [eb84ab5] 2017-12-13 added `role:nobody` that can `nothing` [@hiqsol]
    - [93ea305] 2017-12-12 added and organized domain CRUD permissions, changed employee permissions [@hiqsol]
    - [b0c8b34] 2017-12-11 added `bill.read` permission to clients [@hiqsol]
    - [96640cc] 2017-12-11 added bill and document CRUD permissions [@hiqsol]
    - [050bc87] 2017-12-11 added stock CRUD permissions [@hiqsol]
    - [27844fa] 2017-12-06 csfixed [@hiqsol]
    - [0cca085] 2017-12-06 added alpha/beta testing permissions and roles [@hiqsol]
    - [b21a895] 2017-11-01 added `document.generate/-all` permissions and `document.master` role [@hiqsol]
    - [0223735] 2017-08-24 Fixed SetterTrait::setAssignment() not to throw exception when permission does not exist [@SilverFire]
    - [b391463] 2017-08-04 refactored tests for simplicity [@hiqsol]
    - [003f37f] 2017-08-04 added sorting to `rbac/show` command [@hiqsol]
    - [98ec570] 2017-08-02 Fixed accidentally broken AuthManager::applyUserAssignments() [@SilverFire]
    - [b529012] 2017-08-02 added `role:unauthorized` with tests [@hiqsol]
    - [7219200] 2017-07-11 Added server.sell permission [@SilverFire]

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

## [0.1.1] - 2021-08-17

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
[0da034f]: https://github.com/hiqdev/hipanel-rbac/commit/0da034f
[a9a0e00]: https://github.com/hiqdev/hipanel-rbac/commit/a9a0e00
[ee78d33]: https://github.com/hiqdev/hipanel-rbac/commit/ee78d33
[2fe29a4]: https://github.com/hiqdev/hipanel-rbac/commit/2fe29a4
[a1297c7]: https://github.com/hiqdev/hipanel-rbac/commit/a1297c7
[121a1d0]: https://github.com/hiqdev/hipanel-rbac/commit/121a1d0
[949ab6e]: https://github.com/hiqdev/hipanel-rbac/commit/949ab6e
[eb52f33]: https://github.com/hiqdev/hipanel-rbac/commit/eb52f33
[046529c]: https://github.com/hiqdev/hipanel-rbac/commit/046529c
[ce70ac4]: https://github.com/hiqdev/hipanel-rbac/commit/ce70ac4
[4e8c0d6]: https://github.com/hiqdev/hipanel-rbac/commit/4e8c0d6
[cec47fa]: https://github.com/hiqdev/hipanel-rbac/commit/cec47fa
[e94c9fd]: https://github.com/hiqdev/hipanel-rbac/commit/e94c9fd
[b53a909]: https://github.com/hiqdev/hipanel-rbac/commit/b53a909
[a758a4b]: https://github.com/hiqdev/hipanel-rbac/commit/a758a4b
[343a66a]: https://github.com/hiqdev/hipanel-rbac/commit/343a66a
[f7b420b]: https://github.com/hiqdev/hipanel-rbac/commit/f7b420b
[521015b]: https://github.com/hiqdev/hipanel-rbac/commit/521015b
[d6b1c9c]: https://github.com/hiqdev/hipanel-rbac/commit/d6b1c9c
[9d56cee]: https://github.com/hiqdev/hipanel-rbac/commit/9d56cee
[05c632a]: https://github.com/hiqdev/hipanel-rbac/commit/05c632a
[139b602]: https://github.com/hiqdev/hipanel-rbac/commit/139b602
[1426628]: https://github.com/hiqdev/hipanel-rbac/commit/1426628
[6048a1e]: https://github.com/hiqdev/hipanel-rbac/commit/6048a1e
[33c55ee]: https://github.com/hiqdev/hipanel-rbac/commit/33c55ee
[aaa4532]: https://github.com/hiqdev/hipanel-rbac/commit/aaa4532
[e4d828e]: https://github.com/hiqdev/hipanel-rbac/commit/e4d828e
[9d5dda1]: https://github.com/hiqdev/hipanel-rbac/commit/9d5dda1
[abc9a38]: https://github.com/hiqdev/hipanel-rbac/commit/abc9a38
[b6c7fa9]: https://github.com/hiqdev/hipanel-rbac/commit/b6c7fa9
[a8a459b]: https://github.com/hiqdev/hipanel-rbac/commit/a8a459b
[f93281e]: https://github.com/hiqdev/hipanel-rbac/commit/f93281e
[ae8db89]: https://github.com/hiqdev/hipanel-rbac/commit/ae8db89
[58da18b]: https://github.com/hiqdev/hipanel-rbac/commit/58da18b
[b375556]: https://github.com/hiqdev/hipanel-rbac/commit/b375556
[02059ec]: https://github.com/hiqdev/hipanel-rbac/commit/02059ec
[87daee1]: https://github.com/hiqdev/hipanel-rbac/commit/87daee1
[54ac415]: https://github.com/hiqdev/hipanel-rbac/commit/54ac415
[ab25890]: https://github.com/hiqdev/hipanel-rbac/commit/ab25890
[3e5b550]: https://github.com/hiqdev/hipanel-rbac/commit/3e5b550
[3919a58]: https://github.com/hiqdev/hipanel-rbac/commit/3919a58
[e00ff4e]: https://github.com/hiqdev/hipanel-rbac/commit/e00ff4e
[5fafdbb]: https://github.com/hiqdev/hipanel-rbac/commit/5fafdbb
[e876528]: https://github.com/hiqdev/hipanel-rbac/commit/e876528
[153b333]: https://github.com/hiqdev/hipanel-rbac/commit/153b333
[922fb8b]: https://github.com/hiqdev/hipanel-rbac/commit/922fb8b
[f8ca27a]: https://github.com/hiqdev/hipanel-rbac/commit/f8ca27a
[8fb14f0]: https://github.com/hiqdev/hipanel-rbac/commit/8fb14f0
[53becc0]: https://github.com/hiqdev/hipanel-rbac/commit/53becc0
[868c755]: https://github.com/hiqdev/hipanel-rbac/commit/868c755
[376520e]: https://github.com/hiqdev/hipanel-rbac/commit/376520e
[0d8cc4f]: https://github.com/hiqdev/hipanel-rbac/commit/0d8cc4f
[7f8ffa3]: https://github.com/hiqdev/hipanel-rbac/commit/7f8ffa3
[d01d508]: https://github.com/hiqdev/hipanel-rbac/commit/d01d508
[0529e3d]: https://github.com/hiqdev/hipanel-rbac/commit/0529e3d
[01c53a7]: https://github.com/hiqdev/hipanel-rbac/commit/01c53a7
[5edacea]: https://github.com/hiqdev/hipanel-rbac/commit/5edacea
[e733226]: https://github.com/hiqdev/hipanel-rbac/commit/e733226
[63eee5f]: https://github.com/hiqdev/hipanel-rbac/commit/63eee5f
[2d41c6d]: https://github.com/hiqdev/hipanel-rbac/commit/2d41c6d
[16ff0f9]: https://github.com/hiqdev/hipanel-rbac/commit/16ff0f9
[ec3e843]: https://github.com/hiqdev/hipanel-rbac/commit/ec3e843
[8b0efdc]: https://github.com/hiqdev/hipanel-rbac/commit/8b0efdc
[f73b7cd]: https://github.com/hiqdev/hipanel-rbac/commit/f73b7cd
[879f460]: https://github.com/hiqdev/hipanel-rbac/commit/879f460
[d436f32]: https://github.com/hiqdev/hipanel-rbac/commit/d436f32
[f2153d2]: https://github.com/hiqdev/hipanel-rbac/commit/f2153d2
[7e787e9]: https://github.com/hiqdev/hipanel-rbac/commit/7e787e9
[6bf9328]: https://github.com/hiqdev/hipanel-rbac/commit/6bf9328
[2447920]: https://github.com/hiqdev/hipanel-rbac/commit/2447920
[86ac5f4]: https://github.com/hiqdev/hipanel-rbac/commit/86ac5f4
[78b4f99]: https://github.com/hiqdev/hipanel-rbac/commit/78b4f99
[2e7bfa2]: https://github.com/hiqdev/hipanel-rbac/commit/2e7bfa2
[47c9b15]: https://github.com/hiqdev/hipanel-rbac/commit/47c9b15
[d54ca59]: https://github.com/hiqdev/hipanel-rbac/commit/d54ca59
[e3ab8d9]: https://github.com/hiqdev/hipanel-rbac/commit/e3ab8d9
[5629d49]: https://github.com/hiqdev/hipanel-rbac/commit/5629d49
[d1bf2b1]: https://github.com/hiqdev/hipanel-rbac/commit/d1bf2b1
[a824fc3]: https://github.com/hiqdev/hipanel-rbac/commit/a824fc3
[6e4b6ad]: https://github.com/hiqdev/hipanel-rbac/commit/6e4b6ad
[d0a8b16]: https://github.com/hiqdev/hipanel-rbac/commit/d0a8b16
[61c9e89]: https://github.com/hiqdev/hipanel-rbac/commit/61c9e89
[2476900]: https://github.com/hiqdev/hipanel-rbac/commit/2476900
[93d6fb7]: https://github.com/hiqdev/hipanel-rbac/commit/93d6fb7
[e8311e0]: https://github.com/hiqdev/hipanel-rbac/commit/e8311e0
[d8d06f1]: https://github.com/hiqdev/hipanel-rbac/commit/d8d06f1
[ae35a32]: https://github.com/hiqdev/hipanel-rbac/commit/ae35a32
[532736e]: https://github.com/hiqdev/hipanel-rbac/commit/532736e
[3f8cae5]: https://github.com/hiqdev/hipanel-rbac/commit/3f8cae5
[cca0ebe]: https://github.com/hiqdev/hipanel-rbac/commit/cca0ebe
[32228d2]: https://github.com/hiqdev/hipanel-rbac/commit/32228d2
[8a3abe0]: https://github.com/hiqdev/hipanel-rbac/commit/8a3abe0
[b405008]: https://github.com/hiqdev/hipanel-rbac/commit/b405008
[4f4debc]: https://github.com/hiqdev/hipanel-rbac/commit/4f4debc
[cadf43e]: https://github.com/hiqdev/hipanel-rbac/commit/cadf43e
[6ff03f2]: https://github.com/hiqdev/hipanel-rbac/commit/6ff03f2
[ef0e45d]: https://github.com/hiqdev/hipanel-rbac/commit/ef0e45d
[4183f83]: https://github.com/hiqdev/hipanel-rbac/commit/4183f83
[e57ee01]: https://github.com/hiqdev/hipanel-rbac/commit/e57ee01
[475e7a2]: https://github.com/hiqdev/hipanel-rbac/commit/475e7a2
[bce7a2b]: https://github.com/hiqdev/hipanel-rbac/commit/bce7a2b
[7493022]: https://github.com/hiqdev/hipanel-rbac/commit/7493022
[5f410fa]: https://github.com/hiqdev/hipanel-rbac/commit/5f410fa
[10a6037]: https://github.com/hiqdev/hipanel-rbac/commit/10a6037
[6c9ad91]: https://github.com/hiqdev/hipanel-rbac/commit/6c9ad91
[b7a57ca]: https://github.com/hiqdev/hipanel-rbac/commit/b7a57ca
[47ebd81]: https://github.com/hiqdev/hipanel-rbac/commit/47ebd81
[fc3dd6c]: https://github.com/hiqdev/hipanel-rbac/commit/fc3dd6c
[bcc1a18]: https://github.com/hiqdev/hipanel-rbac/commit/bcc1a18
[7023bdb]: https://github.com/hiqdev/hipanel-rbac/commit/7023bdb
[afa4ed0]: https://github.com/hiqdev/hipanel-rbac/commit/afa4ed0
[5f578be]: https://github.com/hiqdev/hipanel-rbac/commit/5f578be
[a26251e]: https://github.com/hiqdev/hipanel-rbac/commit/a26251e
[1751d17]: https://github.com/hiqdev/hipanel-rbac/commit/1751d17
[20b7383]: https://github.com/hiqdev/hipanel-rbac/commit/20b7383
[2a8bd95]: https://github.com/hiqdev/hipanel-rbac/commit/2a8bd95
[c946c4c]: https://github.com/hiqdev/hipanel-rbac/commit/c946c4c
[cd7ae3b]: https://github.com/hiqdev/hipanel-rbac/commit/cd7ae3b
[702d1d1]: https://github.com/hiqdev/hipanel-rbac/commit/702d1d1
[13b68f7]: https://github.com/hiqdev/hipanel-rbac/commit/13b68f7
[a7d1eb8]: https://github.com/hiqdev/hipanel-rbac/commit/a7d1eb8
[b89edda]: https://github.com/hiqdev/hipanel-rbac/commit/b89edda
[3a66c95]: https://github.com/hiqdev/hipanel-rbac/commit/3a66c95
[d482585]: https://github.com/hiqdev/hipanel-rbac/commit/d482585
[6f70569]: https://github.com/hiqdev/hipanel-rbac/commit/6f70569
[9881cf7]: https://github.com/hiqdev/hipanel-rbac/commit/9881cf7
[91c76fe]: https://github.com/hiqdev/hipanel-rbac/commit/91c76fe
[483ed40]: https://github.com/hiqdev/hipanel-rbac/commit/483ed40
[e025183]: https://github.com/hiqdev/hipanel-rbac/commit/e025183
[e21ded7]: https://github.com/hiqdev/hipanel-rbac/commit/e21ded7
[0215f83]: https://github.com/hiqdev/hipanel-rbac/commit/0215f83
[f3f2aa6]: https://github.com/hiqdev/hipanel-rbac/commit/f3f2aa6
[774ae2b]: https://github.com/hiqdev/hipanel-rbac/commit/774ae2b
[d69705e]: https://github.com/hiqdev/hipanel-rbac/commit/d69705e
[9a014af]: https://github.com/hiqdev/hipanel-rbac/commit/9a014af
[9daa814]: https://github.com/hiqdev/hipanel-rbac/commit/9daa814
[5ec36cf]: https://github.com/hiqdev/hipanel-rbac/commit/5ec36cf
[2816709]: https://github.com/hiqdev/hipanel-rbac/commit/2816709
[e7c51a7]: https://github.com/hiqdev/hipanel-rbac/commit/e7c51a7
[06019f4]: https://github.com/hiqdev/hipanel-rbac/commit/06019f4
[e6766e5]: https://github.com/hiqdev/hipanel-rbac/commit/e6766e5
[7ef8dd0]: https://github.com/hiqdev/hipanel-rbac/commit/7ef8dd0
[fe24d2d]: https://github.com/hiqdev/hipanel-rbac/commit/fe24d2d
[091eee4]: https://github.com/hiqdev/hipanel-rbac/commit/091eee4
[72d8ecc]: https://github.com/hiqdev/hipanel-rbac/commit/72d8ecc
[c18b600]: https://github.com/hiqdev/hipanel-rbac/commit/c18b600
[57ab285]: https://github.com/hiqdev/hipanel-rbac/commit/57ab285
[539d50b]: https://github.com/hiqdev/hipanel-rbac/commit/539d50b
[9ef90c0]: https://github.com/hiqdev/hipanel-rbac/commit/9ef90c0
[d962748]: https://github.com/hiqdev/hipanel-rbac/commit/d962748
[5062733]: https://github.com/hiqdev/hipanel-rbac/commit/5062733
[85aca0f]: https://github.com/hiqdev/hipanel-rbac/commit/85aca0f
[07b3c9b]: https://github.com/hiqdev/hipanel-rbac/commit/07b3c9b
[d4ae4d5]: https://github.com/hiqdev/hipanel-rbac/commit/d4ae4d5
[2462cc5]: https://github.com/hiqdev/hipanel-rbac/commit/2462cc5
[0fa5859]: https://github.com/hiqdev/hipanel-rbac/commit/0fa5859
[b3b9643]: https://github.com/hiqdev/hipanel-rbac/commit/b3b9643
[eb84ab5]: https://github.com/hiqdev/hipanel-rbac/commit/eb84ab5
[93ea305]: https://github.com/hiqdev/hipanel-rbac/commit/93ea305
[b0c8b34]: https://github.com/hiqdev/hipanel-rbac/commit/b0c8b34
[96640cc]: https://github.com/hiqdev/hipanel-rbac/commit/96640cc
[050bc87]: https://github.com/hiqdev/hipanel-rbac/commit/050bc87
[27844fa]: https://github.com/hiqdev/hipanel-rbac/commit/27844fa
[0cca085]: https://github.com/hiqdev/hipanel-rbac/commit/0cca085
[b21a895]: https://github.com/hiqdev/hipanel-rbac/commit/b21a895
[0223735]: https://github.com/hiqdev/hipanel-rbac/commit/0223735
[b391463]: https://github.com/hiqdev/hipanel-rbac/commit/b391463
[003f37f]: https://github.com/hiqdev/hipanel-rbac/commit/003f37f
[98ec570]: https://github.com/hiqdev/hipanel-rbac/commit/98ec570
[b529012]: https://github.com/hiqdev/hipanel-rbac/commit/b529012
[7219200]: https://github.com/hiqdev/hipanel-rbac/commit/7219200
[Development started]: https://github.com/hiqdev/hipanel-rbac/compare/0.1.1...Development started
[0.1.2]: https://github.com/hiqdev/hipanel-rbac/compare/0.1.0...0.1.2
