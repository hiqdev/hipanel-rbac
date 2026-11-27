<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter\formatter;

class EnumRowItemBuilder extends DefaultEnumRowItemBuilder
{
    public function build(string $value): string
    {
        $parts = explode(':', $value);
        if (!isset($parts[1])) {
            return parent::build($value);
        }
        $key = $this->toCamelCase($parts[1]);

        return $this->renderKeyValue($key, $value);
    }
}
