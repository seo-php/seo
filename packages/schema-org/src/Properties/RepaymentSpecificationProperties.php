<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface RepaymentSpecificationProperties extends StructuredValueProperties
{
    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function downPayment(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function earlyPrepaymentPenalty(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function loanPaymentAmount(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function loanPaymentFrequency(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function numberOfLoanPayments(mixed $value): static;
}
