<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface MerchantReturnPolicyProperties extends IntangibleProperties
{
    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|IdReference|IdReference[] $value
     */
    public function additionalProperty(mixed $value): static;

    /**
     * @param CountryProperties|CountryProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function applicableCountry(mixed $value): static;

    /**
     * @param ReturnFeesEnumerationProperties|ReturnFeesEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function customerRemorseReturnFees(mixed $value): static;

    /**
     * @param ReturnLabelSourceEnumerationProperties|ReturnLabelSourceEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function customerRemorseReturnLabelSource(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function customerRemorseReturnShippingFeesAmount(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function inStoreReturnsOffered(mixed $value): static;

    /**
     * @param OfferItemConditionProperties|OfferItemConditionProperties[]|IdReference|IdReference[] $value
     */
    public function itemCondition(mixed $value): static;

    /**
     * @param ReturnFeesEnumerationProperties|ReturnFeesEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function itemDefectReturnFees(mixed $value): static;

    /**
     * @param ReturnLabelSourceEnumerationProperties|ReturnLabelSourceEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function itemDefectReturnLabelSource(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function itemDefectReturnShippingFeesAmount(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[]|int|int[] $value
     */
    public function merchantReturnDays(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function merchantReturnLink(mixed $value): static;

    /**
     * @param RefundTypeEnumerationProperties|RefundTypeEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function refundType(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function restockingFee(mixed $value): static;

    /**
     * @param ReturnFeesEnumerationProperties|ReturnFeesEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnFees(mixed $value): static;

    /**
     * @param ReturnLabelSourceEnumerationProperties|ReturnLabelSourceEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnLabelSource(mixed $value): static;

    /**
     * @param ReturnMethodEnumerationProperties|ReturnMethodEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnMethod(mixed $value): static;

    /**
     * @param MerchantReturnEnumerationProperties|MerchantReturnEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnPolicyCategory(mixed $value): static;

    /**
     * @param CountryProperties|CountryProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function returnPolicyCountry(mixed $value): static;

    /**
     * @param MerchantReturnPolicySeasonalOverrideProperties|MerchantReturnPolicySeasonalOverrideProperties[]|IdReference|IdReference[] $value
     */
    public function returnPolicySeasonalOverride(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function returnShippingFeesAmount(mixed $value): static;

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|IdReference|IdReference[] $value
     */
    public function validForMemberTier(mixed $value): static;
}
