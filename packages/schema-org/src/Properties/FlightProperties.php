<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface FlightProperties extends TripProperties
{
    /**
     * @param string|string[]|VehicleProperties|VehicleProperties[]|IdReference|IdReference[] $value
     */
    public function aircraft(mixed $value): static;

    /**
     * @param AirportProperties|AirportProperties[]|IdReference|IdReference[] $value
     */
    public function arrivalAirport(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function arrivalGate(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function arrivalTerminal(mixed $value): static;

    /**
     * @param BoardingPolicyTypeProperties|BoardingPolicyTypeProperties[]|IdReference|IdReference[] $value
     */
    public function boardingPolicy(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function carrier(mixed $value): static;

    /**
     * @param AirportProperties|AirportProperties[]|IdReference|IdReference[] $value
     */
    public function departureAirport(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function departureGate(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function departureTerminal(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function estimatedFlightDuration(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function flightDistance(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function flightNumber(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function mealService(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function seller(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function webCheckinTime(mixed $value): static;
}
