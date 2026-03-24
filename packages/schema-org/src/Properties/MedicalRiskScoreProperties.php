<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface MedicalRiskScoreProperties extends MedicalRiskEstimatorProperties
{
    /**
     * @param string|string[] $value
     */
    public function algorithm(mixed $value): static;
}
