<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface AudioObjectProperties extends MediaObjectProperties
{
    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function caption(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function embeddedTextCaption(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function transcript(mixed $value): static;
}
