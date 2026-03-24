<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface NewsArticleProperties extends ArticleProperties
{
    /**
     * @param string|string[] $value
     */
    public function dateline(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function printColumn(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function printEdition(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function printPage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function printSection(mixed $value): static;
}
