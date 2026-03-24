<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface MonetaryAmountDistributionProperties extends QuantitativeValueDistributionProperties
{
    /**
     * @param string|string[] $value
     */
    public function currency(mixed $value): static;
}
