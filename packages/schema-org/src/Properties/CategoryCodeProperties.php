<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface CategoryCodeProperties extends DefinedTermProperties
{
    /**
     * @param string|string[] $value
     */
    public function codeValue(mixed $value): static;

    /**
     * @param CategoryCodeSetProperties|CategoryCodeSetProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inCodeSet(mixed $value): static;
}
