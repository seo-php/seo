<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TherapeuticProcedureProperties extends MedicalProcedureProperties
{
    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|IdReference|IdReference[] $value
     */
    public function adverseOutcome(mixed $value): static;

    /**
     * @param DoseScheduleProperties|DoseScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function doseSchedule(mixed $value): static;

    /**
     * @param DrugProperties|DrugProperties[]|IdReference|IdReference[] $value
     */
    public function drug(mixed $value): static;
}
