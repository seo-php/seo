<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalSignOrSymptomProperties extends MedicalConditionProperties
{
    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function possibleTreatment(mixed $value): static;
}
