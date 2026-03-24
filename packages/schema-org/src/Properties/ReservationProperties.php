<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface ReservationProperties extends IntangibleProperties
{
    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function bookingAgent(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function bookingTime(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function broker(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function modifiedTime(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function priceCurrency(mixed $value): static;

    /**
     * @param ProgramMembershipProperties|ProgramMembershipProperties[]|IdReference|IdReference[] $value
     */
    public function programMembershipUsed(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function reservationFor(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function reservationId(mixed $value): static;

    /**
     * @param ReservationStatusTypeProperties|ReservationStatusTypeProperties[]|IdReference|IdReference[] $value
     */
    public function reservationStatus(mixed $value): static;

    /**
     * @param TicketProperties|TicketProperties[]|IdReference|IdReference[] $value
     */
    public function reservedTicket(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|PriceSpecificationProperties|PriceSpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function totalPrice(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function underName(mixed $value): static;
}
