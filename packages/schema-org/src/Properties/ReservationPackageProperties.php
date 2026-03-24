<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ReservationPackageProperties extends ReservationProperties
{
    /**
     * @param ReservationProperties|ReservationProperties[]|IdReference|IdReference[] $value
     */
    public function subReservation(mixed $value): static;
}
