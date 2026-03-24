<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\BioChemEntityProperties as BioChemEntityProperties1;

interface BioChemEntityProperties extends ThingProperties
{
    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function associatedDisease(mixed $value): static;

    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|IdReference|IdReference[] $value
     */
    public function bioChemInteraction(mixed $value): static;

    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|IdReference|IdReference[] $value
     */
    public function bioChemSimilarity(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|IdReference|IdReference[] $value
     */
    public function biologicalRole(mixed $value): static;

    /**
     * @param GrantProperties|GrantProperties[]|IdReference|IdReference[] $value
     */
    public function funding(mixed $value): static;

    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|IdReference|IdReference[] $value
     */
    public function hasBioChemEntityPart(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function hasMolecularFunction(mixed $value): static;

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function hasRepresentation(mixed $value): static;

    /**
     * @param GeneProperties|GeneProperties[]|IdReference|IdReference[] $value
     */
    public function isEncodedByBioChemEntity(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isInvolvedInBiologicalProcess(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isLocatedInSubcellularLocation(mixed $value): static;

    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|IdReference|IdReference[] $value
     */
    public function isPartOfBioChemEntity(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|TaxonProperties|TaxonProperties[]|IdReference|IdReference[] $value
     */
    public function taxonomicRange(mixed $value): static;
}
