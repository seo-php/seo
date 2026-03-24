<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ClipProperties extends CreativeWorkProperties
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
     * @param int|int[]|string|string[] $value
     */
    public function clipNumber(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function director(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function directors(mixed $value): static;

    /**
     * @param float|float[]|HyperTocEntryProperties|HyperTocEntryProperties[]|int|int[]|IdReference|IdReference[] $value
     */
    public function endOffset(mixed $value): static;

    /**
     * @param MusicGroupProperties|MusicGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function musicBy(mixed $value): static;

    /**
     * @param EpisodeProperties|EpisodeProperties[]|IdReference|IdReference[] $value
     */
    public function partOfEpisode(mixed $value): static;

    /**
     * @param CreativeWorkSeasonProperties|CreativeWorkSeasonProperties[]|IdReference|IdReference[] $value
     */
    public function partOfSeason(mixed $value): static;

    /**
     * @param CreativeWorkSeriesProperties|CreativeWorkSeriesProperties[]|IdReference|IdReference[] $value
     */
    public function partOfSeries(mixed $value): static;

    /**
     * @param float|float[]|HyperTocEntryProperties|HyperTocEntryProperties[]|int|int[]|IdReference|IdReference[] $value
     */
    public function startOffset(mixed $value): static;
}
