<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface ActionProperties extends ThingProperties
{
    /**
     * @param HowToProperties|HowToProperties[]|IdReference|IdReference[] $value
     */
    public function actionProcess(mixed $value): static;

    /**
     * @param ActionStatusTypeProperties|ActionStatusTypeProperties[]|IdReference|IdReference[] $value
     */
    public function actionStatus(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function agent(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endTime(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function error(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function instrument(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|PostalAddressProperties|PostalAddressProperties[]|string|string[]|VirtualLocationProperties|VirtualLocationProperties[]|IdReference|IdReference[] $value
     */
    public function location(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function object(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function participant(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function result(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startTime(mixed $value): static;

    /**
     * @param EntryPointProperties|EntryPointProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function target(mixed $value): static;
}
