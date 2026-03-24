<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\CourseProperties as CourseProperties1;

interface CourseProperties extends LearningResourceProperties, CreativeWorkProperties
{
    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function availableLanguage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function courseCode(mixed $value): static;

    /**
     * @param AlignmentObjectProperties|AlignmentObjectProperties[]|CourseProperties|CourseProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function coursePrerequisites(mixed $value): static;

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationalCredentialAwarded(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function financialAidEligible(mixed $value): static;

    /**
     * @param CourseInstanceProperties|CourseInstanceProperties[]|IdReference|IdReference[] $value
     */
    public function hasCourseInstance(mixed $value): static;

    /**
     * @param int|int[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfCredits(mixed $value): static;

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCredentialAwarded(mixed $value): static;

    /**
     * @param SyllabusProperties|SyllabusProperties[]|IdReference|IdReference[] $value
     */
    public function syllabusSections(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function totalHistoricalEnrollment(mixed $value): static;
}
