<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface AudienceProperties extends IntangibleProperties
{
    /**
     * @param string|string[] $value
     */
    public function audienceType(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function geographicArea(mixed $value): static;
}
