<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AnatomicalStructureProperties;
use Seo\SchemaOrg\Properties\AnatomicalSystemProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DDxElementProperties;
use Seo\SchemaOrg\Properties\DrugLegalStatusProperties;
use Seo\SchemaOrg\Properties\DrugProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\EventStatusTypeProperties;
use Seo\SchemaOrg\Properties\GrantProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MedicalCodeProperties;
use Seo\SchemaOrg\Properties\MedicalConditionStageProperties;
use Seo\SchemaOrg\Properties\MedicalEnumerationProperties;
use Seo\SchemaOrg\Properties\MedicalGuidelineProperties;
use Seo\SchemaOrg\Properties\MedicalRiskFactorProperties;
use Seo\SchemaOrg\Properties\MedicalSignOrSymptomProperties;
use Seo\SchemaOrg\Properties\MedicalSignProperties;
use Seo\SchemaOrg\Properties\MedicalSpecialtyProperties;
use Seo\SchemaOrg\Properties\MedicalStudyProperties;
use Seo\SchemaOrg\Properties\MedicalStudyStatusProperties;
use Seo\SchemaOrg\Properties\MedicalTestProperties;
use Seo\SchemaOrg\Properties\MedicalTherapyProperties;
use Seo\SchemaOrg\Properties\MedicineSystemProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PhysicalExamProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\SuperficialAnatomyProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class MedicalSign extends Type implements MedicalSignProperties
{
    protected function type(): string
    {
        return 'MedicalSign';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|AnatomicalSystemProperties|AnatomicalSystemProperties[]|SuperficialAnatomyProperties|SuperficialAnatomyProperties[]|IdReference|IdReference[] $value
     */
    public function associatedAnatomy(mixed $value): static
    {
        return $this->set('associatedAnatomy', $value);
    }

    /**
     * @param MedicalCodeProperties|MedicalCodeProperties[]|IdReference|IdReference[] $value
     */
    public function code(mixed $value): static
    {
        return $this->set('code', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param DDxElementProperties|DDxElementProperties[]|IdReference|IdReference[] $value
     */
    public function differentialDiagnosis(mixed $value): static
    {
        return $this->set('differentialDiagnosis', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
    }

    /**
     * @param DrugProperties|DrugProperties[]|IdReference|IdReference[] $value
     */
    public function drug(mixed $value): static
    {
        return $this->set('drug', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function epidemiology(mixed $value): static
    {
        return $this->set('epidemiology', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function expectedPrognosis(mixed $value): static
    {
        return $this->set('expectedPrognosis', $value);
    }

    /**
     * @param GrantProperties|GrantProperties[]|IdReference|IdReference[] $value
     */
    public function funding(mixed $value): static
    {
        return $this->set('funding', $value);
    }

    /**
     * @param MedicalGuidelineProperties|MedicalGuidelineProperties[]|IdReference|IdReference[] $value
     */
    public function guideline(mixed $value): static
    {
        return $this->set('guideline', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function identifier(mixed $value): static
    {
        return $this->set('identifier', $value);
    }

    /**
     * @param PhysicalExamProperties|PhysicalExamProperties[]|IdReference|IdReference[] $value
     */
    public function identifyingExam(mixed $value): static
    {
        return $this->set('identifyingExam', $value);
    }

    /**
     * @param MedicalTestProperties|MedicalTestProperties[]|IdReference|IdReference[] $value
     */
    public function identifyingTest(mixed $value): static
    {
        return $this->set('identifyingTest', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static
    {
        return $this->set('image', $value);
    }

    /**
     * @param DrugLegalStatusProperties|DrugLegalStatusProperties[]|MedicalEnumerationProperties|MedicalEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function legalStatus(mixed $value): static
    {
        return $this->set('legalStatus', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param MedicineSystemProperties|MedicineSystemProperties[]|IdReference|IdReference[] $value
     */
    public function medicineSystem(mixed $value): static
    {
        return $this->set('medicineSystem', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function naturalProgression(mixed $value): static
    {
        return $this->set('naturalProgression', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function pathophysiology(mixed $value): static
    {
        return $this->set('pathophysiology', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function possibleComplication(mixed $value): static
    {
        return $this->set('possibleComplication', $value);
    }

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function possibleTreatment(mixed $value): static
    {
        return $this->set('possibleTreatment', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function primaryPrevention(mixed $value): static
    {
        return $this->set('primaryPrevention', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function recognizingAuthority(mixed $value): static
    {
        return $this->set('recognizingAuthority', $value);
    }

    /**
     * @param MedicalSpecialtyProperties|MedicalSpecialtyProperties[]|IdReference|IdReference[] $value
     */
    public function relevantSpecialty(mixed $value): static
    {
        return $this->set('relevantSpecialty', $value);
    }

    /**
     * @param MedicalRiskFactorProperties|MedicalRiskFactorProperties[]|IdReference|IdReference[] $value
     */
    public function riskFactor(mixed $value): static
    {
        return $this->set('riskFactor', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function secondaryPrevention(mixed $value): static
    {
        return $this->set('secondaryPrevention', $value);
    }

    /**
     * @param MedicalSignOrSymptomProperties|MedicalSignOrSymptomProperties[]|IdReference|IdReference[] $value
     */
    public function signOrSymptom(mixed $value): static
    {
        return $this->set('signOrSymptom', $value);
    }

    /**
     * @param MedicalConditionStageProperties|MedicalConditionStageProperties[]|IdReference|IdReference[] $value
     */
    public function stage(mixed $value): static
    {
        return $this->set('stage', $value);
    }

    /**
     * @param EventStatusTypeProperties|EventStatusTypeProperties[]|MedicalStudyStatusProperties|MedicalStudyStatusProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function status(mixed $value): static
    {
        return $this->set('status', $value);
    }

    /**
     * @param MedicalStudyProperties|MedicalStudyProperties[]|IdReference|IdReference[] $value
     */
    public function study(mixed $value): static
    {
        return $this->set('study', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param MedicalTestProperties|MedicalTestProperties[]|IdReference|IdReference[] $value
     */
    public function typicalTest(mixed $value): static
    {
        return $this->set('typicalTest', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
