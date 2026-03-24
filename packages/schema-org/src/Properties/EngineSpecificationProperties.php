<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface EngineSpecificationProperties extends StructuredValueProperties
{
    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function engineDisplacement(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function enginePower(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function engineType(mixed $value): static;

    /**
     * @param QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function fuelType(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function torque(mixed $value): static;
}
