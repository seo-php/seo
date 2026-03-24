<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface NutritionInformationProperties extends StructuredValueProperties
{
    /**
     * @param EnergyProperties|EnergyProperties[]|IdReference|IdReference[] $value
     */
    public function calories(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function carbohydrateContent(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function cholesterolContent(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function fatContent(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function fiberContent(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function proteinContent(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function saturatedFatContent(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function servingSize(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function sodiumContent(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function sugarContent(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function transFatContent(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|IdReference|IdReference[] $value
     */
    public function unsaturatedFatContent(mixed $value): static;
}
