<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface DatasetProperties extends CreativeWorkProperties
{
    /**
     * @param DataCatalogProperties|DataCatalogProperties[]|IdReference|IdReference[] $value
     */
    public function catalog(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datasetTimeInterval(mixed $value): static;

    /**
     * @param DataDownloadProperties|DataDownloadProperties[]|IdReference|IdReference[] $value
     */
    public function distribution(mixed $value): static;

    /**
     * @param DataCatalogProperties|DataCatalogProperties[]|IdReference|IdReference[] $value
     */
    public function includedDataCatalog(mixed $value): static;

    /**
     * @param DataCatalogProperties|DataCatalogProperties[]|IdReference|IdReference[] $value
     */
    public function includedInDataCatalog(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function issn(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|MeasurementMethodEnumProperties|MeasurementMethodEnumProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function measurementMethod(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|MeasurementMethodEnumProperties|MeasurementMethodEnumProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function measurementTechnique(mixed $value): static;

    /**
     * @param PropertyProperties|PropertyProperties[]|PropertyValueProperties|PropertyValueProperties[]|StatisticalVariableProperties|StatisticalVariableProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function variableMeasured(mixed $value): static;

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function variablesMeasured(mixed $value): static;
}
