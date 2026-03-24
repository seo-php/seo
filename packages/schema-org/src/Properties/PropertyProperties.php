<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\PropertyProperties as PropertyProperties1;

interface PropertyProperties extends IntangibleProperties
{
    /**
     * @param Class_Properties|Class_Properties[]|IdReference|IdReference[] $value
     */
    public function domainIncludes(mixed $value): static;

    /**
     * @param PropertyProperties|PropertyProperties[]|IdReference|IdReference[] $value
     */
    public function inverseOf(mixed $value): static;

    /**
     * @param Class_Properties|Class_Properties[]|IdReference|IdReference[] $value
     */
    public function rangeIncludes(mixed $value): static;

    /**
     * @param Class_Properties|Class_Properties[]|EnumerationProperties|EnumerationProperties[]|PropertyProperties|PropertyProperties[]|IdReference|IdReference[] $value
     */
    public function supersededBy(mixed $value): static;
}
