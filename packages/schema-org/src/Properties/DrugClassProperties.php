<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DrugClassProperties extends MedicalEntityProperties
{
    /**
     * @param DrugProperties|DrugProperties[]|IdReference|IdReference[] $value
     */
    public function drug(mixed $value): static;
}
