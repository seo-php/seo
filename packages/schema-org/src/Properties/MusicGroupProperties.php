<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MusicGroupProperties extends PerformingGroupProperties
{
    /**
     * @param MusicAlbumProperties|MusicAlbumProperties[]|IdReference|IdReference[] $value
     */
    public function album(mixed $value): static;

    /**
     * @param MusicAlbumProperties|MusicAlbumProperties[]|IdReference|IdReference[] $value
     */
    public function albums(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function genre(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function musicGroupMember(mixed $value): static;

    /**
     * @param ItemListProperties|ItemListProperties[]|MusicRecordingProperties|MusicRecordingProperties[]|IdReference|IdReference[] $value
     */
    public function track(mixed $value): static;

    /**
     * @param MusicRecordingProperties|MusicRecordingProperties[]|IdReference|IdReference[] $value
     */
    public function tracks(mixed $value): static;
}
