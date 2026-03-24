<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DefinedTermProperties extends IntangibleProperties
{
    /**
     * @param DefinedTermSetProperties|DefinedTermSetProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inDefinedTermSet(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function termCode(mixed $value): static;
}
