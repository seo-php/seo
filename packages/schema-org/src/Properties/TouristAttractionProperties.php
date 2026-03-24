<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TouristAttractionProperties extends PlaceProperties
{
    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function availableLanguage(mixed $value): static;

    /**
     * @param AudienceProperties|AudienceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function touristType(mixed $value): static;
}
