<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DigitalDocumentProperties extends CreativeWorkProperties
{
    /**
     * @param DigitalDocumentPermissionProperties|DigitalDocumentPermissionProperties[]|IdReference|IdReference[] $value
     */
    public function hasDigitalDocumentPermission(mixed $value): static;
}
