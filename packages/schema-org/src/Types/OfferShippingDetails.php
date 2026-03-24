<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedRegionProperties;
use Seo\SchemaOrg\Properties\DistanceProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MassProperties;
use Seo\SchemaOrg\Properties\MemberProgramTierProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountProperties;
use Seo\SchemaOrg\Properties\OfferShippingDetailsProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\ShippingDeliveryTimeProperties;
use Seo\SchemaOrg\Properties\ShippingRateSettingsProperties;
use Seo\SchemaOrg\Properties\ShippingServiceProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class OfferShippingDetails extends Type implements OfferShippingDetailsProperties
{
    protected function type(): string
    {
        return 'OfferShippingDetails';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param ShippingDeliveryTimeProperties|ShippingDeliveryTimeProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryTime(mixed $value): static
    {
        return $this->set('deliveryTime', $value);
    }

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function depth(mixed $value): static
    {
        return $this->set('depth', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function doesNotShip(mixed $value): static
    {
        return $this->set('doesNotShip', $value);
    }

    /**
     * @param ShippingServiceProperties|ShippingServiceProperties[]|IdReference|IdReference[] $value
     */
    public function hasShippingService(mixed $value): static
    {
        return $this->set('hasShippingService', $value);
    }

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function height(mixed $value): static
    {
        return $this->set('height', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function identifier(mixed $value): static
    {
        return $this->set('identifier', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static
    {
        return $this->set('image', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param DefinedRegionProperties|DefinedRegionProperties[]|IdReference|IdReference[] $value
     */
    public function shippingDestination(mixed $value): static
    {
        return $this->set('shippingDestination', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function shippingLabel(mixed $value): static
    {
        return $this->set('shippingLabel', $value);
    }

    /**
     * @param DefinedRegionProperties|DefinedRegionProperties[]|IdReference|IdReference[] $value
     */
    public function shippingOrigin(mixed $value): static
    {
        return $this->set('shippingOrigin', $value);
    }

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|ShippingRateSettingsProperties|ShippingRateSettingsProperties[]|IdReference|IdReference[] $value
     */
    public function shippingRate(mixed $value): static
    {
        return $this->set('shippingRate', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function shippingSettingsLink(mixed $value): static
    {
        return $this->set('shippingSettingsLink', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function transitTimeLabel(mixed $value): static
    {
        return $this->set('transitTimeLabel', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|IdReference|IdReference[] $value
     */
    public function validForMemberTier(mixed $value): static
    {
        return $this->set('validForMemberTier', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function weight(mixed $value): static
    {
        return $this->set('weight', $value);
    }

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function width(mixed $value): static
    {
        return $this->set('width', $value);
    }
}
