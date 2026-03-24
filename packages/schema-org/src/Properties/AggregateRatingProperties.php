<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface AggregateRatingProperties extends RatingProperties
{
    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function itemReviewed(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function ratingCount(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function reviewCount(mixed $value): static;
}
