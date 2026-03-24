<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface DeliveryEventProperties extends EventProperties
{
    /**
     * @param string|string[] $value
     */
    public function accessCode(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function availableFrom(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function availableThrough(mixed $value): static;

    /**
     * @param DeliveryMethodProperties|DeliveryMethodProperties[]|IdReference|IdReference[] $value
     */
    public function hasDeliveryMethod(mixed $value): static;
}
