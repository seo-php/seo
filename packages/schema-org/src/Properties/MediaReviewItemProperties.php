<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MediaReviewItemProperties extends CreativeWorkProperties
{
    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|IdReference|IdReference[] $value
     */
    public function mediaItemAppearance(mixed $value): static;
}
