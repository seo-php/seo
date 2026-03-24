<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SocialMediaPostingProperties extends ArticleProperties
{
    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function sharedContent(mixed $value): static;
}
