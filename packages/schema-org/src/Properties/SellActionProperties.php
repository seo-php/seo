<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SellActionProperties extends TradeActionProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function buyer(mixed $value): static;

    /**
     * @param WarrantyPromiseProperties|WarrantyPromiseProperties[]|IdReference|IdReference[] $value
     */
    public function warrantyPromise(mixed $value): static;
}
