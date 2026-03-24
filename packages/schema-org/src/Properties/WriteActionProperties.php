<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface WriteActionProperties extends CreateActionProperties
{
    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inLanguage(mixed $value): static;

    /**
     * @param LanguageProperties|LanguageProperties[]|IdReference|IdReference[] $value
     */
    public function language(mixed $value): static;
}
