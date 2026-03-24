<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\GeneProperties as GeneProperties1;

interface GeneProperties extends BioChemEntityProperties
{
    /**
     * @param GeneProperties|GeneProperties[]|IdReference|IdReference[] $value
     */
    public function alternativeOf(mixed $value): static;

    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|IdReference|IdReference[] $value
     */
    public function encodesBioChemEntity(mixed $value): static;

    /**
     * @param AnatomicalStructureProperties|AnatomicalStructureProperties[]|AnatomicalSystemProperties|AnatomicalSystemProperties[]|BioChemEntityProperties|BioChemEntityProperties[]|DefinedTermProperties|DefinedTermProperties[]|IdReference|IdReference[] $value
     */
    public function expressedIn(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function hasBioPolymerSequence(mixed $value): static;
}
