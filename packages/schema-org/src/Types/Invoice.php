<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CategoryCodeProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DurationProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\InvoiceProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountProperties;
use Seo\SchemaOrg\Properties\OrderProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PaymentMethodProperties;
use Seo\SchemaOrg\Properties\PaymentStatusTypeProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PhysicalActivityCategoryProperties;
use Seo\SchemaOrg\Properties\PriceSpecificationProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ThingProperties;
use Seo\SchemaOrg\Type;

final class Invoice extends Type implements InvoiceProperties
{
    protected function type(): string
    {
        return 'Invoice';
    }

    /**
     * @param string|string[] $value
     */
    public function accountId(mixed $value): static
    {
        return $this->set('accountId', $value);
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
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function billingPeriod(mixed $value): static
    {
        return $this->set('billingPeriod', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function broker(mixed $value): static
    {
        return $this->set('broker', $value);
    }

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|PhysicalActivityCategoryProperties|PhysicalActivityCategoryProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function category(mixed $value): static
    {
        return $this->set('category', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function confirmationNumber(mixed $value): static
    {
        return $this->set('confirmationNumber', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function customer(mixed $value): static
    {
        return $this->set('customer', $value);
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
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function minimumPaymentDue(mixed $value): static
    {
        return $this->set('minimumPaymentDue', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function paymentDue(mixed $value): static
    {
        return $this->set('paymentDue', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function paymentDueDate(mixed $value): static
    {
        return $this->set('paymentDueDate', $value);
    }

    /**
     * @param PaymentMethodProperties|PaymentMethodProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function paymentMethod(mixed $value): static
    {
        return $this->set('paymentMethod', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function paymentMethodId(mixed $value): static
    {
        return $this->set('paymentMethodId', $value);
    }

    /**
     * @param PaymentStatusTypeProperties|PaymentStatusTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function paymentStatus(mixed $value): static
    {
        return $this->set('paymentStatus', $value);
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
     * @param OrderProperties|OrderProperties[]|IdReference|IdReference[] $value
     */
    public function referencesOrder(mixed $value): static
    {
        return $this->set('referencesOrder', $value);
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
    public function scheduledPaymentDate(mixed $value): static
    {
        return $this->set('scheduledPaymentDate', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function totalPaymentDue(mixed $value): static
    {
        return $this->set('totalPaymentDue', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
