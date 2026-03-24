<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface IndividualPhysicianProperties extends PhysicianProperties
{
    /**
     * @param MedicalOrganizationProperties|MedicalOrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function practicesAt(mixed $value): static;
}
