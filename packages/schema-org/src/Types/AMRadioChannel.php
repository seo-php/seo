<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\AMRadioChannelProperties;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\BroadcastFrequencySpecificationProperties;
use Seo\SchemaOrg\Properties\BroadcastServiceProperties;
use Seo\SchemaOrg\Properties\CableOrSatelliteServiceProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class AMRadioChannel extends Type implements AMRadioChannelProperties
{
    protected function type(): string
    {
        return 'AMRadioChannel';
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
     * @param string|string[] $value
     */
    public function broadcastChannelId(mixed $value): static
    {
        return $this->set('broadcastChannelId', $value);
    }

    /**
     * @param BroadcastFrequencySpecificationProperties|BroadcastFrequencySpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function broadcastFrequency(mixed $value): static
    {
        return $this->set('broadcastFrequency', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function broadcastServiceTier(mixed $value): static
    {
        return $this->set('broadcastServiceTier', $value);
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
     * @param string|string[] $value
     */
    public function genre(mixed $value): static
    {
        return $this->set('genre', $value);
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
     * @param CableOrSatelliteServiceProperties|CableOrSatelliteServiceProperties[]|IdReference|IdReference[] $value
     */
    public function inBroadcastLineup(mixed $value): static
    {
        return $this->set('inBroadcastLineup', $value);
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
     * @param BroadcastServiceProperties|BroadcastServiceProperties[]|IdReference|IdReference[] $value
     */
    public function providesBroadcastService(mixed $value): static
    {
        return $this->set('providesBroadcastService', $value);
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
