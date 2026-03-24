<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface GameServerProperties extends IntangibleProperties
{
    /**
     * @param VideoGameProperties|VideoGameProperties[]|IdReference|IdReference[] $value
     */
    public function game(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function playersOnline(mixed $value): static;

    /**
     * @param GameServerStatusProperties|GameServerStatusProperties[]|IdReference|IdReference[] $value
     */
    public function serverStatus(mixed $value): static;
}
