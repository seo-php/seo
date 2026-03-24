<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ProductCollectionProperties extends ProductProperties, CollectionProperties
{
    /**
     * @param TypeAndQuantityNodeProperties|TypeAndQuantityNodeProperties[]|IdReference|IdReference[] $value
     */
    public function includesObject(mixed $value): static;
}
