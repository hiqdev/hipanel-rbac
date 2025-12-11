<?php

declare(strict_types=1);

namespace hipanel\rbac;

use yii\rbac\Role as YiiRole;

class Role extends YiiRole implements RbacItem
{
    use HasInternal;

    public function isInternal(): bool
    {
        $isInternal = false;
        foreach ($this->data['children'] ?? [] as $children) {
            $isInternal = $children['internal'] ?? false;
        }

        return $isInternal;
    }
}
