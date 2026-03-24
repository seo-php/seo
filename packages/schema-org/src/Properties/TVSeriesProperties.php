<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TVSeriesProperties extends CreativeWorkProperties, CreativeWorkSeriesProperties
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
     * @param CreativeWorkSeasonProperties|CreativeWorkSeasonProperties[]|IdReference|IdReference[] $value
     */
    public function containsSeason(mixed $value): static;

    /**
     * @param CountryProperties|CountryProperties[]|IdReference|IdReference[] $value
     */
    public function countryOfOrigin(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function director(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function directors(mixed $value): static;

    /**
     * @param EpisodeProperties|EpisodeProperties[]|IdReference|IdReference[] $value
     */
    public function episode(mixed $value): static;

    /**
     * @param EpisodeProperties|EpisodeProperties[]|IdReference|IdReference[] $value
     */
    public function episodes(mixed $value): static;

    /**
     * @param MusicGroupProperties|MusicGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function musicBy(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function numberOfEpisodes(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function numberOfSeasons(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function productionCompany(mixed $value): static;

    /**
     * @param CreativeWorkSeasonProperties|CreativeWorkSeasonProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function season(mixed $value): static;

    /**
     * @param CreativeWorkSeasonProperties|CreativeWorkSeasonProperties[]|IdReference|IdReference[] $value
     */
    public function seasons(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function titleEIDR(mixed $value): static;

    /**
     * @param VideoObjectProperties|VideoObjectProperties[]|IdReference|IdReference[] $value
     */
    public function trailer(mixed $value): static;
}
