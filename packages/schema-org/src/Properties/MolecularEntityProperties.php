<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface MolecularEntityProperties extends BioChemEntityProperties
{
    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|IdReference|IdReference[] $value
     */
    public function chemicalRole(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function inChI(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function inChIKey(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function iupacName(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function molecularFormula(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function molecularWeight(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function monoisotopicMolecularWeight(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|IdReference|IdReference[] $value
     */
    public function potentialUse(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function smiles(mixed $value): static;
}
