<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MediaReviewProperties extends ReviewProperties
{
    /**
     * @param MediaManipulationRatingEnumerationProperties|MediaManipulationRatingEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function mediaAuthenticityCategory(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function originalMediaContextDescription(mixed $value): static;

    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|string|string[]|WebPageProperties|WebPageProperties[]|IdReference|IdReference[] $value
     */
    public function originalMediaLink(mixed $value): static;
}
