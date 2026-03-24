<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface JobPostingProperties extends IntangibleProperties
{
    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function applicantLocationRequirements(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function applicationContact(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function baseSalary(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function benefits(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datePosted(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function directApply(mixed $value): static;

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationRequirements(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function eligibilityToWorkRequirement(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function employerOverview(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function employmentType(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function employmentUnit(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|MonetaryAmountDistributionProperties|MonetaryAmountDistributionProperties[]|IdReference|IdReference[] $value
     */
    public function estimatedSalary(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function experienceInPlaceOfEducation(mixed $value): static;

    /**
     * @param OccupationalExperienceRequirementsProperties|OccupationalExperienceRequirementsProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function experienceRequirements(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function hiringOrganization(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function incentiveCompensation(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function incentives(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function industry(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function jobBenefits(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function jobImmediateStart(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function jobLocation(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function jobLocationType(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function jobStartDate(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCategory(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function physicalRequirement(mixed $value): static;

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function qualifications(mixed $value): static;

    /**
     * @param OccupationProperties|OccupationProperties[]|IdReference|IdReference[] $value
     */
    public function relevantOccupation(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function responsibilities(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function salaryCurrency(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function securityClearanceRequirement(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function sensoryRequirement(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function skills(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function specialCommitments(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function title(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function totalJobOpenings(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validThrough(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function workHours(mixed $value): static;
}
