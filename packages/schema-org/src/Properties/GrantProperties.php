<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface GrantProperties extends IntangibleProperties
{
    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|MedicalEntityProperties|MedicalEntityProperties[]|OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function fundedItem(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function funder(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static;
}
