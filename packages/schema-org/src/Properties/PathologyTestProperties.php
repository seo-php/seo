<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface PathologyTestProperties extends MedicalTestProperties
{
    /**
     * @param string|string[] $value
     */
    public function tissueSample(mixed $value): static;
}
