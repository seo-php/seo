<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface FlightReservationProperties extends ReservationProperties
{
    /**
     * @param string|string[] $value
     */
    public function boardingGroup(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function passengerPriorityStatus(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function passengerSequenceNumber(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function securityScreening(mixed $value): static;
}
