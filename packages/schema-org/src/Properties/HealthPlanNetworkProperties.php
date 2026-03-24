<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface HealthPlanNetworkProperties extends IntangibleProperties
{
    /**
     * @param bool|bool[] $value
     */
    public function healthPlanCostSharing(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function healthPlanNetworkId(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function healthPlanNetworkTier(mixed $value): static;
}
