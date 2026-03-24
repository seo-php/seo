<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DiagnosticLabProperties extends MedicalOrganizationProperties
{
    /**
     * @param MedicalTestProperties|MedicalTestProperties[]|IdReference|IdReference[] $value
     */
    public function availableTest(mixed $value): static;
}
