<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface VehicleProperties extends ProductProperties
{
    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function accelerationTime(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function bodyType(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function callSign(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function cargoVolume(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dateVehicleFirstRegistered(mixed $value): static;

    /**
     * @param DriveWheelConfigurationValueProperties|DriveWheelConfigurationValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function driveWheelConfiguration(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function emissionsCO2(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function fuelCapacity(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function fuelConsumption(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function fuelEfficiency(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function fuelType(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function knownVehicleDamages(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function meetsEmissionStandard(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function mileageFromOdometer(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function modelDate(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function numberOfAirbags(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfAxles(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfDoors(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfForwardGears(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfPreviousOwners(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function payload(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function productionDate(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function purchaseDate(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function seatingCapacity(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function speed(mixed $value): static;

    /**
     * @param SteeringPositionValueProperties|SteeringPositionValueProperties[]|IdReference|IdReference[] $value
     */
    public function steeringPosition(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function stupidProperty(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function tongueWeight(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function trailerWeight(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function vehicleConfiguration(mixed $value): static;

    /**
     * @param EngineSpecificationProperties|EngineSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function vehicleEngine(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function vehicleIdentificationNumber(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function vehicleInteriorColor(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function vehicleInteriorType(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function vehicleModelDate(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function vehicleSeatingCapacity(mixed $value): static;

    /**
     * @param CarUsageTypeProperties|CarUsageTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function vehicleSpecialUsage(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function vehicleTransmission(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function weightTotal(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function wheelbase(mixed $value): static;
}
