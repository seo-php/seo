<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\PropertyValueSpecificationProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ThingProperties;
use Seo\SchemaOrg\Type;

final class PropertyValueSpecification extends Type implements PropertyValueSpecificationProperties
{
    protected function type(): string
    {
        return 'PropertyValueSpecification';
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
     * @param string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function defaultValue(mixed $value): static
    {
        return $this->set('defaultValue', $value);
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
     * @param float|float[]|int|int[] $value
     */
    public function minValue(mixed $value): static
    {
        return $this->set('minValue', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function multipleValues(mixed $value): static
    {
        return $this->set('multipleValues', $value);
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
     * @param bool|bool[] $value
     */
    public function readonlyValue(mixed $value): static
    {
        return $this->set('readonlyValue', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function stepValue(mixed $value): static
    {
        return $this->set('stepValue', $value);
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

    /**
     * @param float|float[]|int|int[] $value
     */
    public function valueMaxLength(mixed $value): static
    {
        return $this->set('valueMaxLength', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function valueMinLength(mixed $value): static
    {
        return $this->set('valueMinLength', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function valueName(mixed $value): static
    {
        return $this->set('valueName', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function valuePattern(mixed $value): static
    {
        return $this->set('valuePattern', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function valueRequired(mixed $value): static
    {
        return $this->set('valueRequired', $value);
    }
}
