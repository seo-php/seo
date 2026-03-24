<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface OccupationProperties extends IntangibleProperties
{
    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationRequirements(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|MonetaryAmountDistributionProperties|MonetaryAmountDistributionProperties[]|IdReference|IdReference[] $value
     */
    public function estimatedSalary(mixed $value): static;

    /**
     * @param OccupationalExperienceRequirementsProperties|OccupationalExperienceRequirementsProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function experienceRequirements(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function occupationLocation(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCategory(mixed $value): static;

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function qualifications(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function responsibilities(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function skills(mixed $value): static;
}
