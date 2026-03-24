<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface ParcelDeliveryProperties extends IntangibleProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function carrier(mixed $value): static;

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryAddress(mixed $value): static;

    /**
     * @param DeliveryEventProperties|DeliveryEventProperties[]|IdReference|IdReference[] $value
     */
    public function deliveryStatus(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function expectedArrivalFrom(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function expectedArrivalUntil(mixed $value): static;

    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function hasDeliveryMethod(mixed $value): static;

    /**
     * @param ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function itemShipped(mixed $value): static;

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|IdReference|IdReference[] $value
     */
    public function originAddress(mixed $value): static;

    /**
     * @param OrderProperties|OrderProperties[]|IdReference|IdReference[] $value
     */
    public function partOfOrder(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function trackingNumber(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function trackingUrl(mixed $value): static;
}
