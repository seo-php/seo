<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DrugLegalStatusProperties extends MedicalIntangibleProperties
{
    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function applicableLocation(mixed $value): static;
}
