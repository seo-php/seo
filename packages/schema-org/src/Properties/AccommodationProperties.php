<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface AccommodationProperties extends PlaceProperties
{
    /**
     * @param string|string[] $value
     */
    public function accommodationCategory(mixed $value): static;

    /**
     * @param FloorPlanProperties|FloorPlanProperties[]|IdReference|IdReference[] $value
     */
    public function accommodationFloorPlan(mixed $value): static;

    /**
     * @param LocationFeatureSpecificationProperties|LocationFeatureSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function amenityFeature(mixed $value): static;

    /**
     * @param BedDetailsProperties|BedDetailsProperties[]|BedTypeProperties|BedTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function bed(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function floorLevel(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function floorSize(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function leaseLength(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function numberOfBathroomsTotal(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfBedrooms(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function numberOfFullBathrooms(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function numberOfPartialBathrooms(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfRooms(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function occupancy(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function permittedUsage(mixed $value): static;

    /**
     * @param bool|bool[]|string|string[] $value
     */
    public function petsAllowed(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function tourBookingPage(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function yearBuilt(mixed $value): static;
}
