<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HealthPlanCostSharingSpecificationProperties extends IntangibleProperties
{
    /**
     * @param string|string[] $value
     */
    public function healthPlanCoinsuranceOption(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function healthPlanCoinsuranceRate(mixed $value): static;

    /**
     * @param PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function healthPlanCopay(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function healthPlanCopayOption(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function healthPlanPharmacyCategory(mixed $value): static;
}
