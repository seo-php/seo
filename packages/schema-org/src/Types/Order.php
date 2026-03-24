<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\InvoiceProperties;
use Seo\SchemaOrg\Properties\OfferProperties;
use Seo\SchemaOrg\Properties\OrderItemProperties;
use Seo\SchemaOrg\Properties\OrderProperties;
use Seo\SchemaOrg\Properties\OrderStatusProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\ParcelDeliveryProperties;
use Seo\SchemaOrg\Properties\PaymentMethodProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PostalAddressProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\ServiceProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class Order extends Type implements OrderProperties
{
    protected function type(): string
    {
        return 'Order';
    }

    /**
     * @param OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function acceptedOffer(mixed $value): static
    {
        return $this->set('acceptedOffer', $value);
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
     * @param PostalAddressProperties|PostalAddressProperties[]|IdReference|IdReference[] $value
     */
    public function billingAddress(mixed $value): static
    {
        return $this->set('billingAddress', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function broker(mixed $value): static
    {
        return $this->set('broker', $value);
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
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function discount(mixed $value): static
    {
        return $this->set('discount', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function discountCode(mixed $value): static
    {
        return $this->set('discountCode', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function discountCurrency(mixed $value): static
    {
        return $this->set('discountCurrency', $value);
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
    public function isGift(mixed $value): static
    {
        return $this->set('isGift', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function merchant(mixed $value): static
    {
        return $this->set('merchant', $value);
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
    public function orderDate(mixed $value): static
    {
        return $this->set('orderDate', $value);
    }

    /**
     * @param ParcelDeliveryProperties|ParcelDeliveryProperties[]|IdReference|IdReference[] $value
     */
    public function orderDelivery(mixed $value): static
    {
        return $this->set('orderDelivery', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function orderNumber(mixed $value): static
    {
        return $this->set('orderNumber', $value);
    }

    /**
     * @param OrderStatusProperties|OrderStatusProperties[]|IdReference|IdReference[] $value
     */
    public function orderStatus(mixed $value): static
    {
        return $this->set('orderStatus', $value);
    }

    /**
     * @param OrderItemProperties|OrderItemProperties[]|ProductProperties|ProductProperties[]|ServiceProperties|ServiceProperties[]|IdReference|IdReference[] $value
     */
    public function orderedItem(mixed $value): static
    {
        return $this->set('orderedItem', $value);
    }

    /**
     * @param InvoiceProperties|InvoiceProperties[]|IdReference|IdReference[] $value
     */
    public function partOfInvoice(mixed $value): static
    {
        return $this->set('partOfInvoice', $value);
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
     * @param string|string[] $value
     */
    public function paymentUrl(mixed $value): static
    {
        return $this->set('paymentUrl', $value);
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
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function seller(mixed $value): static
    {
        return $this->set('seller', $value);
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
