<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DefinedRegionProperties extends StructuredValueProperties
{
    /**
     * @param CountryProperties|CountryProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function addressCountry(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function addressRegion(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function postalCode(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function postalCodePrefix(mixed $value): static;

    /**
     * @param PostalCodeRangeSpecificationProperties|PostalCodeRangeSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function postalCodeRange(mixed $value): static;
}
