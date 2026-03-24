<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HowToSupplyProperties extends HowToItemProperties
{
    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function estimatedCost(mixed $value): static;
}
