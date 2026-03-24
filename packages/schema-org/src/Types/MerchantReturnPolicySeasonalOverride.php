<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MerchantReturnEnumerationProperties;
use Seo\SchemaOrg\Properties\MerchantReturnPolicySeasonalOverrideProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\RefundTypeEnumerationProperties;
use Seo\SchemaOrg\Properties\ReturnFeesEnumerationProperties;
use Seo\SchemaOrg\Properties\ReturnMethodEnumerationProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class MerchantReturnPolicySeasonalOverride extends Type implements MerchantReturnPolicySeasonalOverrideProperties
{
    protected function type(): string
    {
        return 'MerchantReturnPolicySeasonalOverride';
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
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static
    {
        return $this->set('endDate', $value);
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
     * @param DateTimeInterface|DateTimeInterface[]|int|int[] $value
     */
    public function merchantReturnDays(mixed $value): static
    {
        return $this->set('merchantReturnDays', $value);
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
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static
    {
        return $this->set('startDate', $value);
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
}
