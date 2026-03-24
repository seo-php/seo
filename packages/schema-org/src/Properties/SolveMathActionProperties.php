<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface SolveMathActionProperties extends ActionProperties
{
    /**
     * @param string|string[] $value
     */
    public function eduQuestionType(mixed $value): static;
}
