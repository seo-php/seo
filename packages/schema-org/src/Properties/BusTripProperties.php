<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BusTripProperties extends TripProperties
{
    /**
     * @param BusStationProperties|BusStationProperties[]|BusStopProperties|BusStopProperties[]|IdReference|IdReference[] $value
     */
    public function arrivalBusStop(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function busName(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function busNumber(mixed $value): static;

    /**
     * @param BusStationProperties|BusStationProperties[]|BusStopProperties|BusStopProperties[]|IdReference|IdReference[] $value
     */
    public function departureBusStop(mixed $value): static;
}
