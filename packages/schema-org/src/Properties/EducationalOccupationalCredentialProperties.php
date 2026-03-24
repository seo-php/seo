<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface EducationalOccupationalCredentialProperties extends CreativeWorkProperties
{
    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function competencyRequired(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function credentialCategory(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationalLevel(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function recognizedBy(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function validFor(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|IdReference|IdReference[] $value
     */
    public function validIn(mixed $value): static;
}
