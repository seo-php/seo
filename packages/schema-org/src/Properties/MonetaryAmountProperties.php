<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface MonetaryAmountProperties extends StructuredValueProperties
{
    /**
     * @param string|string[] $value
     */
    public function currency(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function maxValue(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function minValue(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validFrom(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validThrough(mixed $value): static;

    /**
     * @param bool|bool[]|float|float[]|int|int[]|string|string[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function value(mixed $value): static;
}
