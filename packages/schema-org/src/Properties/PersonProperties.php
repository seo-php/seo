<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\PersonProperties as PersonProperties1;

interface PersonProperties extends ThingProperties
{
    /**
     * @param string|string[] $value
     */
    public function additionalName(mixed $value): static;

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function address(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function affiliation(mixed $value): static;

    /**
     * @param InteractionCounterProperties|InteractionCounterProperties[]|IdReference|IdReference[] $value
     */
    public function agentInteractionStatistic(mixed $value): static;

    /**
     * @param EducationalOrganizationProperties|EducationalOrganizationProperties[]|OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function alumniOf(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function award(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function awards(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function birthDate(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function birthPlace(mixed $value): static;

    /**
     * @param BrandProperties|BrandProperties[]|OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function brand(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function callSign(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function children(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function colleague(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function colleagues(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function contactPoint(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function contactPoints(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function deathDate(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function deathPlace(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function duns(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function email(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function familyName(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function faxNumber(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function follows(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function funder(mixed $value): static;

    /**
     * @param GrantProperties|GrantProperties[]|IdReference|IdReference[] $value
     */
    public function funding(mixed $value): static;

    /**
     * @param GenderTypeProperties|GenderTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function gender(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function givenName(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function globalLocationNumber(mixed $value): static;

    /**
     * @param CertificationProperties|CertificationProperties[]|IdReference|IdReference[] $value
     */
    public function hasCertification(mixed $value): static;

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|IdReference|IdReference[] $value
     */
    public function hasCredential(mixed $value): static;

    /**
     * @param OccupationProperties|OccupationProperties[]|IdReference|IdReference[] $value
     */
    public function hasOccupation(mixed $value): static;

    /**
     * @param OfferCatalogProperties|OfferCatalogProperties[]|IdReference|IdReference[] $value
     */
    public function hasOfferCatalog(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function hasPOS(mixed $value): static;

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function height(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function homeLocation(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function honorificPrefix(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function honorificSuffix(mixed $value): static;

    /**
     * @param InteractionCounterProperties|InteractionCounterProperties[]|IdReference|IdReference[] $value
     */
    public function interactionStatistic(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function isicV4(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function jobTitle(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function knows(mixed $value): static;

    /**
     * @param string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function knowsAbout(mixed $value): static;

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function knowsLanguage(mixed $value): static;

    /**
     * @param OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function makesOffer(mixed $value): static;

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|OrganizationProperties|OrganizationProperties[]|ProgramMembershipProperties|ProgramMembershipProperties[]|IdReference|IdReference[] $value
     */
    public function memberOf(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function naics(mixed $value): static;

    /**
     * @param CountryProperties|CountryProperties[]|IdReference|IdReference[] $value
     */
    public function nationality(mixed $value): static;

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function netWorth(mixed $value): static;

    /**
     * @param OwnershipInfoProperties|OwnershipInfoProperties[]|ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function owns(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function parent(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function parents(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function performerIn(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function pronouns(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function publishingPrinciples(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function relatedTo(mixed $value): static;

    /**
     * @param DemandProperties|DemandProperties[]|IdReference|IdReference[] $value
     */
    public function seeks(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sibling(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function siblings(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function skills(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function spouse(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function taxID(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function telephone(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function vatID(mixed $value): static;

    /**
     * @param MassProperties|MassProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function weight(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function workLocation(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function worksFor(mixed $value): static;
}
