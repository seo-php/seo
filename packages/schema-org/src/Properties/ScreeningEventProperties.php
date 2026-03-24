<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ScreeningEventProperties extends EventProperties
{
    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function subtitleLanguage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function videoFormat(mixed $value): static;

    /**
     * @param MovieProperties|MovieProperties[]|IdReference|IdReference[] $value
     */
    public function workPresented(mixed $value): static;
}
