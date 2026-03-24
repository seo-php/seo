<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface EnergyConsumptionDetailsProperties extends IntangibleProperties
{
    /**
     * @param EUEnergyEfficiencyEnumerationProperties|EUEnergyEfficiencyEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function energyEfficiencyScaleMax(mixed $value): static;

    /**
     * @param EUEnergyEfficiencyEnumerationProperties|EUEnergyEfficiencyEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function energyEfficiencyScaleMin(mixed $value): static;

    /**
     * @param EnergyEfficiencyEnumerationProperties|EnergyEfficiencyEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function hasEnergyEfficiencyCategory(mixed $value): static;
}
