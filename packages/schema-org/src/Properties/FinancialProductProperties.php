<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface FinancialProductProperties extends ServiceProperties
{
    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function annualPercentageRate(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function feesAndCommissionsSpecification(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function interestRate(mixed $value): static;
}
