<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MusicReleaseProperties extends MusicPlaylistProperties
{
    /**
     * @param string|string[] $value
     */
    public function catalogNumber(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function creditedTo(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function duration(mixed $value): static;

    /**
     * @param MusicReleaseFormatTypeProperties|MusicReleaseFormatTypeProperties[]|IdReference|IdReference[] $value
     */
    public function musicReleaseFormat(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function recordLabel(mixed $value): static;

    /**
     * @param MusicAlbumProperties|MusicAlbumProperties[]|IdReference|IdReference[] $value
     */
    public function releaseOf(mixed $value): static;
}
