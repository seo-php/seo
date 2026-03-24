<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface ObservationProperties extends IntangibleProperties, QuantitativeValueProperties
{
    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function marginOfError(mixed $value): static;

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
     * @param PlaceProperties|PlaceProperties[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function observationAbout(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function observationDate(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function observationPeriod(mixed $value): static;

    /**
     * @param PropertyProperties|PropertyProperties[]|PropertyValueProperties|PropertyValueProperties[]|StatisticalVariableProperties|StatisticalVariableProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function variableMeasured(mixed $value): static;
}
