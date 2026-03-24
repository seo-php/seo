<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface StatisticalPopulationProperties extends IntangibleProperties
{
    /**
     * @param Class_Properties|Class_Properties[]|IdReference|IdReference[] $value
     */
    public function populationType(mixed $value): static;
}
