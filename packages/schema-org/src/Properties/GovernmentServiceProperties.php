<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface GovernmentServiceProperties extends ServiceProperties
{
    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function jurisdiction(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function serviceOperator(mixed $value): static;
}
