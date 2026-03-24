<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface WarrantyPromiseProperties extends StructuredValueProperties
{
    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function durationOfWarranty(mixed $value): static;

    /**
     * @param WarrantyScopeProperties|WarrantyScopeProperties[]|IdReference|IdReference[] $value
     */
    public function warrantyScope(mixed $value): static;
}
