<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ItemListProperties extends IntangibleProperties
{
    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function aggregateElement(mixed $value): static;

    /**
     * @param ListItemProperties|ListItemProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function itemListElement(mixed $value): static;

    /**
     * @param ItemListOrderTypeProperties|ItemListOrderTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function itemListOrder(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function numberOfItems(mixed $value): static;
}
