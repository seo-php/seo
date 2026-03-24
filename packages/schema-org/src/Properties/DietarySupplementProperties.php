<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DietarySupplementProperties extends SubstanceProperties, ProductProperties
{
    /**
     * @param string|string[] $value
     */
    public function activeIngredient(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isProprietary(mixed $value): static;

    /**
     * @param DrugLegalStatusProperties|DrugLegalStatusProperties[]|MedicalEnumerationProperties|MedicalEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function legalStatus(mixed $value): static;

    /**
     * @param MaximumDoseScheduleProperties|MaximumDoseScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function maximumIntake(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function mechanismOfAction(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function nonProprietaryName(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function proprietaryName(mixed $value): static;

    /**
     * @param RecommendedDoseScheduleProperties|RecommendedDoseScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function recommendedIntake(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function safetyConsideration(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function targetPopulation(mixed $value): static;
}
