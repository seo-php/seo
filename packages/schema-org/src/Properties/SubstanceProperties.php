<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SubstanceProperties extends MedicalEntityProperties
{
    /**
     * @param string|string[] $value
     */
    public function activeIngredient(mixed $value): static;

    /**
     * @param MaximumDoseScheduleProperties|MaximumDoseScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function maximumIntake(mixed $value): static;
}
