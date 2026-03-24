<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface SearchActionProperties extends ActionProperties
{
    /**
     * @param string|string[] $value
     */
    public function query(mixed $value): static;
}
