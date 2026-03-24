<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\Class_Properties as Class_Properties1;

interface Class_Properties extends IntangibleProperties
{
    /**
     * @param Class_Properties|Class_Properties[]|EnumerationProperties|EnumerationProperties[]|PropertyProperties|PropertyProperties[]|IdReference|IdReference[] $value
     */
    public function supersededBy(mixed $value): static;
}
