<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PropertyValueSpecificationProperties extends IntangibleProperties
{
    /**
     * @param string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function defaultValue(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function maxValue(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function minValue(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function multipleValues(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function readonlyValue(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function stepValue(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function valueMaxLength(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function valueMinLength(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function valueName(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function valuePattern(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function valueRequired(mixed $value): static;
}
