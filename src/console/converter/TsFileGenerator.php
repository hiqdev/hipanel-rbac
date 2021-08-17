<?php
declare(strict_types=1);

namespace hipanel\rbac\console\converter;

use Laminas\Code\Generator\AbstractGenerator;

final class TsFileGenerator extends AbstractGenerator
{
    private array $parts;

    public function __construct(array $parts)
    {
        $this->parts = $parts;
    }

    public function generate(): string
    {
        return implode(self::LINE_FEED . self::LINE_FEED, $this->parts) . self::LINE_FEED;
    }

    public static function fromParts(string ...$parts): string
    {
        $self = new self($parts);

        return $self->generate();
    }
}
