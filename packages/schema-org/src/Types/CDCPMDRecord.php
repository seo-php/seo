<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\CDCPMDRecordProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class CDCPMDRecord extends Type implements CDCPMDRecordProperties
{
    protected function type(): string
    {
        return 'CDCPMDRecord';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function cvdCollectionDate(mixed $value): static
    {
        return $this->set('cvdCollectionDate', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function cvdFacilityCounty(mixed $value): static
    {
        return $this->set('cvdFacilityCounty', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function cvdFacilityId(mixed $value): static
    {
        return $this->set('cvdFacilityId', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumBeds(mixed $value): static
    {
        return $this->set('cvdNumBeds', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumBedsOcc(mixed $value): static
    {
        return $this->set('cvdNumBedsOcc', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19Died(mixed $value): static
    {
        return $this->set('cvdNumC19Died', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19HOPats(mixed $value): static
    {
        return $this->set('cvdNumC19HOPats', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19HospPats(mixed $value): static
    {
        return $this->set('cvdNumC19HospPats', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19MechVentPats(mixed $value): static
    {
        return $this->set('cvdNumC19MechVentPats', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19OFMechVentPats(mixed $value): static
    {
        return $this->set('cvdNumC19OFMechVentPats', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumC19OverflowPats(mixed $value): static
    {
        return $this->set('cvdNumC19OverflowPats', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumICUBeds(mixed $value): static
    {
        return $this->set('cvdNumICUBeds', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumICUBedsOcc(mixed $value): static
    {
        return $this->set('cvdNumICUBedsOcc', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumTotBeds(mixed $value): static
    {
        return $this->set('cvdNumTotBeds', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumVent(mixed $value): static
    {
        return $this->set('cvdNumVent', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function cvdNumVentUse(mixed $value): static
    {
        return $this->set('cvdNumVentUse', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datePosted(mixed $value): static
    {
        return $this->set('datePosted', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function identifier(mixed $value): static
    {
        return $this->set('identifier', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static
    {
        return $this->set('image', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
