<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\BusReservationProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PriceSpecificationProperties;
use Seo\SchemaOrg\Properties\ProgramMembershipProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\ReservationStatusTypeProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ThingProperties;
use Seo\SchemaOrg\Properties\TicketProperties;
use Seo\SchemaOrg\Type;

final class BusReservation extends Type implements BusReservationProperties
{
    protected function type(): string
    {
        return 'BusReservation';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
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
    public function bookingAgent(mixed $value): static
    {
        return $this->set('bookingAgent', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function bookingTime(mixed $value): static
    {
        return $this->set('bookingTime', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function broker(mixed $value): static
    {
        return $this->set('broker', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
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
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function modifiedTime(mixed $value): static
    {
        return $this->set('modifiedTime', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function priceCurrency(mixed $value): static
    {
        return $this->set('priceCurrency', $value);
    }

    /**
     * @param ProgramMembershipProperties|ProgramMembershipProperties[]|IdReference|IdReference[] $value
     */
    public function programMembershipUsed(mixed $value): static
    {
        return $this->set('programMembershipUsed', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static
    {
        return $this->set('provider', $value);
    }

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function reservationFor(mixed $value): static
    {
        return $this->set('reservationFor', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function reservationId(mixed $value): static
    {
        return $this->set('reservationId', $value);
    }

    /**
     * @param ReservationStatusTypeProperties|ReservationStatusTypeProperties[]|IdReference|IdReference[] $value
     */
    public function reservationStatus(mixed $value): static
    {
        return $this->set('reservationStatus', $value);
    }

    /**
     * @param TicketProperties|TicketProperties[]|IdReference|IdReference[] $value
     */
    public function reservedTicket(mixed $value): static
    {
        return $this->set('reservedTicket', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param float|float[]|int|int[]|PriceSpecificationProperties|PriceSpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function totalPrice(mixed $value): static
    {
        return $this->set('totalPrice', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function underName(mixed $value): static
    {
        return $this->set('underName', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
