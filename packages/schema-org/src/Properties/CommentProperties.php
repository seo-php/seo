<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\CommentProperties as CommentProperties1;

interface CommentProperties extends CreativeWorkProperties
{
    /**
     * @param int|int[] $value
     */
    public function downvoteCount(mixed $value): static;

    /**
     * @param CommentProperties|CommentProperties[]|CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function parentItem(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function sharedContent(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function upvoteCount(mixed $value): static;
}
