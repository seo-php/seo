<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface HealthPlanFormularyProperties extends IntangibleProperties
{
    /**
     * @param bool|bool[] $value
     */
    public function healthPlanCostSharing(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function healthPlanDrugTier(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function offersPrescriptionByMail(mixed $value): static;
}
