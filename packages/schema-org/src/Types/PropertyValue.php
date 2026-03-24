<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\EnumerationProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MeasurementMethodEnumProperties;
use Seo\SchemaOrg\Properties\MeasurementTypeEnumerationProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QualitativeValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\StructuredValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class PropertyValue extends Type implements PropertyValueProperties
{
    protected function type(): string
    {
        return 'PropertyValue';
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
     * @param float|float[]|int|int[] $value
     */
    public function maxValue(mixed $value): static
    {
        return $this->set('maxValue', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|MeasurementMethodEnumProperties|MeasurementMethodEnumProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function measurementMethod(mixed $value): static
    {
        return $this->set('measurementMethod', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|MeasurementMethodEnumProperties|MeasurementMethodEnumProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function measurementTechnique(mixed $value): static
    {
        return $this->set('measurementTechnique', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function minValue(mixed $value): static
    {
        return $this->set('minValue', $value);
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
    public function propertyID(mixed $value): static
    {
        return $this->set('propertyID', $value);
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
    public function unitCode(mixed $value): static
    {
        return $this->set('unitCode', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function unitText(mixed $value): static
    {
        return $this->set('unitText', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param bool|bool[]|float|float[]|int|int[]|string|string[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function value(mixed $value): static
    {
        return $this->set('value', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|EnumerationProperties|EnumerationProperties[]|MeasurementTypeEnumerationProperties|MeasurementTypeEnumerationProperties[]|PropertyValueProperties|PropertyValueProperties[]|QualitativeValueProperties|QualitativeValueProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function valueReference(mixed $value): static
    {
        return $this->set('valueReference', $value);
    }
}
