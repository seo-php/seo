<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TrainTripProperties extends TripProperties
{
    /**
     * @param string|string[] $value
     */
    public function arrivalPlatform(mixed $value): static;

    /**
     * @param TrainStationProperties|TrainStationProperties[]|IdReference|IdReference[] $value
     */
    public function arrivalStation(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function departurePlatform(mixed $value): static;

    /**
     * @param TrainStationProperties|TrainStationProperties[]|IdReference|IdReference[] $value
     */
    public function departureStation(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function trainName(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function trainNumber(mixed $value): static;
}
