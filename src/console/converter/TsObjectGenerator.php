<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter;

use Laminas\Code\Generator\AbstractGenerator;

final class TsObjectGenerator extends AbstractGenerator
{
    private string $name;
    private array $items;

    public function __construct(string $name, array $items)
    {
        $this->name = $name;
        $this->items = $items;
    }

    public function generate(): string
    {
        return sprintf(<<<JS
export const %s%s= %s;
JS
        , $this->name, $this->indentation, json_encode($this->items));
    }
}
