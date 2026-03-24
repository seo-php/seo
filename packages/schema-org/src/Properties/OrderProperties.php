<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface OrderProperties extends IntangibleProperties
{
    /**
     * @param OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function acceptedOffer(mixed $value): static;

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|IdReference|IdReference[] $value
     */
    public function billingAddress(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function broker(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function confirmationNumber(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function customer(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function discount(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function discountCode(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function discountCurrency(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isGift(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function merchant(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function orderDate(mixed $value): static;

    /**
     * @param ParcelDeliveryProperties|ParcelDeliveryProperties[]|IdReference|IdReference[] $value
     */
    public function orderDelivery(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function orderNumber(mixed $value): static;

    /**
     * @param OrderStatusProperties|OrderStatusProperties[]|IdReference|IdReference[] $value
     */
    public function orderStatus(mixed $value): static;

    /**
     * @param OrderItemProperties|OrderItemProperties[]|ProductProperties|ProductProperties[]|ServiceProperties|ServiceProperties[]|IdReference|IdReference[] $value
     */
    public function orderedItem(mixed $value): static;

    /**
     * @param InvoiceProperties|InvoiceProperties[]|IdReference|IdReference[] $value
     */
    public function partOfInvoice(mixed $value): static;

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
     * @param string|string[] $value
     */
    public function paymentUrl(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function seller(mixed $value): static;
}
