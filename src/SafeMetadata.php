<?php


namespace hipanel\rbac;


class SafeMetadata
{
    private array $metadata;

    public function __construct(array $metadata)
    {
        $this->metadata = $metadata;
    }

    public function getItemDescription(string $itemName): ?string
    {
        return $this->metadata[$itemName]['description'] ?? null;
    }
}
