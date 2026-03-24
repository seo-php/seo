<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface QuotationProperties extends CreativeWorkProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function spokenByCharacter(mixed $value): static;
}
