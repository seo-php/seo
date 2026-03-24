<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MusicPlaylistProperties extends CreativeWorkProperties
{
    /**
     * @param int|int[] $value
     */
    public function numTracks(mixed $value): static;

    /**
     * @param ItemListProperties|ItemListProperties[]|MusicRecordingProperties|MusicRecordingProperties[]|IdReference|IdReference[] $value
     */
    public function track(mixed $value): static;

    /**
     * @param MusicRecordingProperties|MusicRecordingProperties[]|IdReference|IdReference[] $value
     */
    public function tracks(mixed $value): static;
}
