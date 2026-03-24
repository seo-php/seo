<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalConditionProperties extends MedicalEntityProperties
{
    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|AnatomicalSystemProperties|AnatomicalSystemProperties[]|SuperficialAnatomyProperties|SuperficialAnatomyProperties[]|IdReference|IdReference[] $value
     */
    public function associatedAnatomy(mixed $value): static;

    /**
     * @param DDxElementProperties|DDxElementProperties[]|IdReference|IdReference[] $value
     */
    public function differentialDiagnosis(mixed $value): static;

    /**
     * @param DrugProperties|DrugProperties[]|IdReference|IdReference[] $value
     */
    public function drug(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function epidemiology(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function expectedPrognosis(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function naturalProgression(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function pathophysiology(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function possibleComplication(mixed $value): static;

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function possibleTreatment(mixed $value): static;

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function primaryPrevention(mixed $value): static;

    /**
     * @param MedicalRiskFactorProperties|MedicalRiskFactorProperties[]|IdReference|IdReference[] $value
     */
    public function riskFactor(mixed $value): static;

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function secondaryPrevention(mixed $value): static;

    /**
     * @param MedicalSignOrSymptomProperties|MedicalSignOrSymptomProperties[]|IdReference|IdReference[] $value
     */
    public function signOrSymptom(mixed $value): static;

    /**
     * @param MedicalConditionStageProperties|MedicalConditionStageProperties[]|IdReference|IdReference[] $value
     */
    public function stage(mixed $value): static;

    /**
     * @param EventStatusTypeProperties|EventStatusTypeProperties[]|MedicalStudyStatusProperties|MedicalStudyStatusProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function status(mixed $value): static;

    /**
     * @param MedicalTestProperties|MedicalTestProperties[]|IdReference|IdReference[] $value
     */
    public function typicalTest(mixed $value): static;
}
