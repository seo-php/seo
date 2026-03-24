<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalEntityProperties extends ThingProperties
{
    /**
     * @param MedicalCodeProperties|MedicalCodeProperties[]|IdReference|IdReference[] $value
     */
    public function code(mixed $value): static;

    /**
     * @param GrantProperties|GrantProperties[]|IdReference|IdReference[] $value
     */
    public function funding(mixed $value): static;

    /**
     * @param MedicalGuidelineProperties|MedicalGuidelineProperties[]|IdReference|IdReference[] $value
     */
    public function guideline(mixed $value): static;

    /**
     * @param DrugLegalStatusProperties|DrugLegalStatusProperties[]|MedicalEnumerationProperties|MedicalEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function legalStatus(mixed $value): static;

    /**
     * @param MedicineSystemProperties|MedicineSystemProperties[]|IdReference|IdReference[] $value
     */
    public function medicineSystem(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function recognizingAuthority(mixed $value): static;

    /**
     * @param MedicalSpecialtyProperties|MedicalSpecialtyProperties[]|IdReference|IdReference[] $value
     */
    public function relevantSpecialty(mixed $value): static;

    /**
     * @param MedicalStudyProperties|MedicalStudyProperties[]|IdReference|IdReference[] $value
     */
    public function study(mixed $value): static;
}
