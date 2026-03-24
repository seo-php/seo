<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PodcastSeriesProperties extends CreativeWorkSeriesProperties
{
    /**
     * @param PerformingGroupProperties|PerformingGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function actor(mixed $value): static;

    /**
     * @param DataFeedProperties|DataFeedProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function webFeed(mixed $value): static;
}
