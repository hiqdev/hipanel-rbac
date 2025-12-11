<?php

declare(strict_types=1);

namespace hipanel\rbac;

use yii\rbac\Role as YiiRole;

class Role extends YiiRole
{
    use HasInternal;
}
