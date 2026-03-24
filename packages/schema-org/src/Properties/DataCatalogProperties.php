<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DataCatalogProperties extends CreativeWorkProperties
{
    /**
     * @param DatasetProperties|DatasetProperties[]|IdReference|IdReference[] $value
     */
    public function dataset(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|MeasurementMethodEnumProperties|MeasurementMethodEnumProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function measurementMethod(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|MeasurementMethodEnumProperties|MeasurementMethodEnumProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function measurementTechnique(mixed $value): static;
}
