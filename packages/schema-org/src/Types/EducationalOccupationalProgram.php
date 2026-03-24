<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AlignmentObjectProperties;
use Seo\SchemaOrg\Properties\CategoryCodeProperties;
use Seo\SchemaOrg\Properties\CourseProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DayOfWeekProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\DemandProperties;
use Seo\SchemaOrg\Properties\DurationProperties;
use Seo\SchemaOrg\Properties\EducationalOccupationalCredentialProperties;
use Seo\SchemaOrg\Properties\EducationalOccupationalProgramProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountDistributionProperties;
use Seo\SchemaOrg\Properties\OfferProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\StructuredValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class EducationalOccupationalProgram extends Type implements EducationalOccupationalProgramProperties
{
    protected function type(): string
    {
        return 'EducationalOccupationalProgram';
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
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function applicationDeadline(mixed $value): static
    {
        return $this->set('applicationDeadline', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function applicationStartDate(mixed $value): static
    {
        return $this->set('applicationStartDate', $value);
    }

    /**
     * @param DayOfWeekProperties|DayOfWeekProperties[]|IdReference|IdReference[] $value
     */
    public function dayOfWeek(mixed $value): static
    {
        return $this->set('dayOfWeek', $value);
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
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationalCredentialAwarded(mixed $value): static
    {
        return $this->set('educationalCredentialAwarded', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function educationalProgramMode(mixed $value): static
    {
        return $this->set('educationalProgramMode', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static
    {
        return $this->set('endDate', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function financialAidEligible(mixed $value): static
    {
        return $this->set('financialAidEligible', $value);
    }

    /**
     * @param CourseProperties|CourseProperties[]|IdReference|IdReference[] $value
     */
    public function hasCourse(mixed $value): static
    {
        return $this->set('hasCourse', $value);
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
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function maximumEnrollment(mixed $value): static
    {
        return $this->set('maximumEnrollment', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param int|int[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfCredits(mixed $value): static
    {
        return $this->set('numberOfCredits', $value);
    }

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCategory(mixed $value): static
    {
        return $this->set('occupationalCategory', $value);
    }

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCredentialAwarded(mixed $value): static
    {
        return $this->set('occupationalCredentialAwarded', $value);
    }

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static
    {
        return $this->set('offers', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param AlignmentObjectProperties|AlignmentObjectProperties[]|CourseProperties|CourseProperties[]|EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function programPrerequisites(mixed $value): static
    {
        return $this->set('programPrerequisites', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function programType(mixed $value): static
    {
        return $this->set('programType', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static
    {
        return $this->set('provider', $value);
    }

    /**
     * @param MonetaryAmountDistributionProperties|MonetaryAmountDistributionProperties[]|IdReference|IdReference[] $value
     */
    public function salaryUponCompletion(mixed $value): static
    {
        return $this->set('salaryUponCompletion', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static
    {
        return $this->set('startDate', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function termDuration(mixed $value): static
    {
        return $this->set('termDuration', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function termsPerYear(mixed $value): static
    {
        return $this->set('termsPerYear', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function timeOfDay(mixed $value): static
    {
        return $this->set('timeOfDay', $value);
    }

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function timeToComplete(mixed $value): static
    {
        return $this->set('timeToComplete', $value);
    }

    /**
     * @param MonetaryAmountDistributionProperties|MonetaryAmountDistributionProperties[]|IdReference|IdReference[] $value
     */
    public function trainingSalary(mixed $value): static
    {
        return $this->set('trainingSalary', $value);
    }

    /**
     * @param int|int[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function typicalCreditsPerTerm(mixed $value): static
    {
        return $this->set('typicalCreditsPerTerm', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
