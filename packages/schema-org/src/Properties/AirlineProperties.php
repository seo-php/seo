<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface AirlineProperties extends OrganizationProperties
{
    /**
     * @param BoardingPolicyTypeProperties|BoardingPolicyTypeProperties[]|IdReference|IdReference[] $value
     */
    public function boardingPolicy(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function iataCode(mixed $value): static;
}
