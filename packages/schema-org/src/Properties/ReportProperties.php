<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface ReportProperties extends ArticleProperties
{
    /**
     * @param string|string[] $value
     */
    public function reportNumber(mixed $value): static;
}
