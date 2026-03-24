<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface PerformanceRoleProperties extends RoleProperties
{
    /**
     * @param string|string[] $value
     */
    public function characterName(mixed $value): static;
}
