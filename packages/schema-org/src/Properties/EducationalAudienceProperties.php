<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface EducationalAudienceProperties extends AudienceProperties
{
    /**
     * @param string|string[] $value
     */
    public function educationalRole(mixed $value): static;
}
