<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface InvoiceProperties extends IntangibleProperties
{
    /**
     * @param string|string[] $value
     */
    public function accountId(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function billingPeriod(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function broker(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|PhysicalActivityCategoryProperties|PhysicalActivityCategoryProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function category(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function confirmationNumber(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function customer(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function minimumPaymentDue(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function paymentDue(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function paymentDueDate(mixed $value): static;

    /**
     * @param PaymentMethodProperties|PaymentMethodProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function paymentMethod(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function paymentMethodId(mixed $value): static;

    /**
     * @param PaymentStatusTypeProperties|PaymentStatusTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function paymentStatus(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static;

    /**
     * @param OrderProperties|OrderProperties[]|IdReference|IdReference[] $value
     */
    public function referencesOrder(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function scheduledPaymentDate(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function totalPaymentDue(mixed $value): static;
}
