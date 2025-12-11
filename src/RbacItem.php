<?php

declare(strict_types=1);

namespace hipanel\rbac;

interface RbacItem
{
    public function isInternal(): bool;
}
