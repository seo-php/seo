<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface FloorPlanProperties extends IntangibleProperties
{
    /**
     * @param LocationFeatureSpecificationProperties|LocationFeatureSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function amenityFeature(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function floorSize(mixed $value): static;

    /**
     * @param AccommodationProperties|AccommodationProperties[]|IdReference|IdReference[] $value
     */
    public function isPlanForApartment(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function layoutImage(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfAccommodationUnits(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfAvailableAccommodationUnits(mixed $value): static;

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
     * @param bool|bool[]|string|string[] $value
     */
    public function petsAllowed(mixed $value): static;
}
