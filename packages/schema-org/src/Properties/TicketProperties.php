<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface TicketProperties extends IntangibleProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dateIssued(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function issuedBy(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function priceCurrency(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function ticketNumber(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function ticketToken(mixed $value): static;

    /**
     * @param SeatProperties|SeatProperties[]|IdReference|IdReference[] $value
     */
    public function ticketedSeat(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|PriceSpecificationProperties|PriceSpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function totalPrice(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function underName(mixed $value): static;
}
