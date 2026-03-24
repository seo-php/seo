<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HyperTocProperties extends CreativeWorkProperties
{
    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|IdReference|IdReference[] $value
     */
    public function associatedMedia(mixed $value): static;

    /**
     * @param HyperTocEntryProperties|HyperTocEntryProperties[]|IdReference|IdReference[] $value
     */
    public function tocEntry(mixed $value): static;
}
