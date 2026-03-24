<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ArticleProperties extends CreativeWorkProperties
{
    /**
     * @param string|string[] $value
     */
    public function articleBody(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function articleSection(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function backstory(mixed $value): static;

    /**
     * @param int|int[]|string|string[] $value
     */
    public function pageEnd(mixed $value): static;

    /**
     * @param int|int[]|string|string[] $value
     */
    public function pageStart(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function pagination(mixed $value): static;

    /**
     * @param SpeakableSpecificationProperties|SpeakableSpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function speakable(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function wordCount(mixed $value): static;
}
