<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface TaxiReservationProperties extends ReservationProperties
{
    /**
     * @param int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function partySize(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function pickupLocation(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function pickupTime(mixed $value): static;
}
