<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DeliveryTimeSettingsProperties extends StructuredValueProperties
{
    /**
     * @param ShippingDeliveryTimeProperties|ShippingDeliveryTimeProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryTime(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isUnlabelledFallback(mixed $value): static;

    /**
     * @param DefinedRegionProperties|DefinedRegionProperties[]|IdReference|IdReference[] $value
     */
    public function shippingDestination(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function transitTimeLabel(mixed $value): static;
}
