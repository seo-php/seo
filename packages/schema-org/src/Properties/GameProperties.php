<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface GameProperties extends CreativeWorkProperties
{
    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function characterAttribute(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function gameItem(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|PostalAddressProperties|PostalAddressProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function gameLocation(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfPlayers(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function quest(mixed $value): static;
}
