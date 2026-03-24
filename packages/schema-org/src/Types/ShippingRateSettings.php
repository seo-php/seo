<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedRegionProperties;
use Seo\SchemaOrg\Properties\DeliveryChargeSpecificationProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\ShippingRateSettingsProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class ShippingRateSettings extends Type implements ShippingRateSettingsProperties
{
    protected function type(): string
    {
        return 'ShippingRateSettings';
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
     * @param DeliveryChargeSpecificationProperties|DeliveryChargeSpecificationProperties[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function freeShippingThreshold(mixed $value): static
    {
        return $this->set('freeShippingThreshold', $value);
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
     * @param bool|bool[] $value
     */
    public function isUnlabelledFallback(mixed $value): static
    {
        return $this->set('isUnlabelledFallback', $value);
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
     * @param float|float[]|int|int[] $value
     */
    public function orderPercentage(mixed $value): static
    {
        return $this->set('orderPercentage', $value);
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
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|ShippingRateSettingsProperties|ShippingRateSettingsProperties[]|IdReference|IdReference[] $value
     */
    public function shippingRate(mixed $value): static
    {
        return $this->set('shippingRate', $value);
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
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function weightPercentage(mixed $value): static
    {
        return $this->set('weightPercentage', $value);
    }
}
