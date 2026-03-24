<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface VideoGameSeriesProperties extends CreativeWorkSeriesProperties
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
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function characterAttribute(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function cheatCode(mixed $value): static;

    /**
     * @param CreativeWorkSeasonProperties|CreativeWorkSeasonProperties[]|IdReference|IdReference[] $value
     */
    public function containsSeason(mixed $value): static;

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
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function gameItem(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|PostalAddressProperties|PostalAddressProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function gameLocation(mixed $value): static;

    /**
     * @param string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function gamePlatform(mixed $value): static;

    /**
     * @param MusicGroupProperties|MusicGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function musicBy(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function numberOfEpisodes(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfPlayers(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function numberOfSeasons(mixed $value): static;

    /**
     * @param GamePlayModeProperties|GamePlayModeProperties[]|IdReference|IdReference[] $value
     */
    public function playMode(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function productionCompany(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function quest(mixed $value): static;

    /**
     * @param CreativeWorkSeasonProperties|CreativeWorkSeasonProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function season(mixed $value): static;

    /**
     * @param CreativeWorkSeasonProperties|CreativeWorkSeasonProperties[]|IdReference|IdReference[] $value
     */
    public function seasons(mixed $value): static;

    /**
     * @param VideoObjectProperties|VideoObjectProperties[]|IdReference|IdReference[] $value
     */
    public function trailer(mixed $value): static;
}
