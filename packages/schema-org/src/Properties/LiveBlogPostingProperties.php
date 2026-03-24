<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface LiveBlogPostingProperties extends BlogPostingProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function coverageEndTime(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function coverageStartTime(mixed $value): static;

    /**
     * @param BlogPostingProperties|BlogPostingProperties[]|IdReference|IdReference[] $value
     */
    public function liveBlogUpdate(mixed $value): static;
}
