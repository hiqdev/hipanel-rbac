<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter;

use Laminas\Code\Generator\AbstractGenerator;
use yii\helpers\Inflector;

final class TsEnumGenerator extends AbstractGenerator
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
            $key = ucwords(Inflector::id2camel(str_replace([':', '.'], '-', $item)));
            $res[] = sprintf('%s"%s" = "%s",', $this->indentation, $key, $item);
        }

        return implode(self::LINE_FEED, $res);
    }
}
