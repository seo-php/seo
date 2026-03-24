<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MathSolverProperties extends CreativeWorkProperties
{
    /**
     * @param SolveMathActionProperties|SolveMathActionProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mathExpression(mixed $value): static;
}
