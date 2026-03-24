<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MemberProgramTierProperties extends IntangibleProperties
{
    /**
     * @param TierBenefitEnumerationProperties|TierBenefitEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function hasTierBenefit(mixed $value): static;

    /**
     * @param CreditCardProperties|CreditCardProperties[]|MonetaryAmountProperties|MonetaryAmountProperties[]|string|string[]|UnitPriceSpecificationProperties|UnitPriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function hasTierRequirement(mixed $value): static;

    /**
     * @param MemberProgramProperties|MemberProgramProperties[]|IdReference|IdReference[] $value
     */
    public function isTierOf(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function membershipPointsEarned(mixed $value): static;
}
