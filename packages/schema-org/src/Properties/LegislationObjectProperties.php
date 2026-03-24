<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface LegislationObjectProperties extends LegislationProperties, MediaObjectProperties
{
    /**
     * @param LegalValueLevelProperties|LegalValueLevelProperties[]|IdReference|IdReference[] $value
     */
    public function legislationLegalValue(mixed $value): static;
}
