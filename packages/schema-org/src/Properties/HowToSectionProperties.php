<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HowToSectionProperties extends CreativeWorkProperties, ListItemProperties, ItemListProperties
{
    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|ItemListProperties|ItemListProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function steps(mixed $value): static;
}
