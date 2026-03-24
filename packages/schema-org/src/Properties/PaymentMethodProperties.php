<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PaymentMethodProperties extends IntangibleProperties
{
    /**
     * @param PaymentMethodTypeProperties|PaymentMethodTypeProperties[]|IdReference|IdReference[] $value
     */
    public function paymentMethodType(mixed $value): static;
}
