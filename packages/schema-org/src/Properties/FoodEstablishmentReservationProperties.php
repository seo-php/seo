<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface FoodEstablishmentReservationProperties extends ReservationProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endTime(mixed $value): static;

    /**
     * @param int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function partySize(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startTime(mixed $value): static;
}
