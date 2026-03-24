<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\QualitativeValueProperties as QualitativeValueProperties1;

interface QualitativeValueProperties extends EnumerationProperties
{
    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|IdReference|IdReference[] $value
     */
    public function additionalProperty(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function equal(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function greater(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function greaterOrEqual(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function lesser(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function lesserOrEqual(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function nonEqual(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|EnumerationProperties|EnumerationProperties[]|MeasurementTypeEnumerationProperties|MeasurementTypeEnumerationProperties[]|PropertyValueProperties|PropertyValueProperties[]|QualitativeValueProperties|QualitativeValueProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function valueReference(mixed $value): static;
}
