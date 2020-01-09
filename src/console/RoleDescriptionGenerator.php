<?php

namespace hipanel\rbac\console;

final class RoleDescriptionGenerator
{
    public function __invoke(string $roleName): string
    {
        return 'The role is generally assigned to ____';
    }
}
