<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Generator;

final readonly class Property
{
    /**
     * @param list<string> $typeIds
     * @param list<string> $phpTypes
     */
    public function __construct(
        public string $id,
        public string $name,
        public string $description,
        public array $typeIds,
        public array $phpTypes,
    ) {}
}
