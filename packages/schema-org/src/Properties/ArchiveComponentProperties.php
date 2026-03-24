<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ArchiveComponentProperties extends CreativeWorkProperties
{
    /**
     * @param ArchiveOrganizationProperties|ArchiveOrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function holdingArchive(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|PostalAddressProperties|PostalAddressProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function itemLocation(mixed $value): static;
}
