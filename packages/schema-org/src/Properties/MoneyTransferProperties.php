<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MoneyTransferProperties extends TransferActionProperties
{
    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function amount(mixed $value): static;

    /**
     * @param BankOrCreditUnionProperties|BankOrCreditUnionProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function beneficiaryBank(mixed $value): static;
}
