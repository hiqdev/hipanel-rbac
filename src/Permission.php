<?php

declare(strict_types=1);

namespace hipanel\rbac;

use yii\rbac\Permission as YiiPermission;

class Permission extends YiiPermission
{
    use HasInternal;
}
