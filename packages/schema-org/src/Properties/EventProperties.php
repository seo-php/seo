<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\EventProperties as EventProperties1;

interface EventProperties extends ThingProperties
{
    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function about(mixed $value): static;

    /**
     * @param PerformingGroupProperties|PerformingGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function actor(mixed $value): static;

    /**
     * @param AggregateRatingProperties|AggregateRatingProperties[]|IdReference|IdReference[] $value
     */
    public function aggregateRating(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function attendee(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function attendees(mixed $value): static;

    /**
     * @param AudienceProperties|AudienceProperties[]|IdReference|IdReference[] $value
     */
    public function audience(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function composer(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function contributor(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function director(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function doorTime(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function duration(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static;

    /**
     * @param EventAttendanceModeEnumerationProperties|EventAttendanceModeEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function eventAttendanceMode(mixed $value): static;

    /**
     * @param ScheduleProperties|ScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function eventSchedule(mixed $value): static;

    /**
     * @param EventStatusTypeProperties|EventStatusTypeProperties[]|IdReference|IdReference[] $value
     */
    public function eventStatus(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function funder(mixed $value): static;

    /**
     * @param GrantProperties|GrantProperties[]|IdReference|IdReference[] $value
     */
    public function funding(mixed $value): static;

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inLanguage(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isAccessibleForFree(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function keywords(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|PostalAddressProperties|PostalAddressProperties[]|string|string[]|VirtualLocationProperties|VirtualLocationProperties[]|IdReference|IdReference[] $value
     */
    public function location(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function maximumAttendeeCapacity(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function maximumPhysicalAttendeeCapacity(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function maximumVirtualAttendeeCapacity(mixed $value): static;

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function organizer(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function performer(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function performers(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function previousStartDate(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function recordedIn(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function remainingAttendeeCapacity(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function review(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subEvent(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subEvents(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function superEvent(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function translator(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function typicalAgeRange(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function workFeatured(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function workPerformed(mixed $value): static;
}
