<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TrackActionProperties extends FindActionProperties
{
    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryMethod(mixed $value): static;
}
