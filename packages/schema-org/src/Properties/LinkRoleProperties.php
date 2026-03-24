<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface LinkRoleProperties extends RoleProperties
{
    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inLanguage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function linkRelationship(mixed $value): static;
}
