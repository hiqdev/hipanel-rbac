<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter\formatter;

class EnumRowItemBuilder extends DefaultEnumRowItemBuilder
{
    public function build(string $value): string
    {
        [,$newValue] = explode(':', $value);
        $key = $this->toCamelCase($newValue);

        return $this->renderKeyValue($key, $value);
    }
}
