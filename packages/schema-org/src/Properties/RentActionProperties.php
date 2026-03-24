<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface RentActionProperties extends TradeActionProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function landlord(mixed $value): static;

    /**
     * @param RealEstateAgentProperties|RealEstateAgentProperties[]|IdReference|IdReference[] $value
     */
    public function realEstateAgent(mixed $value): static;
}
