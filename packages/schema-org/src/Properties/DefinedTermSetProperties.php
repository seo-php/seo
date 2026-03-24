<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DefinedTermSetProperties extends CreativeWorkProperties
{
    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|IdReference|IdReference[] $value
     */
    public function hasDefinedTerm(mixed $value): static;
}
