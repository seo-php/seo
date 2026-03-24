<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\MenuSectionProperties as MenuSectionProperties1;

interface MenuSectionProperties extends CreativeWorkProperties
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
