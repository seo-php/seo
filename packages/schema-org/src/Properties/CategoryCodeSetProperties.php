<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface CategoryCodeSetProperties extends DefinedTermSetProperties
{
    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|IdReference|IdReference[] $value
     */
    public function hasCategoryCode(mixed $value): static;
}
