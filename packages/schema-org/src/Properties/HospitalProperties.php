<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HospitalProperties extends CivicStructureProperties, MedicalOrganizationProperties, EmergencyServiceProperties
{
    /**
     * @param MedicalProcedureProperties|MedicalProcedureProperties[]|MedicalTestProperties|MedicalTestProperties[]|MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function availableService(mixed $value): static;

    /**
     * @param CDCPMDRecordProperties|CDCPMDRecordProperties[]|DatasetProperties|DatasetProperties[]|IdReference|IdReference[] $value
     */
    public function healthcareReportingData(mixed $value): static;

    /**
     * @param MedicalSpecialtyProperties|MedicalSpecialtyProperties[]|IdReference|IdReference[] $value
     */
    public function medicalSpecialty(mixed $value): static;
}
