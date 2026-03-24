<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface QuantitativeValueDistributionProperties extends StructuredValueProperties
{
    /**
     * @param DurationProperties|DurationProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function duration(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function median(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function percentile10(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function percentile25(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function percentile75(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function percentile90(mixed $value): static;
}
