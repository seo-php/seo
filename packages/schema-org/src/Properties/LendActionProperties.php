<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface LendActionProperties extends TransferActionProperties
{
    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function borrower(mixed $value): static;
}
