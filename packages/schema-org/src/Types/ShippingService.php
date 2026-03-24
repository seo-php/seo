<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\FulfillmentTypeEnumerationProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MemberProgramTierProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\ServicePeriodProperties;
use Seo\SchemaOrg\Properties\ShippingConditionsProperties;
use Seo\SchemaOrg\Properties\ShippingServiceProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class ShippingService extends Type implements ShippingServiceProperties
{
    protected function type(): string
    {
        return 'ShippingService';
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
     * @param FulfillmentTypeEnumerationProperties|FulfillmentTypeEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function fulfillmentType(mixed $value): static
    {
        return $this->set('fulfillmentType', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|ServicePeriodProperties|ServicePeriodProperties[]|IdReference|IdReference[] $value
     */
    public function handlingTime(mixed $value): static
    {
        return $this->set('handlingTime', $value);
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
     * @param ShippingConditionsProperties|ShippingConditionsProperties[]|IdReference|IdReference[] $value
     */
    public function shippingConditions(mixed $value): static
    {
        return $this->set('shippingConditions', $value);
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
