<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EnergyProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MassProperties;
use Seo\SchemaOrg\Properties\NutritionInformationProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class NutritionInformation extends Type implements NutritionInformationProperties
{
    protected function type(): string
    {
        return 'NutritionInformation';
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
     * @param EnergyProperties|EnergyProperties[]|IdReference|IdReference[] $value
     */
    public function calories(mixed $value): static
    {
        return $this->set('calories', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function carbohydrateContent(mixed $value): static
    {
        return $this->set('carbohydrateContent', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function cholesterolContent(mixed $value): static
    {
        return $this->set('cholesterolContent', $value);
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
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function fatContent(mixed $value): static
    {
        return $this->set('fatContent', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function fiberContent(mixed $value): static
    {
        return $this->set('fiberContent', $value);
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
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function proteinContent(mixed $value): static
    {
        return $this->set('proteinContent', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function saturatedFatContent(mixed $value): static
    {
        return $this->set('saturatedFatContent', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function servingSize(mixed $value): static
    {
        return $this->set('servingSize', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function sodiumContent(mixed $value): static
    {
        return $this->set('sodiumContent', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function sugarContent(mixed $value): static
    {
        return $this->set('sugarContent', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function transFatContent(mixed $value): static
    {
        return $this->set('transFatContent', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function unsaturatedFatContent(mixed $value): static
    {
        return $this->set('unsaturatedFatContent', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
