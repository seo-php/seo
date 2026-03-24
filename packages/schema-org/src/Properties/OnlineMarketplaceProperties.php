<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface OnlineMarketplaceProperties extends OnlineStoreProperties
{
    /**
     * @param OnlineStoreProperties|OnlineStoreProperties[]|IdReference|IdReference[] $value
     */
    public function hasStore(mixed $value): static;
}
