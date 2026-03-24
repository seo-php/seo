<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface GeoCircleProperties extends GeoShapeProperties
{
    /**
     * @param GeoCoordinatesProperties|GeoCoordinatesProperties[]|IdReference|IdReference[] $value
     */
    public function geoMidpoint(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|float|float[]|int|int[]|string|string[]|IdReference|IdReference[] $value
     */
    public function geoRadius(mixed $value): static;
}
