<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AggregateRatingProperties;
use Seo\SchemaOrg\Properties\CertificationProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GeoCoordinatesProperties;
use Seo\SchemaOrg\Properties\GeoShapeProperties;
use Seo\SchemaOrg\Properties\GeospatialGeometryProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\LocationFeatureSpecificationProperties;
use Seo\SchemaOrg\Properties\MapProperties;
use Seo\SchemaOrg\Properties\OpeningHoursSpecificationProperties;
use Seo\SchemaOrg\Properties\PhotographProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\PostalAddressProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\ReviewProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ZooProperties;
use Seo\SchemaOrg\Type;

final class Zoo extends Type implements ZooProperties
{
    protected function type(): string
    {
        return 'Zoo';
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|IdReference|IdReference[] $value
     */
    public function additionalProperty(mixed $value): static
    {
        return $this->set('additionalProperty', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function address(mixed $value): static
    {
        return $this->set('address', $value);
    }

    /**
     * @param AggregateRatingProperties|AggregateRatingProperties[]|IdReference|IdReference[] $value
     */
    public function aggregateRating(mixed $value): static
    {
        return $this->set('aggregateRating', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param LocationFeatureSpecificationProperties|LocationFeatureSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function amenityFeature(mixed $value): static
    {
        return $this->set('amenityFeature', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function branchCode(mixed $value): static
    {
        return $this->set('branchCode', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function containedIn(mixed $value): static
    {
        return $this->set('containedIn', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function containedInPlace(mixed $value): static
    {
        return $this->set('containedInPlace', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function containsPlace(mixed $value): static
    {
        return $this->set('containsPlace', $value);
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
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function event(mixed $value): static
    {
        return $this->set('event', $value);
    }

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function events(mixed $value): static
    {
        return $this->set('events', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function faxNumber(mixed $value): static
    {
        return $this->set('faxNumber', $value);
    }

    /**
     * @param GeoCoordinatesProperties|GeoCoordinatesProperties[]|GeoShapeProperties|GeoShapeProperties[]|IdReference|IdReference[] $value
     */
    public function geo(mixed $value): static
    {
        return $this->set('geo', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoContains(mixed $value): static
    {
        return $this->set('geoContains', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCoveredBy(mixed $value): static
    {
        return $this->set('geoCoveredBy', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCovers(mixed $value): static
    {
        return $this->set('geoCovers', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCrosses(mixed $value): static
    {
        return $this->set('geoCrosses', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoDisjoint(mixed $value): static
    {
        return $this->set('geoDisjoint', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoEquals(mixed $value): static
    {
        return $this->set('geoEquals', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoIntersects(mixed $value): static
    {
        return $this->set('geoIntersects', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoOverlaps(mixed $value): static
    {
        return $this->set('geoOverlaps', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoTouches(mixed $value): static
    {
        return $this->set('geoTouches', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoWithin(mixed $value): static
    {
        return $this->set('geoWithin', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function globalLocationNumber(mixed $value): static
    {
        return $this->set('globalLocationNumber', $value);
    }

    /**
     * @param CertificationProperties|CertificationProperties[]|IdReference|IdReference[] $value
     */
    public function hasCertification(mixed $value): static
    {
        return $this->set('hasCertification', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function hasDriveThroughService(mixed $value): static
    {
        return $this->set('hasDriveThroughService', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function hasGS1DigitalLink(mixed $value): static
    {
        return $this->set('hasGS1DigitalLink', $value);
    }

    /**
     * @param MapProperties|MapProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function hasMap(mixed $value): static
    {
        return $this->set('hasMap', $value);
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
     * @param bool|bool[] $value
     */
    public function isAccessibleForFree(mixed $value): static
    {
        return $this->set('isAccessibleForFree', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function isicV4(mixed $value): static
    {
        return $this->set('isicV4', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function keywords(mixed $value): static
    {
        return $this->set('keywords', $value);
    }

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function latitude(mixed $value): static
    {
        return $this->set('latitude', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function logo(mixed $value): static
    {
        return $this->set('logo', $value);
    }

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function longitude(mixed $value): static
    {
        return $this->set('longitude', $value);
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
    public function map(mixed $value): static
    {
        return $this->set('map', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function maps(mixed $value): static
    {
        return $this->set('maps', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function maximumAttendeeCapacity(mixed $value): static
    {
        return $this->set('maximumAttendeeCapacity', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function openingHours(mixed $value): static
    {
        return $this->set('openingHours', $value);
    }

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function openingHoursSpecification(mixed $value): static
    {
        return $this->set('openingHoursSpecification', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|PhotographProperties|PhotographProperties[]|IdReference|IdReference[] $value
     */
    public function photo(mixed $value): static
    {
        return $this->set('photo', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|PhotographProperties|PhotographProperties[]|IdReference|IdReference[] $value
     */
    public function photos(mixed $value): static
    {
        return $this->set('photos', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function publicAccess(mixed $value): static
    {
        return $this->set('publicAccess', $value);
    }

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function review(mixed $value): static
    {
        return $this->set('review', $value);
    }

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function reviews(mixed $value): static
    {
        return $this->set('reviews', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function slogan(mixed $value): static
    {
        return $this->set('slogan', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function smokingAllowed(mixed $value): static
    {
        return $this->set('smokingAllowed', $value);
    }

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function specialOpeningHoursSpecification(mixed $value): static
    {
        return $this->set('specialOpeningHoursSpecification', $value);
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
    public function telephone(mixed $value): static
    {
        return $this->set('telephone', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function tourBookingPage(mixed $value): static
    {
        return $this->set('tourBookingPage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
