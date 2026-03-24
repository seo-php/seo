<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ConstraintNodeProperties extends IntangibleProperties
{
    /**
     * @param PropertyProperties|PropertyProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function constraintProperty(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function numConstraints(mixed $value): static;
}
