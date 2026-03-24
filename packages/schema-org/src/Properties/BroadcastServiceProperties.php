<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\BroadcastServiceProperties as BroadcastServiceProperties1;

interface BroadcastServiceProperties extends ServiceProperties
{
    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function area(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function broadcastAffiliateOf(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function broadcastDisplayName(mixed $value): static;

    /**
     * @param BroadcastFrequencySpecificationProperties|BroadcastFrequencySpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function broadcastFrequency(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function broadcastTimezone(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function broadcaster(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function callSign(mixed $value): static;

    /**
     * @param BroadcastChannelProperties|BroadcastChannelProperties[]|IdReference|IdReference[] $value
     */
    public function hasBroadcastChannel(mixed $value): static;

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inLanguage(mixed $value): static;

    /**
     * @param BroadcastServiceProperties|BroadcastServiceProperties[]|IdReference|IdReference[] $value
     */
    public function parentService(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function videoFormat(mixed $value): static;
}
