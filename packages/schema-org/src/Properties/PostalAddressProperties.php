<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PostalAddressProperties extends ContactPointProperties
{
    /**
     * @param CountryProperties|CountryProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function addressCountry(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function addressLocality(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function addressRegion(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function extendedAddress(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function postOfficeBoxNumber(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function postalCode(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function streetAddress(mixed $value): static;
}
