<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ReplaceActionProperties extends UpdateActionProperties
{
    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function replacee(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function replacer(mixed $value): static;
}
