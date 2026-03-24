<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface CommentActionProperties extends CommunicateActionProperties
{
    /**
     * @param CommentProperties|CommentProperties[]|IdReference|IdReference[] $value
     */
    public function resultComment(mixed $value): static;
}
