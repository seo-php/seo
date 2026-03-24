<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\LanguageProperties;
use Seo\SchemaOrg\Properties\PronounceableTextProperties;
use Seo\SchemaOrg\Type;

final class PronounceableText extends Type implements PronounceableTextProperties
{
    protected function type(): string
    {
        return 'PronounceableText';
    }

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inLanguage(mixed $value): static
    {
        return $this->set('inLanguage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function phoneticText(mixed $value): static
    {
        return $this->set('phoneticText', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function speechToTextMarkup(mixed $value): static
    {
        return $this->set('speechToTextMarkup', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function textValue(mixed $value): static
    {
        return $this->set('textValue', $value);
    }
}
