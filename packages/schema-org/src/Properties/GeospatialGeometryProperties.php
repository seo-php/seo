<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\GeospatialGeometryProperties as GeospatialGeometryProperties1;

interface GeospatialGeometryProperties extends IntangibleProperties
{
    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoContains(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCoveredBy(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCovers(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCrosses(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoDisjoint(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoEquals(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoIntersects(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoOverlaps(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoTouches(mixed $value): static;

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoWithin(mixed $value): static;
}
