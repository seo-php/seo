<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AnatomicalStructureProperties;
use Seo\SchemaOrg\Properties\AnatomicalSystemProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DrugLegalStatusProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GrantProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MedicalCodeProperties;
use Seo\SchemaOrg\Properties\MedicalConditionProperties;
use Seo\SchemaOrg\Properties\MedicalEnumerationProperties;
use Seo\SchemaOrg\Properties\MedicalGuidelineProperties;
use Seo\SchemaOrg\Properties\MedicalSpecialtyProperties;
use Seo\SchemaOrg\Properties\MedicalStudyProperties;
use Seo\SchemaOrg\Properties\MedicalTherapyProperties;
use Seo\SchemaOrg\Properties\MedicineSystemProperties;
use Seo\SchemaOrg\Properties\MuscleProperties;
use Seo\SchemaOrg\Properties\NerveProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\VesselProperties;
use Seo\SchemaOrg\Type;

final class Muscle extends Type implements MuscleProperties
{
    protected function type(): string
    {
        return 'Muscle';
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
     * @param MuscleProperties|MuscleProperties[]|IdReference|IdReference[] $value
     */
    public function antagonist(mixed $value): static
    {
        return $this->set('antagonist', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function associatedPathophysiology(mixed $value): static
    {
        return $this->set('associatedPathophysiology', $value);
    }

    /**
     * @param VesselProperties|VesselProperties[]|IdReference|IdReference[] $value
     */
    public function bloodSupply(mixed $value): static
    {
        return $this->set('bloodSupply', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function bodyLocation(mixed $value): static
    {
        return $this->set('bodyLocation', $value);
    }

    /**
     * @param MedicalCodeProperties|MedicalCodeProperties[]|IdReference|IdReference[] $value
     */
    public function code(mixed $value): static
    {
        return $this->set('code', $value);
    }

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function connectedTo(mixed $value): static
    {
        return $this->set('connectedTo', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|IdReference|IdReference[] $value
     */
    public function diagram(mixed $value): static
    {
        return $this->set('diagram', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
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
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static
    {
        return $this->set('image', $value);
    }

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function insertion(mixed $value): static
    {
        return $this->set('insertion', $value);
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
    public function muscleAction(mixed $value): static
    {
        return $this->set('muscleAction', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param NerveProperties|NerveProperties[]|IdReference|IdReference[] $value
     */
    public function nerve(mixed $value): static
    {
        return $this->set('nerve', $value);
    }

    /**
     * @param AnatomicalSystemProperties|AnatomicalSystemProperties[]|IdReference|IdReference[] $value
     */
    public function partOfSystem(mixed $value): static
    {
        return $this->set('partOfSystem', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function recognizingAuthority(mixed $value): static
    {
        return $this->set('recognizingAuthority', $value);
    }

    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function relatedCondition(mixed $value): static
    {
        return $this->set('relatedCondition', $value);
    }

    /**
     * @param MedicalTherapyProperties|MedicalTherapyProperties[]|IdReference|IdReference[] $value
     */
    public function relatedTherapy(mixed $value): static
    {
        return $this->set('relatedTherapy', $value);
    }

    /**
     * @param MedicalSpecialtyProperties|MedicalSpecialtyProperties[]|IdReference|IdReference[] $value
     */
    public function relevantSpecialty(mixed $value): static
    {
        return $this->set('relevantSpecialty', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param MedicalStudyProperties|MedicalStudyProperties[]|IdReference|IdReference[] $value
     */
    public function study(mixed $value): static
    {
        return $this->set('study', $value);
    }

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|IdReference|IdReference[] $value
     */
    public function subStructure(mixed $value): static
    {
        return $this->set('subStructure', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
