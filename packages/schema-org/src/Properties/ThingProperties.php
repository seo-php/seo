<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ThingProperties
{
    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static;

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static;

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function identifier(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static;

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static;
}
