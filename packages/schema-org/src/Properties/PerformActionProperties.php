<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PerformActionProperties extends PlayActionProperties
{
    /**
     * @param EntertainmentBusinessProperties|EntertainmentBusinessProperties[]|IdReference|IdReference[] $value
     */
    public function entertainmentBusiness(mixed $value): static;
}
