<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ReviewProperties as ReviewProperties1;

interface ReviewProperties extends CreativeWorkProperties
{
    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function associatedClaimReview(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function associatedMediaReview(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function associatedReview(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function itemReviewed(mixed $value): static;

    /**
     * @param ItemListProperties|ItemListProperties[]|ListItemProperties|ListItemProperties[]|string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function negativeNotes(mixed $value): static;

    /**
     * @param ItemListProperties|ItemListProperties[]|ListItemProperties|ListItemProperties[]|string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function positiveNotes(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function reviewAspect(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function reviewBody(mixed $value): static;

    /**
     * @param RatingProperties|RatingProperties[]|IdReference|IdReference[] $value
     */
    public function reviewRating(mixed $value): static;
}
