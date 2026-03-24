<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MedicalTestPanelProperties extends MedicalTestProperties
{
    /**
     * @param MedicalTestProperties|MedicalTestProperties[]|IdReference|IdReference[] $value
     */
    public function subTest(mixed $value): static;
}
