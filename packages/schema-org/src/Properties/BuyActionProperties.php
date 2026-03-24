<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BuyActionProperties extends TradeActionProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function seller(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function vendor(mixed $value): static;

    /**
     * @param WarrantyPromiseProperties|WarrantyPromiseProperties[]|IdReference|IdReference[] $value
     */
    public function warrantyPromise(mixed $value): static;
}
