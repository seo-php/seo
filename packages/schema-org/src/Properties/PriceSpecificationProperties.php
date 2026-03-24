<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\PriceSpecificationProperties as PriceSpecificationProperties1;

interface PriceSpecificationProperties extends StructuredValueProperties
{
    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleQuantity(mixed $value): static;

    /**
     * @param PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function eligibleTransactionVolume(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function maxPrice(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function membershipPointsEarned(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function minPrice(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function price(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function priceCurrency(mixed $value): static;

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|IdReference|IdReference[] $value
     */
    public function validForMemberTier(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validFrom(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validThrough(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function valueAddedTaxIncluded(mixed $value): static;
}
