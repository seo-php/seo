<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface AskActionProperties extends CommunicateActionProperties
{
    /**
     * @param QuestionProperties|QuestionProperties[]|IdReference|IdReference[] $value
     */
    public function question(mixed $value): static;
}
