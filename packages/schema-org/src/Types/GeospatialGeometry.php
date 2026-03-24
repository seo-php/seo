<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GeospatialGeometryProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class GeospatialGeometry extends Type implements GeospatialGeometryProperties
{
    protected function type(): string
    {
        return 'GeospatialGeometry';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoContains(mixed $value): static
    {
        return $this->set('geoContains', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCoveredBy(mixed $value): static
    {
        return $this->set('geoCoveredBy', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCovers(mixed $value): static
    {
        return $this->set('geoCovers', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCrosses(mixed $value): static
    {
        return $this->set('geoCrosses', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoDisjoint(mixed $value): static
    {
        return $this->set('geoDisjoint', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoEquals(mixed $value): static
    {
        return $this->set('geoEquals', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoIntersects(mixed $value): static
    {
        return $this->set('geoIntersects', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoOverlaps(mixed $value): static
    {
        return $this->set('geoOverlaps', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoTouches(mixed $value): static
    {
        return $this->set('geoTouches', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoWithin(mixed $value): static
    {
        return $this->set('geoWithin', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function identifier(mixed $value): static
    {
        return $this->set('identifier', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static
    {
        return $this->set('image', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
