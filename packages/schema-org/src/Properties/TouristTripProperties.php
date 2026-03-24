<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TouristTripProperties extends TripProperties
{
    /**
     * @param AudienceProperties|AudienceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function touristType(mixed $value): static;
}
