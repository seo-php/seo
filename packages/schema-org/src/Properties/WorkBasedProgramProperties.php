<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface WorkBasedProgramProperties extends EducationalOccupationalProgramProperties
{
    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function occupationalCategory(mixed $value): static;

    /**
     * @param MonetaryAmountDistributionProperties|MonetaryAmountDistributionProperties[]|IdReference|IdReference[] $value
     */
    public function trainingSalary(mixed $value): static;
}
