<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AggregateRatingProperties;
use Seo\SchemaOrg\Properties\AudienceProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\DemandProperties;
use Seo\SchemaOrg\Properties\DurationProperties;
use Seo\SchemaOrg\Properties\EventAttendanceModeEnumerationProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\EventStatusTypeProperties;
use Seo\SchemaOrg\Properties\ExhibitionEventProperties;
use Seo\SchemaOrg\Properties\GrantProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\LanguageProperties;
use Seo\SchemaOrg\Properties\OfferProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PerformingGroupProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\PostalAddressProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\ReviewProperties;
use Seo\SchemaOrg\Properties\ScheduleProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ThingProperties;
use Seo\SchemaOrg\Properties\VirtualLocationProperties;
use Seo\SchemaOrg\Type;

final class ExhibitionEvent extends Type implements ExhibitionEventProperties
{
    protected function type(): string
    {
        return 'ExhibitionEvent';
    }

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function about(mixed $value): static
    {
        return $this->set('about', $value);
    }

    /**
     * @param PerformingGroupProperties|PerformingGroupProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function actor(mixed $value): static
    {
        return $this->set('actor', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param AggregateRatingProperties|AggregateRatingProperties[]|IdReference|IdReference[] $value
     */
    public function aggregateRating(mixed $value): static
    {
        return $this->set('aggregateRating', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function attendee(mixed $value): static
    {
        return $this->set('attendee', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function attendees(mixed $value): static
    {
        return $this->set('attendees', $value);
    }

    /**
     * @param AudienceProperties|AudienceProperties[]|IdReference|IdReference[] $value
     */
    public function audience(mixed $value): static
    {
        return $this->set('audience', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function composer(mixed $value): static
    {
        return $this->set('composer', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function contributor(mixed $value): static
    {
        return $this->set('contributor', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function director(mixed $value): static
    {
        return $this->set('director', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function doorTime(mixed $value): static
    {
        return $this->set('doorTime', $value);
    }

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function duration(mixed $value): static
    {
        return $this->set('duration', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static
    {
        return $this->set('endDate', $value);
    }

    /**
     * @param EventAttendanceModeEnumerationProperties|EventAttendanceModeEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function eventAttendanceMode(mixed $value): static
    {
        return $this->set('eventAttendanceMode', $value);
    }

    /**
     * @param ScheduleProperties|ScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function eventSchedule(mixed $value): static
    {
        return $this->set('eventSchedule', $value);
    }

    /**
     * @param EventStatusTypeProperties|EventStatusTypeProperties[]|IdReference|IdReference[] $value
     */
    public function eventStatus(mixed $value): static
    {
        return $this->set('eventStatus', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function funder(mixed $value): static
    {
        return $this->set('funder', $value);
    }

    /**
     * @param GrantProperties|GrantProperties[]|IdReference|IdReference[] $value
     */
    public function funding(mixed $value): static
    {
        return $this->set('funding', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function identifier(mixed $value): static
    {
        return $this->set('identifier', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static
    {
        return $this->set('image', $value);
    }

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inLanguage(mixed $value): static
    {
        return $this->set('inLanguage', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function isAccessibleForFree(mixed $value): static
    {
        return $this->set('isAccessibleForFree', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function keywords(mixed $value): static
    {
        return $this->set('keywords', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|PostalAddressProperties|PostalAddressProperties[]|string|string[]|VirtualLocationProperties|VirtualLocationProperties[]|IdReference|IdReference[] $value
     */
    public function location(mixed $value): static
    {
        return $this->set('location', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function maximumAttendeeCapacity(mixed $value): static
    {
        return $this->set('maximumAttendeeCapacity', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function maximumPhysicalAttendeeCapacity(mixed $value): static
    {
        return $this->set('maximumPhysicalAttendeeCapacity', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function maximumVirtualAttendeeCapacity(mixed $value): static
    {
        return $this->set('maximumVirtualAttendeeCapacity', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static
    {
        return $this->set('offers', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function organizer(mixed $value): static
    {
        return $this->set('organizer', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function performer(mixed $value): static
    {
        return $this->set('performer', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function performers(mixed $value): static
    {
        return $this->set('performers', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function previousStartDate(mixed $value): static
    {
        return $this->set('previousStartDate', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function recordedIn(mixed $value): static
    {
        return $this->set('recordedIn', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function remainingAttendeeCapacity(mixed $value): static
    {
        return $this->set('remainingAttendeeCapacity', $value);
    }

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function review(mixed $value): static
    {
        return $this->set('review', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static
    {
        return $this->set('sponsor', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static
    {
        return $this->set('startDate', $value);
    }

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subEvent(mixed $value): static
    {
        return $this->set('subEvent', $value);
    }

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subEvents(mixed $value): static
    {
        return $this->set('subEvents', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function superEvent(mixed $value): static
    {
        return $this->set('superEvent', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function translator(mixed $value): static
    {
        return $this->set('translator', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function typicalAgeRange(mixed $value): static
    {
        return $this->set('typicalAgeRange', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function workFeatured(mixed $value): static
    {
        return $this->set('workFeatured', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function workPerformed(mixed $value): static
    {
        return $this->set('workPerformed', $value);
    }
}
