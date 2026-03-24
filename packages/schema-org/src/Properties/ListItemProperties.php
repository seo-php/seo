<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ListItemProperties as ListItemProperties1;

interface ListItemProperties extends IntangibleProperties
{
    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function item(mixed $value): static;

    /**
     * @param ListItemProperties|ListItemProperties[]|IdReference|IdReference[] $value
     */
    public function nextItem(mixed $value): static;

    /**
     * @param int|int[]|string|string[] $value
     */
    public function position(mixed $value): static;

    /**
     * @param ListItemProperties|ListItemProperties[]|IdReference|IdReference[] $value
     */
    public function previousItem(mixed $value): static;
}
