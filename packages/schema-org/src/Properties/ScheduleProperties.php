<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface ScheduleProperties extends IntangibleProperties
{
    /**
     * @param DayOfWeekProperties|DayOfWeekProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function byDay(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function byMonth(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function byMonthDay(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function byMonthWeek(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function duration(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endDate(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function endTime(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function exceptDate(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function repeatCount(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function repeatFrequency(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function scheduleTimezone(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startDate(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function startTime(mixed $value): static;
}
