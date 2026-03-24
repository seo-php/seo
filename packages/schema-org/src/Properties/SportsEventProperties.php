<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SportsEventProperties extends EventProperties
{
    /**
     * @param PersonProperties|PersonProperties[]|SportsTeamProperties|SportsTeamProperties[]|IdReference|IdReference[] $value
     */
    public function awayTeam(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|SportsTeamProperties|SportsTeamProperties[]|IdReference|IdReference[] $value
     */
    public function competitor(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|SportsTeamProperties|SportsTeamProperties[]|IdReference|IdReference[] $value
     */
    public function homeTeam(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function referee(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function sport(mixed $value): static;
}
