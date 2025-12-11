<?php

declare(strict_types=1);

namespace hipanel\rbac;

trait HasInternal
{
    public bool $internal = false;

    public function isInternal(): bool
    {
        return $this->internal;
    }
}

