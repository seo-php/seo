<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface ShippingDeliveryTimeProperties extends StructuredValueProperties
{
    /**
     * @param DayOfWeekProperties|DayOfWeekProperties[]|OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function businessDays(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function cutoffTime(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|ServicePeriodProperties|ServicePeriodProperties[]|IdReference|IdReference[] $value
     */
    public function handlingTime(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|ServicePeriodProperties|ServicePeriodProperties[]|IdReference|IdReference[] $value
     */
    public function transitTime(mixed $value): static;
}
