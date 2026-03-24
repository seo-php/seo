<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface MediaObjectProperties extends CreativeWorkProperties
{
    /**
     * @param NewsArticleProperties|NewsArticleProperties[]|IdReference|IdReference[] $value
     */
    public function associatedArticle(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function bitrate(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function contentSize(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function contentUrl(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function duration(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function embedUrl(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function encodesCreativeWork(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function encodingFormat(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endTime(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function height(mixed $value): static;

    /**
     * @param GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function ineligibleRegion(mixed $value): static;

    /**
     * @param ClaimProperties|ClaimProperties[]|IdReference|IdReference[] $value
     */
    public function interpretedAsClaim(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function playerType(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function productionCompany(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function regionsAllowed(mixed $value): static;

    /**
     * @param bool|bool[]|MediaSubscriptionProperties|MediaSubscriptionProperties[]|IdReference|IdReference[] $value
     */
    public function requiresSubscription(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function sha256(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startTime(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function uploadDate(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function width(mixed $value): static;
}
