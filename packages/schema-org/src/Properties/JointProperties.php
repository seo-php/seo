<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface JointProperties extends AnatomicalStructureProperties
{
    /**
     * @param string|string[] $value
     */
    public function biomechnicalClass(mixed $value): static;

    /**
     * @param MedicalEntityProperties|MedicalEntityProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function functionalClass(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function structuralClass(mixed $value): static;
}
