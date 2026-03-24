<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface PostalCodeRangeSpecificationProperties extends StructuredValueProperties
{
    /**
     * @param string|string[] $value
     */
    public function postalCodeBegin(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function postalCodeEnd(mixed $value): static;
}
