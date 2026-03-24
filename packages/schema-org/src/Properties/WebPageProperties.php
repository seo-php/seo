<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface WebPageProperties extends CreativeWorkProperties
{
    /**
     * @param BreadcrumbListProperties|BreadcrumbListProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function breadcrumb(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function lastReviewed(mixed $value): static;

    /**
     * @param WebPageElementProperties|WebPageElementProperties[]|IdReference|IdReference[] $value
     */
    public function mainContentOfPage(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|IdReference|IdReference[] $value
     */
    public function primaryImageOfPage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function relatedLink(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function reviewedBy(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function significantLink(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function significantLinks(mixed $value): static;

    /**
     * @param SpeakableSpecificationProperties|SpeakableSpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function speakable(mixed $value): static;

    /**
     * @param SpecialtyProperties|SpecialtyProperties[]|IdReference|IdReference[] $value
     */
    public function specialty(mixed $value): static;
}
