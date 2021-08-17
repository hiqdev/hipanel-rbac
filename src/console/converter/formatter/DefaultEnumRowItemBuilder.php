<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter\formatter;

use yii\helpers\Inflector;

class DefaultEnumRowItemBuilder implements EnumRowItemBuilderInterface
{
    public function build(string $value): string
    {
        $key = $this->toCamelCase($value);

        return $this->renderKeyValue($key, $value);
    }

    protected function renderKeyValue(string $key, string $value): string
    {
        return sprintf('%s"%s" = "%s",', self::IDENTATION, $key, $value);
    }

    protected function toCamelCase(string $value): string
    {
        return ucwords(Inflector::id2camel(str_replace([':', '.'], '-', $value)));
    }
}
