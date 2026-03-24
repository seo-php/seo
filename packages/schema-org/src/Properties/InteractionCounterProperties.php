<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface InteractionCounterProperties extends StructuredValueProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endTime(mixed $value): static;

    /**
     * @param SoftwareApplicationProperties|SoftwareApplicationProperties[]|WebSiteProperties|WebSiteProperties[]|IdReference|IdReference[] $value
     */
    public function interactionService(mixed $value): static;

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function interactionType(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|PostalAddressProperties|PostalAddressProperties[]|string|string[]|VirtualLocationProperties|VirtualLocationProperties[]|IdReference|IdReference[] $value
     */
    public function location(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startTime(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function userInteractionCount(mixed $value): static;
}
