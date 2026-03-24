<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface WebSiteProperties extends CreativeWorkProperties
{
    /**
     * @param string|string[] $value
     */
    public function issn(mixed $value): static;
}
