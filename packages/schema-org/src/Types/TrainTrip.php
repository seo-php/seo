<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DemandProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\ItemListProperties;
use Seo\SchemaOrg\Properties\OfferProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\TrainStationProperties;
use Seo\SchemaOrg\Properties\TrainTripProperties;
use Seo\SchemaOrg\Properties\TripProperties;
use Seo\SchemaOrg\Type;

final class TrainTrip extends Type implements TrainTripProperties
{
    protected function type(): string
    {
        return 'TrainTrip';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function arrivalPlatform(mixed $value): static
    {
        return $this->set('arrivalPlatform', $value);
    }

    /**
     * @param TrainStationProperties|TrainStationProperties[]|IdReference|IdReference[] $value
     */
    public function arrivalStation(mixed $value): static
    {
        return $this->set('arrivalStation', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function arrivalTime(mixed $value): static
    {
        return $this->set('arrivalTime', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function departurePlatform(mixed $value): static
    {
        return $this->set('departurePlatform', $value);
    }

    /**
     * @param TrainStationProperties|TrainStationProperties[]|IdReference|IdReference[] $value
     */
    public function departureStation(mixed $value): static
    {
        return $this->set('departureStation', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function departureTime(mixed $value): static
    {
        return $this->set('departureTime', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function identifier(mixed $value): static
    {
        return $this->set('identifier', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static
    {
        return $this->set('image', $value);
    }

    /**
     * @param ItemListProperties|ItemListProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function itinerary(mixed $value): static
    {
        return $this->set('itinerary', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static
    {
        return $this->set('offers', $value);
    }

    /**
     * @param TripProperties|TripProperties[]|IdReference|IdReference[] $value
     */
    public function partOfTrip(mixed $value): static
    {
        return $this->set('partOfTrip', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static
    {
        return $this->set('provider', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param TripProperties|TripProperties[]|IdReference|IdReference[] $value
     */
    public function subTrip(mixed $value): static
    {
        return $this->set('subTrip', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function trainName(mixed $value): static
    {
        return $this->set('trainName', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function trainNumber(mixed $value): static
    {
        return $this->set('trainNumber', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function tripOrigin(mixed $value): static
    {
        return $this->set('tripOrigin', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
