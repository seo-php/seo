<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\DrugProperties as DrugProperties1;

interface DrugProperties extends SubstanceProperties, ProductProperties
{
    /**
     * @param string|string[] $value
     */
    public function activeIngredient(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function administrationRoute(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function alcoholWarning(mixed $value): static;

    /**
     * @param DrugStrengthProperties|DrugStrengthProperties[]|IdReference|IdReference[] $value
     */
    public function availableStrength(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function breastfeedingWarning(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function clincalPharmacology(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function clinicalPharmacology(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function dosageForm(mixed $value): static;

    /**
     * @param DoseScheduleProperties|DoseScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function doseSchedule(mixed $value): static;

    /**
     * @param DrugClassProperties|DrugClassProperties[]|IdReference|IdReference[] $value
     */
    public function drugClass(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function drugUnit(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function foodWarning(mixed $value): static;

    /**
     * @param HealthInsurancePlanProperties|HealthInsurancePlanProperties[]|IdReference|IdReference[] $value
     */
    public function includedInHealthInsurancePlan(mixed $value): static;

    /**
     * @param DrugProperties|DrugProperties[]|IdReference|IdReference[] $value
     */
    public function interactingDrug(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isAvailableGenerically(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isProprietary(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function labelDetails(mixed $value): static;

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
    public function overdosage(mixed $value): static;

    /**
     * @param DrugPregnancyCategoryProperties|DrugPregnancyCategoryProperties[]|IdReference|IdReference[] $value
     */
    public function pregnancyCategory(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function pregnancyWarning(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function prescribingInfo(mixed $value): static;

    /**
     * @param DrugPrescriptionStatusProperties|DrugPrescriptionStatusProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function prescriptionStatus(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function proprietaryName(mixed $value): static;

    /**
     * @param DrugProperties|DrugProperties[]|IdReference|IdReference[] $value
     */
    public function relatedDrug(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function rxcui(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function warning(mixed $value): static;
}
