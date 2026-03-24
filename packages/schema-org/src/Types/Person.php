<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\BrandProperties;
use Seo\SchemaOrg\Properties\CertificationProperties;
use Seo\SchemaOrg\Properties\ContactPointProperties;
use Seo\SchemaOrg\Properties\CountryProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\DemandProperties;
use Seo\SchemaOrg\Properties\DistanceProperties;
use Seo\SchemaOrg\Properties\EducationalOccupationalCredentialProperties;
use Seo\SchemaOrg\Properties\EducationalOrganizationProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GenderTypeProperties;
use Seo\SchemaOrg\Properties\GrantProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\InteractionCounterProperties;
use Seo\SchemaOrg\Properties\LanguageProperties;
use Seo\SchemaOrg\Properties\MassProperties;
use Seo\SchemaOrg\Properties\MemberProgramTierProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountProperties;
use Seo\SchemaOrg\Properties\OccupationProperties;
use Seo\SchemaOrg\Properties\OfferCatalogProperties;
use Seo\SchemaOrg\Properties\OfferProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\OwnershipInfoProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\PostalAddressProperties;
use Seo\SchemaOrg\Properties\PriceSpecificationProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\ProgramMembershipProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\StructuredValueProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ThingProperties;
use Seo\SchemaOrg\Type;

final class Person extends Type implements PersonProperties
{
    protected function type(): string
    {
        return 'Person';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalName(mixed $value): static
    {
        return $this->set('additionalName', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
    }

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function address(mixed $value): static
    {
        return $this->set('address', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function affiliation(mixed $value): static
    {
        return $this->set('affiliation', $value);
    }

    /**
     * @param InteractionCounterProperties|InteractionCounterProperties[]|IdReference|IdReference[] $value
     */
    public function agentInteractionStatistic(mixed $value): static
    {
        return $this->set('agentInteractionStatistic', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param EducationalOrganizationProperties|EducationalOrganizationProperties[]|OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function alumniOf(mixed $value): static
    {
        return $this->set('alumniOf', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function award(mixed $value): static
    {
        return $this->set('award', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function awards(mixed $value): static
    {
        return $this->set('awards', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function birthDate(mixed $value): static
    {
        return $this->set('birthDate', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function birthPlace(mixed $value): static
    {
        return $this->set('birthPlace', $value);
    }

    /**
     * @param BrandProperties|BrandProperties[]|OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function brand(mixed $value): static
    {
        return $this->set('brand', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function callSign(mixed $value): static
    {
        return $this->set('callSign', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function children(mixed $value): static
    {
        return $this->set('children', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function colleague(mixed $value): static
    {
        return $this->set('colleague', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function colleagues(mixed $value): static
    {
        return $this->set('colleagues', $value);
    }

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function contactPoint(mixed $value): static
    {
        return $this->set('contactPoint', $value);
    }

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function contactPoints(mixed $value): static
    {
        return $this->set('contactPoints', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function deathDate(mixed $value): static
    {
        return $this->set('deathDate', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function deathPlace(mixed $value): static
    {
        return $this->set('deathPlace', $value);
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
     * @param string|string[] $value
     */
    public function duns(mixed $value): static
    {
        return $this->set('duns', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function email(mixed $value): static
    {
        return $this->set('email', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function familyName(mixed $value): static
    {
        return $this->set('familyName', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function faxNumber(mixed $value): static
    {
        return $this->set('faxNumber', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function follows(mixed $value): static
    {
        return $this->set('follows', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function funder(mixed $value): static
    {
        return $this->set('funder', $value);
    }

    /**
     * @param GrantProperties|GrantProperties[]|IdReference|IdReference[] $value
     */
    public function funding(mixed $value): static
    {
        return $this->set('funding', $value);
    }

    /**
     * @param GenderTypeProperties|GenderTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function gender(mixed $value): static
    {
        return $this->set('gender', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function givenName(mixed $value): static
    {
        return $this->set('givenName', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function globalLocationNumber(mixed $value): static
    {
        return $this->set('globalLocationNumber', $value);
    }

    /**
     * @param CertificationProperties|CertificationProperties[]|IdReference|IdReference[] $value
     */
    public function hasCertification(mixed $value): static
    {
        return $this->set('hasCertification', $value);
    }

    /**
     * @param EducationalOccupationalCredentialProperties|EducationalOccupationalCredentialProperties[]|IdReference|IdReference[] $value
     */
    public function hasCredential(mixed $value): static
    {
        return $this->set('hasCredential', $value);
    }

    /**
     * @param OccupationProperties|OccupationProperties[]|IdReference|IdReference[] $value
     */
    public function hasOccupation(mixed $value): static
    {
        return $this->set('hasOccupation', $value);
    }

    /**
     * @param OfferCatalogProperties|OfferCatalogProperties[]|IdReference|IdReference[] $value
     */
    public function hasOfferCatalog(mixed $value): static
    {
        return $this->set('hasOfferCatalog', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function hasPOS(mixed $value): static
    {
        return $this->set('hasPOS', $value);
    }

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function height(mixed $value): static
    {
        return $this->set('height', $value);
    }

    /**
     * @param ContactPointProperties|ContactPointProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function homeLocation(mixed $value): static
    {
        return $this->set('homeLocation', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function honorificPrefix(mixed $value): static
    {
        return $this->set('honorificPrefix', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function honorificSuffix(mixed $value): static
    {
        return $this->set('honorificSuffix', $value);
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
     * @param InteractionCounterProperties|InteractionCounterProperties[]|IdReference|IdReference[] $value
     */
    public function interactionStatistic(mixed $value): static
    {
        return $this->set('interactionStatistic', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function isicV4(mixed $value): static
    {
        return $this->set('isicV4', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function jobTitle(mixed $value): static
    {
        return $this->set('jobTitle', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function knows(mixed $value): static
    {
        return $this->set('knows', $value);
    }

    /**
     * @param string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function knowsAbout(mixed $value): static
    {
        return $this->set('knowsAbout', $value);
    }

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function knowsLanguage(mixed $value): static
    {
        return $this->set('knowsLanguage', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function makesOffer(mixed $value): static
    {
        return $this->set('makesOffer', $value);
    }

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|OrganizationProperties|OrganizationProperties[]|ProgramMembershipProperties|ProgramMembershipProperties[]|IdReference|IdReference[] $value
     */
    public function memberOf(mixed $value): static
    {
        return $this->set('memberOf', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function naics(mixed $value): static
    {
        return $this->set('naics', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param CountryProperties|CountryProperties[]|IdReference|IdReference[] $value
     */
    public function nationality(mixed $value): static
    {
        return $this->set('nationality', $value);
    }

    /**
     * @param MonetaryAmountProperties|MonetaryAmountProperties[]|PriceSpecificationProperties|PriceSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function netWorth(mixed $value): static
    {
        return $this->set('netWorth', $value);
    }

    /**
     * @param OwnershipInfoProperties|OwnershipInfoProperties[]|ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function owns(mixed $value): static
    {
        return $this->set('owns', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function parent(mixed $value): static
    {
        return $this->set('parent', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function parents(mixed $value): static
    {
        return $this->set('parents', $value);
    }

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function performerIn(mixed $value): static
    {
        return $this->set('performerIn', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|StructuredValueProperties|StructuredValueProperties[]|IdReference|IdReference[] $value
     */
    public function pronouns(mixed $value): static
    {
        return $this->set('pronouns', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function publishingPrinciples(mixed $value): static
    {
        return $this->set('publishingPrinciples', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function relatedTo(mixed $value): static
    {
        return $this->set('relatedTo', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param DemandProperties|DemandProperties[]|IdReference|IdReference[] $value
     */
    public function seeks(mixed $value): static
    {
        return $this->set('seeks', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sibling(mixed $value): static
    {
        return $this->set('sibling', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function siblings(mixed $value): static
    {
        return $this->set('siblings', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function skills(mixed $value): static
    {
        return $this->set('skills', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static
    {
        return $this->set('sponsor', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function spouse(mixed $value): static
    {
        return $this->set('spouse', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function taxID(mixed $value): static
    {
        return $this->set('taxID', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function telephone(mixed $value): static
    {
        return $this->set('telephone', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function vatID(mixed $value): static
    {
        return $this->set('vatID', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function weight(mixed $value): static
    {
        return $this->set('weight', $value);
    }

    /**
     * @param ContactPointProperties|ContactPointProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function workLocation(mixed $value): static
    {
        return $this->set('workLocation', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function worksFor(mixed $value): static
    {
        return $this->set('worksFor', $value);
    }
}
