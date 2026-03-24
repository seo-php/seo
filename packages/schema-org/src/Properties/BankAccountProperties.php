<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BankAccountProperties extends FinancialProductProperties
{
    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function accountMinimumInflow(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function accountOverdraftLimit(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function bankAccountType(mixed $value): static;
}
