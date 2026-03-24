<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface CorporationProperties extends OrganizationProperties
{
    /**
     * @param string|string[] $value
     */
    public function tickerSymbol(mixed $value): static;
}
