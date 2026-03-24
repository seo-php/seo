<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ImagingTestProperties extends MedicalTestProperties
{
    /**
     * @param MedicalImagingTechniqueProperties|MedicalImagingTechniqueProperties[]|IdReference|IdReference[] $value
     */
    public function imagingTechnique(mixed $value): static;
}
