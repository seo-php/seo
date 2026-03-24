<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties as QuantitativeValueProperties1;

interface QuantitativeValueProperties extends StructuredValueProperties
{
    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|IdReference|IdReference[] $value
     */
    public function additionalProperty(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function maxValue(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function minValue(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function unitCode(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function unitText(mixed $value): static;

    /**
     * @param bool|bool[]|float|float[]|int|int[]|string|string[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function value(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|EnumerationProperties|EnumerationProperties[]|MeasurementTypeEnumerationProperties|MeasurementTypeEnumerationProperties[]|PropertyValueProperties|PropertyValueProperties[]|QualitativeValueProperties|QualitativeValueProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function valueReference(mixed $value): static;
}
