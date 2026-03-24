<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AdministrativeAreaProperties;
use Seo\SchemaOrg\Properties\AggregateOfferProperties;
use Seo\SchemaOrg\Properties\BusinessEntityTypeProperties;
use Seo\SchemaOrg\Properties\BusinessFunctionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DeliveryMethodProperties;
use Seo\SchemaOrg\Properties\DemandProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GeoShapeProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\ItemAvailabilityProperties;
use Seo\SchemaOrg\Properties\LoanOrCreditProperties;
use Seo\SchemaOrg\Properties\MenuItemProperties;
use Seo\SchemaOrg\Properties\OfferItemConditionProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PaymentMethodProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\PriceSpecificationProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\ServiceProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\TripProperties;
use Seo\SchemaOrg\Properties\TypeAndQuantityNodeProperties;
use Seo\SchemaOrg\Properties\WarrantyPromiseProperties;
use Seo\SchemaOrg\Type;

final class Demand extends Type implements DemandProperties
{
    protected function type(): string
    {
        return 'Demand';
    }

    /**
     * @param LoanOrCreditProperties|LoanOrCreditProperties[]|PaymentMethodProperties|PaymentMethodProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function acceptedPaymentMethod(mixed $value): static
    {
        return $this->set('acceptedPaymentMethod', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function advanceBookingRequirement(mixed $value): static
    {
        return $this->set('advanceBookingRequirement', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function areaServed(mixed $value): static
    {
        return $this->set('areaServed', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function asin(mixed $value): static
    {
        return $this->set('asin', $value);
    }

    /**
     * @param ItemAvailabilityProperties|ItemAvailabilityProperties[]|IdReference|IdReference[] $value
     */
    public function availability(mixed $value): static
    {
        return $this->set('availability', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function availabilityEnds(mixed $value): static
    {
        return $this->set('availabilityEnds', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function availabilityStarts(mixed $value): static
    {
        return $this->set('availabilityStarts', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function availableAtOrFrom(mixed $value): static
    {
        return $this->set('availableAtOrFrom', $value);
    }

    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function availableDeliveryMethod(mixed $value): static
    {
        return $this->set('availableDeliveryMethod', $value);
    }

    /**
     * @param BusinessFunctionProperties|BusinessFunctionProperties[]|IdReference|IdReference[] $value
     */
    public function businessFunction(mixed $value): static
    {
        return $this->set('businessFunction', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryLeadTime(mixed $value): static
    {
        return $this->set('deliveryLeadTime', $value);
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
     * @param BusinessEntityTypeProperties|BusinessEntityTypeProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleCustomerType(mixed $value): static
    {
        return $this->set('eligibleCustomerType', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleDuration(mixed $value): static
    {
        return $this->set('eligibleDuration', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleQuantity(mixed $value): static
    {
        return $this->set('eligibleQuantity', $value);
    }

    /**
     * @param GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function eligibleRegion(mixed $value): static
    {
        return $this->set('eligibleRegion', $value);
    }

    /**
     * @param PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleTransactionVolume(mixed $value): static
    {
        return $this->set('eligibleTransactionVolume', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function gtin(mixed $value): static
    {
        return $this->set('gtin', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function gtin12(mixed $value): static
    {
        return $this->set('gtin12', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function gtin13(mixed $value): static
    {
        return $this->set('gtin13', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function gtin14(mixed $value): static
    {
        return $this->set('gtin14', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function gtin8(mixed $value): static
    {
        return $this->set('gtin8', $value);
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
     * @param TypeAndQuantityNodeProperties|TypeAndQuantityNodeProperties[]|IdReference|IdReference[] $value
     */
    public function includesObject(mixed $value): static
    {
        return $this->set('includesObject', $value);
    }

    /**
     * @param GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function ineligibleRegion(mixed $value): static
    {
        return $this->set('ineligibleRegion', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function inventoryLevel(mixed $value): static
    {
        return $this->set('inventoryLevel', $value);
    }

    /**
     * @param OfferItemConditionProperties|OfferItemConditionProperties[]|IdReference|IdReference[] $value
     */
    public function itemCondition(mixed $value): static
    {
        return $this->set('itemCondition', $value);
    }

    /**
     * @param AggregateOfferProperties|AggregateOfferProperties[]|CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|MenuItemProperties|MenuItemProperties[]|ProductProperties|ProductProperties[]|ServiceProperties|ServiceProperties[]|TripProperties|TripProperties[]|IdReference|IdReference[] $value
     */
    public function itemOffered(mixed $value): static
    {
        return $this->set('itemOffered', $value);
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
    public function mpn(mixed $value): static
    {
        return $this->set('mpn', $value);
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
     * @param PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function priceSpecification(mixed $value): static
    {
        return $this->set('priceSpecification', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function seller(mixed $value): static
    {
        return $this->set('seller', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function serialNumber(mixed $value): static
    {
        return $this->set('serialNumber', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sku(mixed $value): static
    {
        return $this->set('sku', $value);
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
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validFrom(mixed $value): static
    {
        return $this->set('validFrom', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validThrough(mixed $value): static
    {
        return $this->set('validThrough', $value);
    }

    /**
     * @param WarrantyPromiseProperties|WarrantyPromiseProperties[]|IdReference|IdReference[] $value
     */
    public function warranty(mixed $value): static
    {
        return $this->set('warranty', $value);
    }
}
