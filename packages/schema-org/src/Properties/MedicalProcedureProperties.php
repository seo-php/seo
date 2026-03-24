<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalProcedureProperties extends MedicalEntityProperties
{
    /**
     * @param string|string[] $value
     */
    public function bodyLocation(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function followup(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function howPerformed(mixed $value): static;

    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function preparation(mixed $value): static;

    /**
     * @param MedicalProcedureTypeProperties|MedicalProcedureTypeProperties[]|IdReference|IdReference[] $value
     */
    public function procedureType(mixed $value): static;

    /**
     * @param EventStatusTypeProperties|EventStatusTypeProperties[]|MedicalStudyStatusProperties|MedicalStudyStatusProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function status(mixed $value): static;
}
