<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\TripProperties as TripProperties1;

interface TripProperties extends IntangibleProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function arrivalTime(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function departureTime(mixed $value): static;

    /**
     * @param ItemListProperties|ItemListProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function itinerary(mixed $value): static;

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static;

    /**
     * @param TripProperties|TripProperties[]|IdReference|IdReference[] $value
     */
    public function partOfTrip(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static;

    /**
     * @param TripProperties|TripProperties[]|IdReference|IdReference[] $value
     */
    public function subTrip(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function tripOrigin(mixed $value): static;
}
