<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface OnlineStoreProperties extends OnlineBusinessProperties
{
    /**
     * @param OnlineMarketplaceProperties|OnlineMarketplaceProperties[]|IdReference|IdReference[] $value
     */
    public function isStoreOn(mixed $value): static;
}
