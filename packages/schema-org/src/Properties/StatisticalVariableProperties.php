<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\StatisticalVariableProperties as StatisticalVariableProperties1;

interface StatisticalVariableProperties extends ConstraintNodeProperties
{
    /**
     * @param PropertyProperties|PropertyProperties[]|IdReference|IdReference[] $value
     */
    public function measuredProperty(mixed $value): static;

    /**
     * @param StatisticalVariableProperties|StatisticalVariableProperties[]|IdReference|IdReference[] $value
     */
    public function measurementDenominator(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|MeasurementMethodEnumProperties|MeasurementMethodEnumProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function measurementMethod(mixed $value): static;

    /**
     * @param EnumerationProperties|EnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function measurementQualifier(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|MeasurementMethodEnumProperties|MeasurementMethodEnumProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function measurementTechnique(mixed $value): static;

    /**
     * @param Class_Properties|Class_Properties[]|IdReference|IdReference[] $value
     */
    public function populationType(mixed $value): static;

    /**
     * @param PropertyProperties|PropertyProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function statType(mixed $value): static;
}
