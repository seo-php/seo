<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface WebPageElementProperties extends CreativeWorkProperties
{
    /**
     * @param CssSelectorTypeProperties|CssSelectorTypeProperties[]|IdReference|IdReference[] $value
     */
    public function cssSelector(mixed $value): static;

    /**
     * @param XPathTypeProperties|XPathTypeProperties[]|IdReference|IdReference[] $value
     */
    public function xpath(mixed $value): static;
}
