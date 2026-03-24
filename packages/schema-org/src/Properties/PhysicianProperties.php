<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PhysicianProperties extends MedicalBusinessProperties, MedicalOrganizationProperties
{
    /**
     * @param MedicalProcedureProperties|MedicalProcedureProperties[]|MedicalTestProperties|MedicalTestProperties[]|MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function availableService(mixed $value): static;

    /**
     * @param HospitalProperties|HospitalProperties[]|IdReference|IdReference[] $value
     */
    public function hospitalAffiliation(mixed $value): static;

    /**
     * @param MedicalSpecialtyProperties|MedicalSpecialtyProperties[]|IdReference|IdReference[] $value
     */
    public function medicalSpecialty(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCategory(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function usNPI(mixed $value): static;
}
