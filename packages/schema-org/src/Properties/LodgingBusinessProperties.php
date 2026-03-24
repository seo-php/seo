<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface LodgingBusinessProperties extends LocalBusinessProperties
{
    /**
     * @param LocationFeatureSpecificationProperties|LocationFeatureSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function amenityFeature(mixed $value): static;

    /**
     * @param AudienceProperties|AudienceProperties[]|IdReference|IdReference[] $value
     */
    public function audience(mixed $value): static;

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function availableLanguage(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function checkinTime(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function checkoutTime(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfRooms(mixed $value): static;

    /**
     * @param bool|bool[]|string|string[] $value
     */
    public function petsAllowed(mixed $value): static;

    /**
     * @param RatingProperties|RatingProperties[]|IdReference|IdReference[] $value
     */
    public function starRating(mixed $value): static;
}
