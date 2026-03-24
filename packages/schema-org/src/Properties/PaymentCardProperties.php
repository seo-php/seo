<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PaymentCardProperties extends FinancialProductProperties, PaymentMethodProperties
{
    /**
     * @param bool|bool[]|float|float[]|int|int[] $value
     */
    public function cashBack(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function contactlessPayment(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function floorLimit(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function monthlyMinimumRepaymentAmount(mixed $value): static;
}
