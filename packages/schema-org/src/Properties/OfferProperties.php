<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\OfferProperties as OfferProperties1;

interface OfferProperties extends IntangibleProperties
{
    /**
     * @param LoanOrCreditProperties|LoanOrCreditProperties[]|PaymentMethodProperties|PaymentMethodProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function acceptedPaymentMethod(mixed $value): static;

    /**
     * @param OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function addOn(mixed $value): static;

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|IdReference|IdReference[] $value
     */
    public function additionalProperty(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function advanceBookingRequirement(mixed $value): static;

    /**
     * @param AggregateRatingProperties|AggregateRatingProperties[]|IdReference|IdReference[] $value
     */
    public function aggregateRating(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function areaServed(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function asin(mixed $value): static;

    /**
     * @param ItemAvailabilityProperties|ItemAvailabilityProperties[]|IdReference|IdReference[] $value
     */
    public function availability(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function availabilityEnds(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function availabilityStarts(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function availableAtOrFrom(mixed $value): static;

    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function availableDeliveryMethod(mixed $value): static;

    /**
     * @param BusinessFunctionProperties|BusinessFunctionProperties[]|IdReference|IdReference[] $value
     */
    public function businessFunction(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|PhysicalActivityCategoryProperties|PhysicalActivityCategoryProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function category(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function checkoutPageURLTemplate(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryLeadTime(mixed $value): static;

    /**
     * @param BusinessEntityTypeProperties|BusinessEntityTypeProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleCustomerType(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleDuration(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleQuantity(mixed $value): static;

    /**
     * @param GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function eligibleRegion(mixed $value): static;

    /**
     * @param PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleTransactionVolume(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function gtin(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function gtin12(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function gtin13(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function gtin14(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function gtin8(mixed $value): static;

    /**
     * @param AdultOrientedEnumerationProperties|AdultOrientedEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function hasAdultConsideration(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function hasGS1DigitalLink(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function hasMeasurement(mixed $value): static;

    /**
     * @param MerchantReturnPolicyProperties|MerchantReturnPolicyProperties[]|IdReference|IdReference[] $value
     */
    public function hasMerchantReturnPolicy(mixed $value): static;

    /**
     * @param TypeAndQuantityNodeProperties|TypeAndQuantityNodeProperties[]|IdReference|IdReference[] $value
     */
    public function includesObject(mixed $value): static;

    /**
     * @param GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function ineligibleRegion(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function inventoryLevel(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isFamilyFriendly(mixed $value): static;

    /**
     * @param OfferItemConditionProperties|OfferItemConditionProperties[]|IdReference|IdReference[] $value
     */
    public function itemCondition(mixed $value): static;

    /**
     * @param AggregateOfferProperties|AggregateOfferProperties[]|CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|MenuItemProperties|MenuItemProperties[]|ProductProperties|ProductProperties[]|ServiceProperties|ServiceProperties[]|TripProperties|TripProperties[]|IdReference|IdReference[] $value
     */
    public function itemOffered(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function leaseLength(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function mobileUrl(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function mpn(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function offeredBy(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function price(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function priceCurrency(mixed $value): static;

    /**
     * @param PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function priceSpecification(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function priceValidUntil(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function review(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function reviews(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function seller(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function serialNumber(mixed $value): static;

    /**
     * @param OfferShippingDetailsProperties|OfferShippingDetailsProperties[]|IdReference|IdReference[] $value
     */
    public function shippingDetails(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function sku(mixed $value): static;

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|IdReference|IdReference[] $value
     */
    public function validForMemberTier(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validFrom(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validThrough(mixed $value): static;

    /**
     * @param WarrantyPromiseProperties|WarrantyPromiseProperties[]|IdReference|IdReference[] $value
     */
    public function warranty(mixed $value): static;
}
