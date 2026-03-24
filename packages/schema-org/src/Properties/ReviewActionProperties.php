<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ReviewActionProperties extends AssessActionProperties
{
    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function resultReview(mixed $value): static;
}
