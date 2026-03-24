<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ServiceChannelProperties extends IntangibleProperties
{
    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function availableLanguage(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function processingTime(mixed $value): static;

    /**
     * @param ServiceProperties|ServiceProperties[]|IdReference|IdReference[] $value
     */
    public function providesService(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function serviceLocation(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function servicePhone(mixed $value): static;

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|IdReference|IdReference[] $value
     */
    public function servicePostalAddress(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function serviceSmsNumber(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function serviceUrl(mixed $value): static;
}
