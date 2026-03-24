<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface EducationEventProperties extends EventProperties
{
    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function assesses(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationalLevel(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function teaches(mixed $value): static;
}
