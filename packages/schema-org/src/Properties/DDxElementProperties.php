<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DDxElementProperties extends MedicalIntangibleProperties
{
    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function diagnosis(mixed $value): static;

    /**
     * @param MedicalSignOrSymptomProperties|MedicalSignOrSymptomProperties[]|IdReference|IdReference[] $value
     */
    public function distinguishingSign(mixed $value): static;
}
