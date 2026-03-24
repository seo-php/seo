<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface RatingProperties extends IntangibleProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function author(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function bestRating(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function ratingExplanation(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function ratingValue(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function reviewAspect(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function worstRating(mixed $value): static;
}
