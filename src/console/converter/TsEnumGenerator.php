<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter;

use hipanel\rbac\console\converter\formatter\DefaultEnumRowItemBuilder;
use hipanel\rbac\console\converter\formatter\EnumRowItemBuilderInterface;
use Laminas\Code\Generator\AbstractGenerator;

final class TsEnumGenerator extends AbstractGenerator
{
    private string $name;
    private array $items;

    private EnumRowItemBuilderInterface $rowFormatter;

    public function __construct(string $name, array $items)
    {
        $this->name = $name;
        $this->items = $items;

        $this->rowFormatter = new DefaultEnumRowItemBuilder();
    }

    public function withRowFormatter(EnumRowItemBuilderInterface $formatter): self
    {
        $this->rowFormatter = $formatter;

        return $this;
    }

    public function generate(): string
    {
        return sprintf(<<<JS
export enum %s%s{
%s
};
JS
        , $this->name, $this->indentation, $this->generateItemRows());
    }

    private function generateItemRows(): string
    {
        $res = [];
        foreach ($this->items as $item) {
            $res[] = $this->rowFormatter->build($item);
        }

        return implode(self::LINE_FEED, $res);
    }
}
