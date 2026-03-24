<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MenuProperties extends CreativeWorkProperties
{
    /**
     * @param MenuItemProperties|MenuItemProperties[]|IdReference|IdReference[] $value
     */
    public function hasMenuItem(mixed $value): static;

    /**
     * @param MenuSectionProperties|MenuSectionProperties[]|IdReference|IdReference[] $value
     */
    public function hasMenuSection(mixed $value): static;
}
