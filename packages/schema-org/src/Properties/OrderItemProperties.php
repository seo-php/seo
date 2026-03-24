<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\OrderItemProperties as OrderItemProperties1;

interface OrderItemProperties extends IntangibleProperties
{
    /**
     * @param ParcelDeliveryProperties|ParcelDeliveryProperties[]|IdReference|IdReference[] $value
     */
    public function orderDelivery(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function orderItemNumber(mixed $value): static;

    /**
     * @param OrderStatusProperties|OrderStatusProperties[]|IdReference|IdReference[] $value
     */
    public function orderItemStatus(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function orderQuantity(mixed $value): static;

    /**
     * @param OrderItemProperties|OrderItemProperties[]|ProductProperties|ProductProperties[]|ServiceProperties|ServiceProperties[]|IdReference|IdReference[] $value
     */
    public function orderedItem(mixed $value): static;
}
