<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalCauseProperties extends MedicalEntityProperties
{
    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|IdReference|IdReference[] $value
     */
    public function causeOf(mixed $value): static;
}
