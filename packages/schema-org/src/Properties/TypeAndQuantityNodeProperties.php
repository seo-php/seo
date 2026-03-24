<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface TypeAndQuantityNodeProperties extends StructuredValueProperties
{
    /**
     * @param float|float[]|int|int[] $value
     */
    public function amountOfThisGood(mixed $value): static;

    /**
     * @param BusinessFunctionProperties|BusinessFunctionProperties[]|IdReference|IdReference[] $value
     */
    public function businessFunction(mixed $value): static;

    /**
     * @param ProductProperties|ProductProperties[]|ServiceProperties|ServiceProperties[]|IdReference|IdReference[] $value
     */
    public function typeOfGood(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function unitCode(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function unitText(mixed $value): static;
}
