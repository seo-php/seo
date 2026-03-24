<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PlayActionProperties extends ActionProperties
{
    /**
     * @param AudienceProperties|AudienceProperties[]|IdReference|IdReference[] $value
     */
    public function audience(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function event(mixed $value): static;
}
