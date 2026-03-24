<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\HyperTocEntryProperties as HyperTocEntryProperties1;

interface HyperTocEntryProperties extends CreativeWorkProperties
{
    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|IdReference|IdReference[] $value
     */
    public function associatedMedia(mixed $value): static;

    /**
     * @param HyperTocEntryProperties|HyperTocEntryProperties[]|IdReference|IdReference[] $value
     */
    public function tocContinuation(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function utterances(mixed $value): static;
}
