<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalTrialProperties extends MedicalStudyProperties
{
    /**
     * @param MedicalTrialDesignProperties|MedicalTrialDesignProperties[]|IdReference|IdReference[] $value
     */
    public function trialDesign(mixed $value): static;
}
