<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface MerchantReturnPolicySeasonalOverrideProperties extends IntangibleProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[]|int|int[] $value
     */
    public function merchantReturnDays(mixed $value): static;

    /**
     * @param RefundTypeEnumerationProperties|RefundTypeEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function refundType(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function restockingFee(mixed $value): static;

    /**
     * @param ReturnFeesEnumerationProperties|ReturnFeesEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnFees(mixed $value): static;

    /**
     * @param ReturnMethodEnumerationProperties|ReturnMethodEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnMethod(mixed $value): static;

    /**
     * @param MerchantReturnEnumerationProperties|MerchantReturnEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function returnPolicyCategory(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function returnShippingFeesAmount(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static;
}
