<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SeekToActionProperties extends ActionProperties
{
    /**
     * @param float|float[]|HyperTocEntryProperties|HyperTocEntryProperties[]|int|int[]|IdReference|IdReference[] $value
     */
    public function startOffset(mixed $value): static;
}
