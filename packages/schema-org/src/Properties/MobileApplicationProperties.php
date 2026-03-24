<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface MobileApplicationProperties extends SoftwareApplicationProperties
{
    /**
     * @param string|string[] $value
     */
    public function carrierRequirements(mixed $value): static;
}
