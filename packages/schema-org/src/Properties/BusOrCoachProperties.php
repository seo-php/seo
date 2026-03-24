<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BusOrCoachProperties extends VehicleProperties
{
    /**
     * @param string|string[] $value
     */
    public function acrissCode(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function roofLoad(mixed $value): static;
}
