<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface EmployeeRoleProperties extends OrganizationRoleProperties
{
    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function baseSalary(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function salaryCurrency(mixed $value): static;
}
