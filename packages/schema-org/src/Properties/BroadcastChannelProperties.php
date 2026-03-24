<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BroadcastChannelProperties extends IntangibleProperties
{
    /**
     * @param string|string[] $value
     */
    public function broadcastChannelId(mixed $value): static;

    /**
     * @param BroadcastFrequencySpecificationProperties|BroadcastFrequencySpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function broadcastFrequency(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function broadcastServiceTier(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function genre(mixed $value): static;

    /**
     * @param CableOrSatelliteServiceProperties|CableOrSatelliteServiceProperties[]|IdReference|IdReference[] $value
     */
    public function inBroadcastLineup(mixed $value): static;

    /**
     * @param BroadcastServiceProperties|BroadcastServiceProperties[]|IdReference|IdReference[] $value
     */
    public function providesBroadcastService(mixed $value): static;
}
