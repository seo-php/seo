<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface SpecialAnnouncementProperties extends CreativeWorkProperties
{
    /**
     * @param CivicStructureProperties|CivicStructureProperties[]|LocalBusinessProperties|LocalBusinessProperties[]|IdReference|IdReference[] $value
     */
    public function announcementLocation(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|PhysicalActivityCategoryProperties|PhysicalActivityCategoryProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function category(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datePosted(mixed $value): static;

    /**
     * @param string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function diseasePreventionInfo(mixed $value): static;

    /**
     * @param DatasetProperties|DatasetProperties[]|ObservationProperties|ObservationProperties[]|string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function diseaseSpreadStatistics(mixed $value): static;

    /**
     * @param string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function gettingTestedInfo(mixed $value): static;

    /**
     * @param GovernmentServiceProperties|GovernmentServiceProperties[]|IdReference|IdReference[] $value
     */
    public function governmentBenefitsInfo(mixed $value): static;

    /**
     * @param string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function newsUpdatesAndGuidelines(mixed $value): static;

    /**
     * @param string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function publicTransportClosuresInfo(mixed $value): static;

    /**
     * @param string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function quarantineGuidelines(mixed $value): static;

    /**
     * @param string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function schoolClosuresInfo(mixed $value): static;

    /**
     * @param string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function travelBans(mixed $value): static;

    /**
     * @param DataFeedProperties|DataFeedProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function webFeed(mixed $value): static;
}
