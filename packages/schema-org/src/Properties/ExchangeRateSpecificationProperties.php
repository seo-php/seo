<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ExchangeRateSpecificationProperties extends StructuredValueProperties
{
    /**
     * @param string|string[] $value
     */
    public function currency(mixed $value): static;

    /**
     * @param UnitPriceSpecificationProperties|UnitPriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function currentExchangeRate(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function exchangeRateSpread(mixed $value): static;
}
