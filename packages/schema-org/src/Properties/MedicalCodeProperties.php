<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface MedicalCodeProperties extends MedicalIntangibleProperties, CategoryCodeProperties
{
    /**
     * @param string|string[] $value
     */
    public function codeValue(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function codingSystem(mixed $value): static;
}
