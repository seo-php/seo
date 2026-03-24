<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface GeoCoordinatesProperties extends StructuredValueProperties
{
    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function address(mixed $value): static;

    /**
     * @param CountryProperties|CountryProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function addressCountry(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function elevation(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function latitude(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function longitude(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function postalCode(mixed $value): static;
}
