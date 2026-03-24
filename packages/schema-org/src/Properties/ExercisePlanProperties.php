<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ExercisePlanProperties extends CreativeWorkProperties, PhysicalActivityProperties
{
    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function activityDuration(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function activityFrequency(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function additionalVariable(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function exerciseType(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function intensity(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function repetitions(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function restPeriods(mixed $value): static;

    /**
     * @param EnergyProperties|EnergyProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function workload(mixed $value): static;
}
