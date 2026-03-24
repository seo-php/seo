<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalRiskEstimatorProperties extends MedicalEntityProperties
{
    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|IdReference|IdReference[] $value
     */
    public function estimatesRiskOf(mixed $value): static;

    /**
     * @param MedicalRiskFactorProperties|MedicalRiskFactorProperties[]|IdReference|IdReference[] $value
     */
    public function includedRiskFactor(mixed $value): static;
}
