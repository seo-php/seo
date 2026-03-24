<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DigitalPlatformEnumerationProperties;
use Seo\SchemaOrg\Properties\EntryPointProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\SoftwareApplicationProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class EntryPoint extends Type implements EntryPointProperties
{
    protected function type(): string
    {
        return 'EntryPoint';
    }

    /**
     * @param SoftwareApplicationProperties|SoftwareApplicationProperties[]|IdReference|IdReference[] $value
     */
    public function actionApplication(mixed $value): static
    {
        return $this->set('actionApplication', $value);
    }

    /**
     * @param DigitalPlatformEnumerationProperties|DigitalPlatformEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function actionPlatform(mixed $value): static
    {
        return $this->set('actionPlatform', $value);
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
     * @param SoftwareApplicationProperties|SoftwareApplicationProperties[]|IdReference|IdReference[] $value
     */
    public function application(mixed $value): static
    {
        return $this->set('application', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function contentType(mixed $value): static
    {
        return $this->set('contentType', $value);
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
     * @param string|string[] $value
     */
    public function encodingType(mixed $value): static
    {
        return $this->set('encodingType', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function httpMethod(mixed $value): static
    {
        return $this->set('httpMethod', $value);
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

    /**
     * @param string|string[] $value
     */
    public function urlTemplate(mixed $value): static
    {
        return $this->set('urlTemplate', $value);
    }
}
