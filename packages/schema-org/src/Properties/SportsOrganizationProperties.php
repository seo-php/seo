<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface SportsOrganizationProperties extends OrganizationProperties
{
    /**
     * @param string|string[] $value
     */
    public function sport(mixed $value): static;
}
