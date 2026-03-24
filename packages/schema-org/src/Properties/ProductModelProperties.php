<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ProductModelProperties as ProductModelProperties1;

interface ProductModelProperties extends ProductProperties
{
    /**
     * @param ProductGroupProperties|ProductGroupProperties[]|ProductModelProperties|ProductModelProperties[]|IdReference|IdReference[] $value
     */
    public function isVariantOf(mixed $value): static;

    /**
     * @param ProductModelProperties|ProductModelProperties[]|IdReference|IdReference[] $value
     */
    public function predecessorOf(mixed $value): static;

    /**
     * @param ProductModelProperties|ProductModelProperties[]|IdReference|IdReference[] $value
     */
    public function successorOf(mixed $value): static;
}
