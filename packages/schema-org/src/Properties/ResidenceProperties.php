<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ResidenceProperties extends PlaceProperties
{
    /**
     * @param FloorPlanProperties|FloorPlanProperties[]|IdReference|IdReference[] $value
     */
    public function accommodationFloorPlan(mixed $value): static;
}
