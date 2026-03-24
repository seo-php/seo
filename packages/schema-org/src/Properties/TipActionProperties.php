<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TipActionProperties extends TradeActionProperties
{
    /**
     * @param AudienceProperties|AudienceProperties[]|ContactPointProperties|ContactPointProperties[]|OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function recipient(mixed $value): static;
}
