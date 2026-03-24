<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ArchiveOrganizationProperties extends LocalBusinessProperties
{
    /**
     * @param ArchiveComponentProperties|ArchiveComponentProperties[]|IdReference|IdReference[] $value
     */
    public function archiveHeld(mixed $value): static;
}
