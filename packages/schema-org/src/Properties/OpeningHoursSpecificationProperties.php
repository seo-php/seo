<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface OpeningHoursSpecificationProperties extends StructuredValueProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function closes(mixed $value): static;

    /**
     * @param DayOfWeekProperties|DayOfWeekProperties[]|IdReference|IdReference[] $value
     */
    public function dayOfWeek(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function opens(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validFrom(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validThrough(mixed $value): static;
}
