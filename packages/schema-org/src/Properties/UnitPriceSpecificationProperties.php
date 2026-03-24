<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface UnitPriceSpecificationProperties extends PriceSpecificationProperties
{
    /**
     * @param DurationProperties|DurationProperties[]|float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function billingDuration(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function billingIncrement(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function billingStart(mixed $value): static;

    /**
     * @param PriceComponentTypeEnumerationProperties|PriceComponentTypeEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function priceComponentType(mixed $value): static;

    /**
     * @param PriceTypeEnumerationProperties|PriceTypeEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function priceType(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function referenceQuantity(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function unitCode(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function unitText(mixed $value): static;
}
