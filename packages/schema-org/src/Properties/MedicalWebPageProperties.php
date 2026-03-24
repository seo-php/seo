<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalWebPageProperties extends WebPageProperties
{
    /**
     * @param string|string[] $value
     */
    public function aspect(mixed $value): static;

    /**
     * @param MedicalAudienceProperties|MedicalAudienceProperties[]|MedicalAudienceTypeProperties|MedicalAudienceTypeProperties[]|IdReference|IdReference[] $value
     */
    public function medicalAudience(mixed $value): static;
}
