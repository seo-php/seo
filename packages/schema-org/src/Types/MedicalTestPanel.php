<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DrugLegalStatusProperties;
use Seo\SchemaOrg\Properties\DrugProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GrantProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MedicalCodeProperties;
use Seo\SchemaOrg\Properties\MedicalConditionProperties;
use Seo\SchemaOrg\Properties\MedicalDeviceProperties;
use Seo\SchemaOrg\Properties\MedicalEnumerationProperties;
use Seo\SchemaOrg\Properties\MedicalGuidelineProperties;
use Seo\SchemaOrg\Properties\MedicalSignProperties;
use Seo\SchemaOrg\Properties\MedicalSpecialtyProperties;
use Seo\SchemaOrg\Properties\MedicalStudyProperties;
use Seo\SchemaOrg\Properties\MedicalTestPanelProperties;
use Seo\SchemaOrg\Properties\MedicalTestProperties;
use Seo\SchemaOrg\Properties\MedicineSystemProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class MedicalTestPanel extends Type implements MedicalTestPanelProperties
{
    protected function type(): string
    {
        return 'MedicalTestPanel';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param DrugProperties|DrugProperties[]|IdReference|IdReference[] $value
     */
    public function affectedBy(mixed $value): static
    {
        return $this->set('affectedBy', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
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
     * @param MedicalEnumerationProperties|MedicalEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function normalRange(mixed $value): static
    {
        return $this->set('normalRange', $value);
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
     * @param MedicalSignProperties|MedicalSignProperties[]|IdReference|IdReference[] $value
     */
    public function signDetected(mixed $value): static
    {
        return $this->set('signDetected', $value);
    }

    /**
     * @param MedicalStudyProperties|MedicalStudyProperties[]|IdReference|IdReference[] $value
     */
    public function study(mixed $value): static
    {
        return $this->set('study', $value);
    }

    /**
     * @param MedicalTestProperties|MedicalTestProperties[]|IdReference|IdReference[] $value
     */
    public function subTest(mixed $value): static
    {
        return $this->set('subTest', $value);
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

    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|IdReference|IdReference[] $value
     */
    public function usedToDiagnose(mixed $value): static
    {
        return $this->set('usedToDiagnose', $value);
    }

    /**
     * @param MedicalDeviceProperties|MedicalDeviceProperties[]|IdReference|IdReference[] $value
     */
    public function usesDevice(mixed $value): static
    {
        return $this->set('usesDevice', $value);
    }
}
