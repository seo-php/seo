<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DrugCostProperties extends MedicalEntityProperties
{
    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function applicableLocation(mixed $value): static;

    /**
     * @param DrugCostCategoryProperties|DrugCostCategoryProperties[]|IdReference|IdReference[] $value
     */
    public function costCategory(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function costCurrency(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function costOrigin(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QualitativeValueProperties|QualitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function costPerUnit(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function drugUnit(mixed $value): static;
}
