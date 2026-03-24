<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MapProperties extends CreativeWorkProperties
{
    /**
     * @param MapCategoryTypeProperties|MapCategoryTypeProperties[]|IdReference|IdReference[] $value
     */
    public function mapType(mixed $value): static;
}
