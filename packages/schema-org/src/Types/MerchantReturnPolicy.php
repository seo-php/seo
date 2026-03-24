<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CountryProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MemberProgramTierProperties;
use Seo\SchemaOrg\Properties\MerchantReturnEnumerationProperties;
use Seo\SchemaOrg\Properties\MerchantReturnPolicyProperties;
use Seo\SchemaOrg\Properties\MerchantReturnPolicySeasonalOverrideProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountProperties;
use Seo\SchemaOrg\Properties\OfferItemConditionProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\RefundTypeEnumerationProperties;
use Seo\SchemaOrg\Properties\ReturnFeesEnumerationProperties;
use Seo\SchemaOrg\Properties\ReturnLabelSourceEnumerationProperties;
use Seo\SchemaOrg\Properties\ReturnMethodEnumerationProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class MerchantReturnPolicy extends Type implements MerchantReturnPolicyProperties
{
    protected function type(): string
    {
        return 'MerchantReturnPolicy';
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|IdReference|IdReference[] $value
     */
    public function additionalProperty(mixed $value): static
    {
        return $this->set('additionalProperty', $value);
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
     * @param CountryProperties|CountryProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function applicableCountry(mixed $value): static
    {
        return $this->set('applicableCountry', $value);
    }

    /**
     * @param ReturnFeesEnumerationProperties|ReturnFeesEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function customerRemorseReturnFees(mixed $value): static
    {
        return $this->set('customerRemorseReturnFees', $value);
    }

    /**
     * @param ReturnLabelSourceEnumerationProperties|ReturnLabelSourceEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function customerRemorseReturnLabelSource(mixed $value): static
    {
        return $this->set('customerRemorseReturnLabelSource', $value);
    }

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function customerRemorseReturnShippingFeesAmount(mixed $value): static
    {
        return $this->set('customerRemorseReturnShippingFeesAmount', $value);
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
    public function inStoreReturnsOffered(mixed $value): static
    {
        return $this->set('inStoreReturnsOffered', $value);
    }

    /**
     * @param OfferItemConditionProperties|OfferItemConditionProperties[]|IdReference|IdReference[] $value
     */
    public function itemCondition(mixed $value): static
    {
        return $this->set('itemCondition', $value);
    }

    /**
     * @param ReturnFeesEnumerationProperties|ReturnFeesEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function itemDefectReturnFees(mixed $value): static
    {
        return $this->set('itemDefectReturnFees', $value);
    }

    /**
     * @param ReturnLabelSourceEnumerationProperties|ReturnLabelSourceEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function itemDefectReturnLabelSource(mixed $value): static
    {
        return $this->set('itemDefectReturnLabelSource', $value);
    }

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function itemDefectReturnShippingFeesAmount(mixed $value): static
    {
        return $this->set('itemDefectReturnShippingFeesAmount', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[]|int|int[] $value
     */
    public function merchantReturnDays(mixed $value): static
    {
        return $this->set('merchantReturnDays', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function merchantReturnLink(mixed $value): static
    {
        return $this->set('merchantReturnLink', $value);
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
     * @param RefundTypeEnumerationProperties|RefundTypeEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function refundType(mixed $value): static
    {
        return $this->set('refundType', $value);
    }

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function restockingFee(mixed $value): static
    {
        return $this->set('restockingFee', $value);
    }

    /**
     * @param ReturnFeesEnumerationProperties|ReturnFeesEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnFees(mixed $value): static
    {
        return $this->set('returnFees', $value);
    }

    /**
     * @param ReturnLabelSourceEnumerationProperties|ReturnLabelSourceEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnLabelSource(mixed $value): static
    {
        return $this->set('returnLabelSource', $value);
    }

    /**
     * @param ReturnMethodEnumerationProperties|ReturnMethodEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnMethod(mixed $value): static
    {
        return $this->set('returnMethod', $value);
    }

    /**
     * @param MerchantReturnEnumerationProperties|MerchantReturnEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnPolicyCategory(mixed $value): static
    {
        return $this->set('returnPolicyCategory', $value);
    }

    /**
     * @param CountryProperties|CountryProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function returnPolicyCountry(mixed $value): static
    {
        return $this->set('returnPolicyCountry', $value);
    }

    /**
     * @param MerchantReturnPolicySeasonalOverrideProperties|MerchantReturnPolicySeasonalOverrideProperties[]|IdReference|IdReference[] $value
     */
    public function returnPolicySeasonalOverride(mixed $value): static
    {
        return $this->set('returnPolicySeasonalOverride', $value);
    }

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function returnShippingFeesAmount(mixed $value): static
    {
        return $this->set('returnShippingFeesAmount', $value);
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
}
