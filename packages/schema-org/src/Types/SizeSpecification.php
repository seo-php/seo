<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\Class_Properties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\EnumerationProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GenderTypeProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MeasurementTypeEnumerationProperties;
use Seo\SchemaOrg\Properties\PropertyProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QualitativeValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\SizeGroupEnumerationProperties;
use Seo\SchemaOrg\Properties\SizeSpecificationProperties;
use Seo\SchemaOrg\Properties\SizeSystemEnumerationProperties;
use Seo\SchemaOrg\Properties\StructuredValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class SizeSpecification extends Type implements SizeSpecificationProperties
{
    protected function type(): string
    {
        return 'SizeSpecification';
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|IdReference|IdReference[] $value
     */
    public function additionalProperty(mixed $value): static
    {
        return $this->set('additionalProperty', $value);
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
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function equal(mixed $value): static
    {
        return $this->set('equal', $value);
    }

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function greater(mixed $value): static
    {
        return $this->set('greater', $value);
    }

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function greaterOrEqual(mixed $value): static
    {
        return $this->set('greaterOrEqual', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function hasMeasurement(mixed $value): static
    {
        return $this->set('hasMeasurement', $value);
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
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function lesser(mixed $value): static
    {
        return $this->set('lesser', $value);
    }

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function lesserOrEqual(mixed $value): static
    {
        return $this->set('lesserOrEqual', $value);
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
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function nonEqual(mixed $value): static
    {
        return $this->set('nonEqual', $value);
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
     * @param SizeGroupEnumerationProperties|SizeGroupEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function sizeGroup(mixed $value): static
    {
        return $this->set('sizeGroup', $value);
    }

    /**
     * @param SizeSystemEnumerationProperties|SizeSystemEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function sizeSystem(mixed $value): static
    {
        return $this->set('sizeSystem', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function suggestedAge(mixed $value): static
    {
        return $this->set('suggestedAge', $value);
    }

    /**
     * @param GenderTypeProperties|GenderTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function suggestedGender(mixed $value): static
    {
        return $this->set('suggestedGender', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function suggestedMeasurement(mixed $value): static
    {
        return $this->set('suggestedMeasurement', $value);
    }

    /**
     * @param Class_Properties|Class_Properties[]|EnumerationProperties|EnumerationProperties[]|PropertyProperties|PropertyProperties[]|IdReference|IdReference[] $value
     */
    public function supersededBy(mixed $value): static
    {
        return $this->set('supersededBy', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|EnumerationProperties|EnumerationProperties[]|MeasurementTypeEnumerationProperties|MeasurementTypeEnumerationProperties[]|PropertyValueProperties|PropertyValueProperties[]|QualitativeValueProperties|QualitativeValueProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function valueReference(mixed $value): static
    {
        return $this->set('valueReference', $value);
    }
}
