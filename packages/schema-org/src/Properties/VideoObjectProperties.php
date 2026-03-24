<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface VideoObjectProperties extends MediaObjectProperties
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
     * @param MediaObjectProperties|MediaObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function caption(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function director(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function directors(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function embeddedTextCaption(mixed $value): static;

    /**
     * @param MusicGroupProperties|MusicGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function musicBy(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function transcript(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function videoFrameSize(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function videoQuality(mixed $value): static;
}
