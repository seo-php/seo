<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface LodgingReservationProperties extends ReservationProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function checkinTime(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function checkoutTime(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function lodgingUnitDescription(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function lodgingUnitType(mixed $value): static;

    /**
     * @param int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numAdults(mixed $value): static;

    /**
     * @param int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numChildren(mixed $value): static;
}
