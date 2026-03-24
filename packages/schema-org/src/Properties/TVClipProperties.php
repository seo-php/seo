<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TVClipProperties extends ClipProperties
{
    /**
     * @param TVSeriesProperties|TVSeriesProperties[]|IdReference|IdReference[] $value
     */
    public function partOfTVSeries(mixed $value): static;
}
