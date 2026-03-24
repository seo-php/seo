<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface OfferShippingDetailsProperties extends StructuredValueProperties
{
    /**
     * @param ShippingDeliveryTimeProperties|ShippingDeliveryTimeProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryTime(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function depth(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function doesNotShip(mixed $value): static;

    /**
     * @param ShippingServiceProperties|ShippingServiceProperties[]|IdReference|IdReference[] $value
     */
    public function hasShippingService(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function height(mixed $value): static;

    /**
     * @param DefinedRegionProperties|DefinedRegionProperties[]|IdReference|IdReference[] $value
     */
    public function shippingDestination(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function shippingLabel(mixed $value): static;

    /**
     * @param DefinedRegionProperties|DefinedRegionProperties[]|IdReference|IdReference[] $value
     */
    public function shippingOrigin(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|ShippingRateSettingsProperties|ShippingRateSettingsProperties[]|IdReference|IdReference[] $value
     */
    public function shippingRate(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function shippingSettingsLink(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function transitTimeLabel(mixed $value): static;

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|IdReference|IdReference[] $value
     */
    public function validForMemberTier(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function weight(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function width(mixed $value): static;
}
