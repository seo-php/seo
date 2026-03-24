<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DataFeedProperties extends DatasetProperties
{
    /**
     * @param DataFeedItemProperties|DataFeedItemProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function dataFeedElement(mixed $value): static;
}
