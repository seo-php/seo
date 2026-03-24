<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SizeSpecificationProperties extends QualitativeValueProperties
{
    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function hasMeasurement(mixed $value): static;

    /**
     * @param SizeGroupEnumerationProperties|SizeGroupEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function sizeGroup(mixed $value): static;

    /**
     * @param SizeSystemEnumerationProperties|SizeSystemEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function sizeSystem(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function suggestedAge(mixed $value): static;

    /**
     * @param GenderTypeProperties|GenderTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function suggestedGender(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function suggestedMeasurement(mixed $value): static;
}
