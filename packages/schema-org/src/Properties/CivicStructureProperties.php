<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface CivicStructureProperties extends PlaceProperties
{
    /**
     * @param string|string[] $value
     */
    public function openingHours(mixed $value): static;
}
