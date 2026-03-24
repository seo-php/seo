<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ShippingConditionsProperties extends StructuredValueProperties
{
    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function depth(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function doesNotShip(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function height(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numItems(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function orderValue(mixed $value): static;

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function seasonalOverride(mixed $value): static;

    /**
     * @param DefinedRegionProperties|DefinedRegionProperties[]|IdReference|IdReference[] $value
     */
    public function shippingDestination(mixed $value): static;

    /**
     * @param DefinedRegionProperties|DefinedRegionProperties[]|IdReference|IdReference[] $value
     */
    public function shippingOrigin(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|ShippingRateSettingsProperties|ShippingRateSettingsProperties[]|IdReference|IdReference[] $value
     */
    public function shippingRate(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|ServicePeriodProperties|ServicePeriodProperties[]|IdReference|IdReference[] $value
     */
    public function transitTime(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function weight(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function width(mixed $value): static;
}
