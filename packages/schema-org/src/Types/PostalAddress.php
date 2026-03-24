<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AdministrativeAreaProperties;
use Seo\SchemaOrg\Properties\ContactPointOptionProperties;
use Seo\SchemaOrg\Properties\CountryProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GeoShapeProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\LanguageProperties;
use Seo\SchemaOrg\Properties\OpeningHoursSpecificationProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\PostalAddressProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class PostalAddress extends Type implements PostalAddressProperties
{
    protected function type(): string
    {
        return 'PostalAddress';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param CountryProperties|CountryProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function addressCountry(mixed $value): static
    {
        return $this->set('addressCountry', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function addressLocality(mixed $value): static
    {
        return $this->set('addressLocality', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function addressRegion(mixed $value): static
    {
        return $this->set('addressRegion', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function areaServed(mixed $value): static
    {
        return $this->set('areaServed', $value);
    }

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function availableLanguage(mixed $value): static
    {
        return $this->set('availableLanguage', $value);
    }

    /**
     * @param ContactPointOptionProperties|ContactPointOptionProperties[]|IdReference|IdReference[] $value
     */
    public function contactOption(mixed $value): static
    {
        return $this->set('contactOption', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function contactType(mixed $value): static
    {
        return $this->set('contactType', $value);
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
    public function email(mixed $value): static
    {
        return $this->set('email', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function extendedAddress(mixed $value): static
    {
        return $this->set('extendedAddress', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function faxNumber(mixed $value): static
    {
        return $this->set('faxNumber', $value);
    }

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function hoursAvailable(mixed $value): static
    {
        return $this->set('hoursAvailable', $value);
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
     * @param string|string[] $value
     */
    public function postOfficeBoxNumber(mixed $value): static
    {
        return $this->set('postOfficeBoxNumber', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function postalCode(mixed $value): static
    {
        return $this->set('postalCode', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param ProductProperties|ProductProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function productSupported(mixed $value): static
    {
        return $this->set('productSupported', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function serviceArea(mixed $value): static
    {
        return $this->set('serviceArea', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function streetAddress(mixed $value): static
    {
        return $this->set('streetAddress', $value);
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
    public function telephone(mixed $value): static
    {
        return $this->set('telephone', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
