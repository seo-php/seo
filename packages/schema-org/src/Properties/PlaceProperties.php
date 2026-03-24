<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\PlaceProperties as PlaceProperties1;

interface PlaceProperties extends ThingProperties
{
    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|IdReference|IdReference[] $value
     */
    public function additionalProperty(mixed $value): static;

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function address(mixed $value): static;

    /**
     * @param AggregateRatingProperties|AggregateRatingProperties[]|IdReference|IdReference[] $value
     */
    public function aggregateRating(mixed $value): static;

    /**
     * @param LocationFeatureSpecificationProperties|LocationFeatureSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function amenityFeature(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function branchCode(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function containedIn(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function containedInPlace(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function containsPlace(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function event(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function events(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function faxNumber(mixed $value): static;

    /**
     * @param GeoCoordinatesProperties|GeoCoordinatesProperties[]|GeoShapeProperties|GeoShapeProperties[]|IdReference|IdReference[] $value
     */
    public function geo(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoContains(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCoveredBy(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCovers(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCrosses(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoDisjoint(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoEquals(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoIntersects(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoOverlaps(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoTouches(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoWithin(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function globalLocationNumber(mixed $value): static;

    /**
     * @param CertificationProperties|CertificationProperties[]|IdReference|IdReference[] $value
     */
    public function hasCertification(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function hasDriveThroughService(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function hasGS1DigitalLink(mixed $value): static;

    /**
     * @param MapProperties|MapProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function hasMap(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isAccessibleForFree(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function isicV4(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function keywords(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function latitude(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function logo(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function longitude(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function map(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function maps(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function maximumAttendeeCapacity(mixed $value): static;

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function openingHoursSpecification(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|PhotographProperties|PhotographProperties[]|IdReference|IdReference[] $value
     */
    public function photo(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|PhotographProperties|PhotographProperties[]|IdReference|IdReference[] $value
     */
    public function photos(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function publicAccess(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function review(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function reviews(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function slogan(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function smokingAllowed(mixed $value): static;

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function specialOpeningHoursSpecification(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function telephone(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function tourBookingPage(mixed $value): static;
}
