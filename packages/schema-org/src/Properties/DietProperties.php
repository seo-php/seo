<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface DietProperties extends LifestyleModificationProperties, CreativeWorkProperties
{
    /**
     * @param string|string[] $value
     */
    public function dietFeatures(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function endorsers(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function expertConsiderations(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function physiologicalBenefits(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function risks(mixed $value): static;
}
