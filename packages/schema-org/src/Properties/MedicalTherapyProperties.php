<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\MedicalTherapyProperties as MedicalTherapyProperties1;

interface MedicalTherapyProperties extends TherapeuticProcedureProperties
{
    /**
     * @param MedicalContraindicationProperties|MedicalContraindicationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function contraindication(mixed $value): static;

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function duplicateTherapy(mixed $value): static;

    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|IdReference|IdReference[] $value
     */
    public function seriousAdverseOutcome(mixed $value): static;
}
