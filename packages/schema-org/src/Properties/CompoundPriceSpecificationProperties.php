<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface CompoundPriceSpecificationProperties extends PriceSpecificationProperties
{
    /**
     * @param UnitPriceSpecificationProperties|UnitPriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function priceComponent(mixed $value): static;

    /**
     * @param PriceTypeEnumerationProperties|PriceTypeEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function priceType(mixed $value): static;
}
