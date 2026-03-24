<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\EnumerationProperties as EnumerationProperties1;

interface EnumerationProperties extends IntangibleProperties
{
    /**
     * @param Class_Properties|Class_Properties[]|EnumerationProperties|EnumerationProperties[]|PropertyProperties|PropertyProperties[]|IdReference|IdReference[] $value
     */
    public function supersededBy(mixed $value): static;
}
