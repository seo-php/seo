<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface HealthInsurancePlanProperties extends IntangibleProperties
{
    /**
     * @param string|string[] $value
     */
    public function benefitsSummaryUrl(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function contactPoint(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function healthPlanDrugOption(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function healthPlanDrugTier(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function healthPlanId(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function healthPlanMarketingUrl(mixed $value): static;

    /**
     * @param HealthPlanFormularyProperties|HealthPlanFormularyProperties[]|IdReference|IdReference[] $value
     */
    public function includesHealthPlanFormulary(mixed $value): static;

    /**
     * @param HealthPlanNetworkProperties|HealthPlanNetworkProperties[]|IdReference|IdReference[] $value
     */
    public function includesHealthPlanNetwork(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function usesHealthPlanIdStandard(mixed $value): static;
}
