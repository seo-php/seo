<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TradeActionProperties extends ActionProperties
{
    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function price(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function priceCurrency(mixed $value): static;

    /**
     * @param PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function priceSpecification(mixed $value): static;
}
