<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BoatTripProperties extends TripProperties
{
    /**
     * @param BoatTerminalProperties|BoatTerminalProperties[]|IdReference|IdReference[] $value
     */
    public function arrivalBoatTerminal(mixed $value): static;

    /**
     * @param BoatTerminalProperties|BoatTerminalProperties[]|IdReference|IdReference[] $value
     */
    public function departureBoatTerminal(mixed $value): static;
}
