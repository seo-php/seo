<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\BioChemEntityProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GeneProperties;
use Seo\SchemaOrg\Properties\GrantProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\MedicalConditionProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\ProteinProperties;
use Seo\SchemaOrg\Properties\TaxonProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Type;

final class Protein extends Type implements ProteinProperties
{
    protected function type(): string
    {
        return 'Protein';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param MedicalConditionProperties|MedicalConditionProperties[]|PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function associatedDisease(mixed $value): static
    {
        return $this->set('associatedDisease', $value);
    }

    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|IdReference|IdReference[] $value
     */
    public function bioChemInteraction(mixed $value): static
    {
        return $this->set('bioChemInteraction', $value);
    }

    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|IdReference|IdReference[] $value
     */
    public function bioChemSimilarity(mixed $value): static
    {
        return $this->set('bioChemSimilarity', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|IdReference|IdReference[] $value
     */
    public function biologicalRole(mixed $value): static
    {
        return $this->set('biologicalRole', $value);
    }

    /**
     * @param string|string[]|TextObjectProperties|TextObjectProperties[]|IdReference|IdReference[] $value
     */
    public function description(mixed $value): static
    {
        return $this->set('description', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function disambiguatingDescription(mixed $value): static
    {
        return $this->set('disambiguatingDescription', $value);
    }

    /**
     * @param GrantProperties|GrantProperties[]|IdReference|IdReference[] $value
     */
    public function funding(mixed $value): static
    {
        return $this->set('funding', $value);
    }

    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|IdReference|IdReference[] $value
     */
    public function hasBioChemEntityPart(mixed $value): static
    {
        return $this->set('hasBioChemEntityPart', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function hasBioPolymerSequence(mixed $value): static
    {
        return $this->set('hasBioPolymerSequence', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function hasMolecularFunction(mixed $value): static
    {
        return $this->set('hasMolecularFunction', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function hasRepresentation(mixed $value): static
    {
        return $this->set('hasRepresentation', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function identifier(mixed $value): static
    {
        return $this->set('identifier', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function image(mixed $value): static
    {
        return $this->set('image', $value);
    }

    /**
     * @param GeneProperties|GeneProperties[]|IdReference|IdReference[] $value
     */
    public function isEncodedByBioChemEntity(mixed $value): static
    {
        return $this->set('isEncodedByBioChemEntity', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isInvolvedInBiologicalProcess(mixed $value): static
    {
        return $this->set('isInvolvedInBiologicalProcess', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|PropertyValueProperties|PropertyValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isLocatedInSubcellularLocation(mixed $value): static
    {
        return $this->set('isLocatedInSubcellularLocation', $value);
    }

    /**
     * @param BioChemEntityProperties|BioChemEntityProperties[]|IdReference|IdReference[] $value
     */
    public function isPartOfBioChemEntity(mixed $value): static
    {
        return $this->set('isPartOfBioChemEntity', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|TaxonProperties|TaxonProperties[]|IdReference|IdReference[] $value
     */
    public function taxonomicRange(mixed $value): static
    {
        return $this->set('taxonomicRange', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
