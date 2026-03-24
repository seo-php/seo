<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalOrganizationProperties extends OrganizationProperties
{
    /**
     * @param string|string[] $value
     */
    public function healthPlanNetworkId(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isAcceptingNewPatients(mixed $value): static;

    /**
     * @param MedicalSpecialtyProperties|MedicalSpecialtyProperties[]|IdReference|IdReference[] $value
     */
    public function medicalSpecialty(mixed $value): static;
}
