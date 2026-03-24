<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;

interface CertificationProperties extends CreativeWorkProperties
{
    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function about(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function auditDate(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function certificationIdentification(mixed $value): static;

    /**
     * @param RatingProperties|RatingProperties[]|IdReference|IdReference[] $value
     */
    public function certificationRating(mixed $value): static;

    /**
     * @param CertificationStatusEnumerationProperties|CertificationStatusEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function certificationStatus(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datePublished(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function expires(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function hasMeasurement(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function issuedBy(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function logo(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function validFrom(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function validIn(mixed $value): static;
}
