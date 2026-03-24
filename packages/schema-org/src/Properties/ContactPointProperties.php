<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ContactPointProperties extends StructuredValueProperties
{
    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function areaServed(mixed $value): static;

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function availableLanguage(mixed $value): static;

    /**
     * @param ContactPointOptionProperties|ContactPointOptionProperties[]|IdReference|IdReference[] $value
     */
    public function contactOption(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function contactType(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function email(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function faxNumber(mixed $value): static;

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function hoursAvailable(mixed $value): static;

    /**
     * @param ProductProperties|ProductProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function productSupported(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function serviceArea(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function telephone(mixed $value): static;
}
