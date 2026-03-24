<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface AnswerProperties extends CommentProperties
{
    /**
     * @param CommentProperties|CommentProperties[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function answerExplanation(mixed $value): static;

    /**
     * @param CommentProperties|CommentProperties[]|CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function parentItem(mixed $value): static;
}
