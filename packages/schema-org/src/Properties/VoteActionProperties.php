<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface VoteActionProperties extends ChooseActionProperties
{
    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function candidate(mixed $value): static;
}
