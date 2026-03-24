<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface RentalCarReservationProperties extends ReservationProperties
{
    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function dropoffLocation(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dropoffTime(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function pickupLocation(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function pickupTime(mixed $value): static;
}
