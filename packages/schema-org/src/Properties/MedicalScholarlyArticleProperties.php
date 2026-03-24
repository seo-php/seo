<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface MedicalScholarlyArticleProperties extends ScholarlyArticleProperties
{
    /**
     * @param string|string[] $value
     */
    public function publicationType(mixed $value): static;
}
