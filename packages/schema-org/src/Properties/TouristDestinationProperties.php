<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TouristDestinationProperties extends PlaceProperties
{
    /**
     * @param TouristAttractionProperties|TouristAttractionProperties[]|IdReference|IdReference[] $value
     */
    public function includesAttraction(mixed $value): static;

    /**
     * @param AudienceProperties|AudienceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function touristType(mixed $value): static;
}
