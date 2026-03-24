<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Generator;

final readonly class Type
{
    /**
     * @param array<string> $parents
     */
    public function __construct(
        public string $id,
        public string $name,
        public string $className,
        public string $description,
        public array $parents,
    ) {}
}
