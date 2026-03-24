<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AdministrativeAreaProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GenderTypeProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MedicalConditionProperties;
use Seo\SchemaOrg\Properties\PeopleAudienceProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class PeopleAudience extends Type implements PeopleAudienceProperties
{
    protected function type(): string
    {
        return 'PeopleAudience';
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
     * @param string|string[] $value
     */
    public function audienceType(mixed $value): static
    {
        return $this->set('audienceType', $value);
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
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function geographicArea(mixed $value): static
    {
        return $this->set('geographicArea', $value);
    }

    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function healthCondition(mixed $value): static
    {
        return $this->set('healthCondition', $value);
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
    public function requiredGender(mixed $value): static
    {
        return $this->set('requiredGender', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function requiredMaxAge(mixed $value): static
    {
        return $this->set('requiredMaxAge', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function requiredMinAge(mixed $value): static
    {
        return $this->set('requiredMinAge', $value);
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
     * @param float|float[]|int|int[] $value
     */
    public function suggestedMaxAge(mixed $value): static
    {
        return $this->set('suggestedMaxAge', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function suggestedMeasurement(mixed $value): static
    {
        return $this->set('suggestedMeasurement', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function suggestedMinAge(mixed $value): static
    {
        return $this->set('suggestedMinAge', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
