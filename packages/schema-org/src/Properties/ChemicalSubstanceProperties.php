<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ChemicalSubstanceProperties extends BioChemEntityProperties
{
    /**
     * @param string|string[] $value
     */
    public function chemicalComposition(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|IdReference|IdReference[] $value
     */
    public function chemicalRole(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|IdReference|IdReference[] $value
     */
    public function potentialUse(mixed $value): static;
}
