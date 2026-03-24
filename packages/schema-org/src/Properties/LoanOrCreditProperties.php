<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface LoanOrCreditProperties extends FinancialProductProperties
{
    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function amount(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function currency(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function gracePeriod(mixed $value): static;

    /**
     * @param RepaymentSpecificationProperties|RepaymentSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function loanRepaymentForm(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function loanTerm(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function loanType(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function recourseLoan(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function renegotiableLoan(mixed $value): static;

    /**
     * @param string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function requiredCollateral(mixed $value): static;
}
