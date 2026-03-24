<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface LoseActionProperties extends AchieveActionProperties
{
    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function winner(mixed $value): static;
}
