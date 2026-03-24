<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;

interface CDCPMDRecordProperties extends StructuredValueProperties
{
    /**
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function cvdCollectionDate(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function cvdFacilityCounty(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function cvdFacilityId(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumBeds(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumBedsOcc(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19Died(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19HOPats(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19HospPats(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19MechVentPats(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19OFMechVentPats(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19OverflowPats(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumICUBeds(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumICUBedsOcc(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumTotBeds(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumVent(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumVentUse(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datePosted(mixed $value): static;
}
