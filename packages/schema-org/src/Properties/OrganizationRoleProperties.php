<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface OrganizationRoleProperties extends RoleProperties
{
    /**
     * @param float|float[]|int|int[] $value
     */
    public function numberedPosition(mixed $value): static;
}
