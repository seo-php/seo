<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface TechArticleProperties extends ArticleProperties
{
    /**
     * @param string|string[] $value
     */
    public function dependencies(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function proficiencyLevel(mixed $value): static;
}
