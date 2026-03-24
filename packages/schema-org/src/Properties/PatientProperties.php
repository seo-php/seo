<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PatientProperties extends MedicalAudienceProperties, PersonProperties
{
    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function diagnosis(mixed $value): static;

    /**
     * @param DrugProperties|DrugProperties[]|IdReference|IdReference[] $value
     */
    public function drug(mixed $value): static;

    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function healthCondition(mixed $value): static;
}
