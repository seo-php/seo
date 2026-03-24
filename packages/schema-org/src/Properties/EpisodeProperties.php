<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface EpisodeProperties extends CreativeWorkProperties
{
    /**
     * @param PerformingGroupProperties|PerformingGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function actor(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function actors(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function director(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function directors(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function duration(mixed $value): static;

    /**
     * @param int|int[]|string|string[] $value
     */
    public function episodeNumber(mixed $value): static;

    /**
     * @param MusicGroupProperties|MusicGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function musicBy(mixed $value): static;

    /**
     * @param CreativeWorkSeasonProperties|CreativeWorkSeasonProperties[]|IdReference|IdReference[] $value
     */
    public function partOfSeason(mixed $value): static;

    /**
     * @param CreativeWorkSeriesProperties|CreativeWorkSeriesProperties[]|IdReference|IdReference[] $value
     */
    public function partOfSeries(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function productionCompany(mixed $value): static;

    /**
     * @param VideoObjectProperties|VideoObjectProperties[]|IdReference|IdReference[] $value
     */
    public function trailer(mixed $value): static;
}
