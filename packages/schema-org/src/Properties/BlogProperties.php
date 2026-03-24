<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BlogProperties extends CreativeWorkProperties
{
    /**
     * @param BlogPostingProperties|BlogPostingProperties[]|IdReference|IdReference[] $value
     */
    public function blogPost(mixed $value): static;

    /**
     * @param BlogPostingProperties|BlogPostingProperties[]|IdReference|IdReference[] $value
     */
    public function blogPosts(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function issn(mixed $value): static;
}
