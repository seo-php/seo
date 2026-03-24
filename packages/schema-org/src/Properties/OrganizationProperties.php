<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\OrganizationProperties as OrganizationProperties1;

interface OrganizationProperties extends ThingProperties
{
    /**
     * @param LoanOrCreditProperties|LoanOrCreditProperties[]|PaymentMethodProperties|PaymentMethodProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function acceptedPaymentMethod(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function actionableFeedbackPolicy(mixed $value): static;

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function address(mixed $value): static;

    /**
     * @param InteractionCounterProperties|InteractionCounterProperties[]|IdReference|IdReference[] $value
     */
    public function agentInteractionStatistic(mixed $value): static;

    /**
     * @param AggregateRatingProperties|AggregateRatingProperties[]|IdReference|IdReference[] $value
     */
    public function aggregateRating(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function alumni(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function areaServed(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function award(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function awards(mixed $value): static;

    /**
     * @param BrandProperties|BrandProperties[]|OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function brand(mixed $value): static;

    /**
     * @param CertificationProperties|CertificationProperties[]|IdReference|IdReference[] $value
     */
    public function companyRegistration(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function contactPoint(mixed $value): static;

    /**
     * @param ContactPointProperties|ContactPointProperties[]|IdReference|IdReference[] $value
     */
    public function contactPoints(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function correctionsPolicy(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function department(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dissolutionDate(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function diversityPolicy(mixed $value): static;

    /**
     * @param ArticleProperties|ArticleProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function diversityStaffingReport(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function duns(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function email(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function employee(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function employees(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function ethicsPolicy(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function event(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function events(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function faxNumber(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function founder(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function founders(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function foundingDate(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function foundingLocation(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function funder(mixed $value): static;

    /**
     * @param GrantProperties|GrantProperties[]|IdReference|IdReference[] $value
     */
    public function funding(mixed $value): static;

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
     * @param string|string[] $value
     */
    public function hasGS1DigitalLink(mixed $value): static;

    /**
     * @param MemberProgramProperties|MemberProgramProperties[]|IdReference|IdReference[] $value
     */
    public function hasMemberProgram(mixed $value): static;

    /**
     * @param MerchantReturnPolicyProperties|MerchantReturnPolicyProperties[]|IdReference|IdReference[] $value
     */
    public function hasMerchantReturnPolicy(mixed $value): static;

    /**
     * @param OfferCatalogProperties|OfferCatalogProperties[]|IdReference|IdReference[] $value
     */
    public function hasOfferCatalog(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function hasPOS(mixed $value): static;

    /**
     * @param ProductReturnPolicyProperties|ProductReturnPolicyProperties[]|IdReference|IdReference[] $value
     */
    public function hasProductReturnPolicy(mixed $value): static;

    /**
     * @param ShippingServiceProperties|ShippingServiceProperties[]|IdReference|IdReference[] $value
     */
    public function hasShippingService(mixed $value): static;

    /**
     * @param InteractionCounterProperties|InteractionCounterProperties[]|IdReference|IdReference[] $value
     */
    public function interactionStatistic(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function isicV4(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function iso6523Code(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function keywords(mixed $value): static;

    /**
     * @param string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function knowsAbout(mixed $value): static;

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function knowsLanguage(mixed $value): static;

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|IdReference|IdReference[] $value
     */
    public function legalAddress(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function legalName(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function legalRepresentative(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function leiCode(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|PostalAddressProperties|PostalAddressProperties[]|string|string[]|VirtualLocationProperties|VirtualLocationProperties[]|IdReference|IdReference[] $value
     */
    public function location(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function logo(mixed $value): static;

    /**
     * @param OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function makesOffer(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function member(mixed $value): static;

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|OrganizationProperties|OrganizationProperties[]|ProgramMembershipProperties|ProgramMembershipProperties[]|IdReference|IdReference[] $value
     */
    public function memberOf(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function members(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function naics(mixed $value): static;

    /**
     * @param NonprofitTypeProperties|NonprofitTypeProperties[]|IdReference|IdReference[] $value
     */
    public function nonprofitStatus(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfEmployees(mixed $value): static;

    /**
     * @param AboutPageProperties|AboutPageProperties[]|CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function ownershipFundingInfo(mixed $value): static;

    /**
     * @param OwnershipInfoProperties|OwnershipInfoProperties[]|ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function owns(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function parentOrganization(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function publishingPrinciples(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function review(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function reviews(mixed $value): static;

    /**
     * @param DemandProperties|DemandProperties[]|IdReference|IdReference[] $value
     */
    public function seeks(mixed $value): static;

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function serviceArea(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function skills(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function slogan(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function subOrganization(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function taxID(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function telephone(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function unnamedSourcesPolicy(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function vatID(mixed $value): static;
}
