<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PlayGameActionProperties extends ConsumeActionProperties
{
    /**
     * @param GameAvailabilityEnumerationProperties|GameAvailabilityEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function gameAvailabilityType(mixed $value): static;
}
