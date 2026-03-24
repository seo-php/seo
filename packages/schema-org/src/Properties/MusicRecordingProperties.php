<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MusicRecordingProperties extends CreativeWorkProperties
{
    /**
     * @param MusicGroupProperties|MusicGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function byArtist(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function duration(mixed $value): static;

    /**
     * @param MusicAlbumProperties|MusicAlbumProperties[]|IdReference|IdReference[] $value
     */
    public function inAlbum(mixed $value): static;

    /**
     * @param MusicPlaylistProperties|MusicPlaylistProperties[]|IdReference|IdReference[] $value
     */
    public function inPlaylist(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function isrcCode(mixed $value): static;

    /**
     * @param MusicCompositionProperties|MusicCompositionProperties[]|IdReference|IdReference[] $value
     */
    public function recordingOf(mixed $value): static;
}
