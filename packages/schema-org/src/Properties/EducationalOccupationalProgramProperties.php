<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface EducationalOccupationalProgramProperties extends IntangibleProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function applicationDeadline(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function applicationStartDate(mixed $value): static;

    /**
     * @param DayOfWeekProperties|DayOfWeekProperties[]|IdReference|IdReference[] $value
     */
    public function dayOfWeek(mixed $value): static;

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationalCredentialAwarded(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function educationalProgramMode(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function financialAidEligible(mixed $value): static;

    /**
     * @param CourseProperties|CourseProperties[]|IdReference|IdReference[] $value
     */
    public function hasCourse(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function maximumEnrollment(mixed $value): static;

    /**
     * @param int|int[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfCredits(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCategory(mixed $value): static;

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCredentialAwarded(mixed $value): static;

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static;

    /**
     * @param AlignmentObjectProperties|AlignmentObjectProperties[]|CourseProperties|CourseProperties[]|EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function programPrerequisites(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function programType(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static;

    /**
     * @param MonetaryAmountDistributionProperties|MonetaryAmountDistributionProperties[]|IdReference|IdReference[] $value
     */
    public function salaryUponCompletion(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function termDuration(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function termsPerYear(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function timeOfDay(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function timeToComplete(mixed $value): static;

    /**
     * @param MonetaryAmountDistributionProperties|MonetaryAmountDistributionProperties[]|IdReference|IdReference[] $value
     */
    public function trainingSalary(mixed $value): static;

    /**
     * @param int|int[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function typicalCreditsPerTerm(mixed $value): static;
}
