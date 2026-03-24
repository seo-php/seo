<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface ThesisProperties extends CreativeWorkProperties
{
    /**
     * @param string|string[] $value
     */
    public function inSupportOf(mixed $value): static;
}
