<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AdministrativeAreaProperties;
use Seo\SchemaOrg\Properties\CategoryCodeProperties;
use Seo\SchemaOrg\Properties\ContactPointProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\EducationalOccupationalCredentialProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\JobPostingProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountDistributionProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountProperties;
use Seo\SchemaOrg\Properties\OccupationProperties;
use Seo\SchemaOrg\Properties\OccupationalExperienceRequirementsProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\PriceSpecificationProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class JobPosting extends Type implements JobPostingProperties
{
    protected function type(): string
    {
        return 'JobPosting';
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
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function applicantLocationRequirements(mixed $value): static
    {
        return $this->set('applicantLocationRequirements', $value);
    }

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function applicationContact(mixed $value): static
    {
        return $this->set('applicationContact', $value);
    }

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function baseSalary(mixed $value): static
    {
        return $this->set('baseSalary', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function benefits(mixed $value): static
    {
        return $this->set('benefits', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datePosted(mixed $value): static
    {
        return $this->set('datePosted', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function directApply(mixed $value): static
    {
        return $this->set('directApply', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
    }

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationRequirements(mixed $value): static
    {
        return $this->set('educationRequirements', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function eligibilityToWorkRequirement(mixed $value): static
    {
        return $this->set('eligibilityToWorkRequirement', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function employerOverview(mixed $value): static
    {
        return $this->set('employerOverview', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function employmentType(mixed $value): static
    {
        return $this->set('employmentType', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function employmentUnit(mixed $value): static
    {
        return $this->set('employmentUnit', $value);
    }

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|MonetaryAmountDistributionProperties|MonetaryAmountDistributionProperties[]|IdReference|IdReference[] $value
     */
    public function estimatedSalary(mixed $value): static
    {
        return $this->set('estimatedSalary', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function experienceInPlaceOfEducation(mixed $value): static
    {
        return $this->set('experienceInPlaceOfEducation', $value);
    }

    /**
     * @param OccupationalExperienceRequirementsProperties|OccupationalExperienceRequirementsProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function experienceRequirements(mixed $value): static
    {
        return $this->set('experienceRequirements', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function hiringOrganization(mixed $value): static
    {
        return $this->set('hiringOrganization', $value);
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
     * @param string|string[] $value
     */
    public function incentiveCompensation(mixed $value): static
    {
        return $this->set('incentiveCompensation', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function incentives(mixed $value): static
    {
        return $this->set('incentives', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function industry(mixed $value): static
    {
        return $this->set('industry', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function jobBenefits(mixed $value): static
    {
        return $this->set('jobBenefits', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function jobImmediateStart(mixed $value): static
    {
        return $this->set('jobImmediateStart', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function jobLocation(mixed $value): static
    {
        return $this->set('jobLocation', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function jobLocationType(mixed $value): static
    {
        return $this->set('jobLocationType', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function jobStartDate(mixed $value): static
    {
        return $this->set('jobStartDate', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCategory(mixed $value): static
    {
        return $this->set('occupationalCategory', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function physicalRequirement(mixed $value): static
    {
        return $this->set('physicalRequirement', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function qualifications(mixed $value): static
    {
        return $this->set('qualifications', $value);
    }

    /**
     * @param OccupationProperties|OccupationProperties[]|IdReference|IdReference[] $value
     */
    public function relevantOccupation(mixed $value): static
    {
        return $this->set('relevantOccupation', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function responsibilities(mixed $value): static
    {
        return $this->set('responsibilities', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function salaryCurrency(mixed $value): static
    {
        return $this->set('salaryCurrency', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function securityClearanceRequirement(mixed $value): static
    {
        return $this->set('securityClearanceRequirement', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function sensoryRequirement(mixed $value): static
    {
        return $this->set('sensoryRequirement', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function skills(mixed $value): static
    {
        return $this->set('skills', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function specialCommitments(mixed $value): static
    {
        return $this->set('specialCommitments', $value);
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
    public function title(mixed $value): static
    {
        return $this->set('title', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function totalJobOpenings(mixed $value): static
    {
        return $this->set('totalJobOpenings', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validThrough(mixed $value): static
    {
        return $this->set('validThrough', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function workHours(mixed $value): static
    {
        return $this->set('workHours', $value);
    }
}
