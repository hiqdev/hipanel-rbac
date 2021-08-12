# HiPanel RBAC

**RBAC implementation for HiPanel**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hipanel-rbac/v/stable)](https://packagist.org/packages/hiqdev/hipanel-rbac)
[![Total Downloads](https://poser.pugx.org/hiqdev/hipanel-rbac/downloads)](https://packagist.org/packages/hiqdev/hipanel-rbac)
[![Build Status](https://img.shields.io/travis/hiqdev/hipanel-rbac.svg)](https://travis-ci.org/hiqdev/hipanel-rbac)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hipanel-rbac.svg)](https://scrutinizer-ci.com/g/hiqdev/hipanel-rbac/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hipanel-rbac.svg)](https://scrutinizer-ci.com/g/hiqdev/hipanel-rbac/)

[![Logo](https://raw.githubusercontent.com/hiqdev/hipanel-core/master/docs/logo.png)](https://hipanel.com/)

[HiPanel](http://hipanel.com/) is the next generation control panel for hosting, domains and more.

This package provides RBAC implementation for HiPanel:

- authorization data: roles and permissions
- helpers

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/hipanel-rbac"
```

or add

```json
"hiqdev/hipanel-rbac": "*"
```

to the require section of your composer.json.

## Usage

To add a role or permission you need to write it to `src/files/tree.php`.
After adding roles you have to generate description to it by command:

    ./vendor/bin/hidev rbac/reinit

After these actions all rules are saved, and you need to check it by unit tests.
Run `./vendor/bin/phpunit` and correct `CheckAccessTrait` to fix errors.

### TypeScript tree file

`js/index.ts` file will be generated with all rbac console commands (`reinit, init, generate-descriptions`).
Also you can generate it with `generate-js` command.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2016-2019, HiQDev (http://hiqdev.com/)
