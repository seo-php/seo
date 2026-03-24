<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ProductGroupProperties extends ProductProperties
{
    /**
     * @param ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function hasVariant(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function productGroupID(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function variesBy(mixed $value): static;
}
