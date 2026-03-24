<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\MusicCompositionProperties as MusicCompositionProperties1;

interface MusicCompositionProperties extends CreativeWorkProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function composer(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function firstPerformance(mixed $value): static;

    /**
     * @param MusicCompositionProperties|MusicCompositionProperties[]|IdReference|IdReference[] $value
     */
    public function includedComposition(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function iswcCode(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function lyricist(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function lyrics(mixed $value): static;

    /**
     * @param MusicCompositionProperties|MusicCompositionProperties[]|IdReference|IdReference[] $value
     */
    public function musicArrangement(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function musicCompositionForm(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function musicalKey(mixed $value): static;

    /**
     * @param MusicRecordingProperties|MusicRecordingProperties[]|IdReference|IdReference[] $value
     */
    public function recordedAs(mixed $value): static;
}
