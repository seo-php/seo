<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalObservationalStudyProperties extends MedicalStudyProperties
{
    /**
     * @param MedicalObservationalStudyDesignProperties|MedicalObservationalStudyDesignProperties[]|IdReference|IdReference[] $value
     */
    public function studyDesign(mixed $value): static;
}
