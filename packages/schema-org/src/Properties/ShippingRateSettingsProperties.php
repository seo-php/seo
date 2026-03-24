<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ShippingRateSettingsProperties as ShippingRateSettingsProperties1;

interface ShippingRateSettingsProperties extends StructuredValueProperties
{
    /**
     * @param bool|bool[] $value
     */
    public function doesNotShip(mixed $value): static;

    /**
     * @param DeliveryChargeSpecificationProperties|DeliveryChargeSpecificationProperties[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function freeShippingThreshold(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isUnlabelledFallback(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function orderPercentage(mixed $value): static;

    /**
     * @param DefinedRegionProperties|DefinedRegionProperties[]|IdReference|IdReference[] $value
     */
    public function shippingDestination(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function shippingLabel(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|ShippingRateSettingsProperties|ShippingRateSettingsProperties[]|IdReference|IdReference[] $value
     */
    public function shippingRate(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function weightPercentage(mixed $value): static;
}
