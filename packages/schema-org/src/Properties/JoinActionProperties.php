<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface JoinActionProperties extends InteractActionProperties
{
    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function event(mixed $value): static;
}
