<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface PhysicalActivityProperties extends LifestyleModificationProperties
{
    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|AnatomicalSystemProperties|AnatomicalSystemProperties[]|SuperficialAnatomyProperties|SuperficialAnatomyProperties[]|IdReference|IdReference[] $value
     */
    public function associatedAnatomy(mixed $value): static;

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|PhysicalActivityCategoryProperties|PhysicalActivityCategoryProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function category(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function epidemiology(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function pathophysiology(mixed $value): static;
}
