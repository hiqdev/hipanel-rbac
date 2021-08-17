<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter\formatter;

use Laminas\Code\Generator\AbstractGenerator;

interface EnumRowItemBuilderInterface
{
    /**
     * Grabbed from AbstractGenerator
     * @see AbstractGenerator
     */
    const LINE_FEED = "\n";
    const IDENTATION = '    ';

    public function build(string $value): string;
}
