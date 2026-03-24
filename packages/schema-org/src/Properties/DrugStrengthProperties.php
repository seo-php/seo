<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DrugStrengthProperties extends MedicalIntangibleProperties
{
    /**
     * @param string|string[] $value
     */
    public function activeIngredient(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function availableIn(mixed $value): static;

    /**
     * @param MaximumDoseScheduleProperties|MaximumDoseScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function maximumIntake(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function strengthUnit(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function strengthValue(mixed $value): static;
}
