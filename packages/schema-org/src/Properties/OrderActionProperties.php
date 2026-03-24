<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface OrderActionProperties extends TradeActionProperties
{
    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryMethod(mixed $value): static;
}
