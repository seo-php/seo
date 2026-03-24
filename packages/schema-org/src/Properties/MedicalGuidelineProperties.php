<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface MedicalGuidelineProperties extends MedicalEntityProperties
{
    /**
     * @param MedicalEvidenceLevelProperties|MedicalEvidenceLevelProperties[]|IdReference|IdReference[] $value
     */
    public function evidenceLevel(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function evidenceOrigin(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function guidelineDate(mixed $value): static;

    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|IdReference|IdReference[] $value
     */
    public function guidelineSubject(mixed $value): static;
}
