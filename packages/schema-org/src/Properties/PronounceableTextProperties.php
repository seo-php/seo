<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PronounceableTextProperties
{
    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inLanguage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function phoneticText(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function speechToTextMarkup(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function textValue(mixed $value): static;
}
