<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DoseScheduleProperties extends MedicalIntangibleProperties
{
    /**
     * @param string|string[] $value
     */
    public function doseUnit(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function doseValue(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function frequency(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function targetPopulation(mixed $value): static;
}
