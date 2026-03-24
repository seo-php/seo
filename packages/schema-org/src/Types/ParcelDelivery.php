<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DeliveryEventProperties;
use Seo\SchemaOrg\Properties\DeliveryMethodProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\OrderProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\ParcelDeliveryProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PostalAddressProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class ParcelDelivery extends Type implements ParcelDeliveryProperties
{
    protected function type(): string
    {
        return 'ParcelDelivery';
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
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function carrier(mixed $value): static
    {
        return $this->set('carrier', $value);
    }

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryAddress(mixed $value): static
    {
        return $this->set('deliveryAddress', $value);
    }

    /**
     * @param DeliveryEventProperties|DeliveryEventProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryStatus(mixed $value): static
    {
        return $this->set('deliveryStatus', $value);
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
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function expectedArrivalFrom(mixed $value): static
    {
        return $this->set('expectedArrivalFrom', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function expectedArrivalUntil(mixed $value): static
    {
        return $this->set('expectedArrivalUntil', $value);
    }

    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function hasDeliveryMethod(mixed $value): static
    {
        return $this->set('hasDeliveryMethod', $value);
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
     * @param ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function itemShipped(mixed $value): static
    {
        return $this->set('itemShipped', $value);
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
     * @param PostalAddressProperties|PostalAddressProperties[]|IdReference|IdReference[] $value
     */
    public function originAddress(mixed $value): static
    {
        return $this->set('originAddress', $value);
    }

    /**
     * @param OrderProperties|OrderProperties[]|IdReference|IdReference[] $value
     */
    public function partOfOrder(mixed $value): static
    {
        return $this->set('partOfOrder', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static
    {
        return $this->set('provider', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
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
    public function trackingNumber(mixed $value): static
    {
        return $this->set('trackingNumber', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function trackingUrl(mixed $value): static
    {
        return $this->set('trackingUrl', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
