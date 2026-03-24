<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TravelActionProperties extends MoveActionProperties
{
    /**
     * @param DistanceProperties|DistanceProperties[]|IdReference|IdReference[] $value
     */
    public function distance(mixed $value): static;
}
