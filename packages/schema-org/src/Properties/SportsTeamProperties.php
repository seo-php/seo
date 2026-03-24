<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SportsTeamProperties extends SportsOrganizationProperties
{
    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function athlete(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function coach(mixed $value): static;

    /**
     * @param GenderTypeProperties|GenderTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function gender(mixed $value): static;
}
