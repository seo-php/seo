<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MusicAlbumProperties extends MusicPlaylistProperties
{
    /**
     * @param MusicAlbumProductionTypeProperties|MusicAlbumProductionTypeProperties[]|IdReference|IdReference[] $value
     */
    public function albumProductionType(mixed $value): static;

    /**
     * @param MusicReleaseProperties|MusicReleaseProperties[]|IdReference|IdReference[] $value
     */
    public function albumRelease(mixed $value): static;

    /**
     * @param MusicAlbumReleaseTypeProperties|MusicAlbumReleaseTypeProperties[]|IdReference|IdReference[] $value
     */
    public function albumReleaseType(mixed $value): static;

    /**
     * @param MusicGroupProperties|MusicGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function byArtist(mixed $value): static;
}
