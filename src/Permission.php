<?php

declare(strict_types=1);

namespace hipanel\rbac;

use yii\rbac\Permission as YiiPermission;

class Permission extends YiiPermission implements RbacItem
{
    public function isInternal(): bool
    {
        // TODO: Implement isInternal() method.
    }
}
