<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PaymentChargeSpecificationProperties extends PriceSpecificationProperties
{
    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function appliesToDeliveryMethod(mixed $value): static;

    /**
     * @param PaymentMethodProperties|PaymentMethodProperties[]|IdReference|IdReference[] $value
     */
    public function appliesToPaymentMethod(mixed $value): static;
}
