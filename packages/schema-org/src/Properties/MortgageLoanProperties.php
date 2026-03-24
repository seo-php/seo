<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MortgageLoanProperties extends LoanOrCreditProperties
{
    /**
     * @param bool|bool[] $value
     */
    public function domiciledMortgage(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function loanMortgageMandateAmount(mixed $value): static;
}
