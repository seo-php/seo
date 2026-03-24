<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;

interface PlanActionProperties extends OrganizeActionProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function scheduledTime(mixed $value): static;
}
