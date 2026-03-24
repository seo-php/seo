<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HealthTopicContentProperties extends WebContentProperties
{
    /**
     * @param HealthAspectEnumerationProperties|HealthAspectEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function hasHealthAspect(mixed $value): static;
}
