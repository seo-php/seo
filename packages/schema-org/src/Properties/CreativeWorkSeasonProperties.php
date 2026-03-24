<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface CreativeWorkSeasonProperties extends CreativeWorkProperties
{
    /**
     * @param PerformingGroupProperties|PerformingGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function actor(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function director(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static;

    /**
     * @param EpisodeProperties|EpisodeProperties[]|IdReference|IdReference[] $value
     */
    public function episode(mixed $value): static;

    /**
     * @param EpisodeProperties|EpisodeProperties[]|IdReference|IdReference[] $value
     */
    public function episodes(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function numberOfEpisodes(mixed $value): static;

    /**
     * @param CreativeWorkSeriesProperties|CreativeWorkSeriesProperties[]|IdReference|IdReference[] $value
     */
    public function partOfSeries(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function productionCompany(mixed $value): static;

    /**
     * @param int|int[]|string|string[] $value
     */
    public function seasonNumber(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static;

    /**
     * @param VideoObjectProperties|VideoObjectProperties[]|IdReference|IdReference[] $value
     */
    public function trailer(mixed $value): static;
}
