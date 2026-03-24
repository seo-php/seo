<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\AboutPageProperties;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AdministrativeAreaProperties;
use Seo\SchemaOrg\Properties\AggregateRatingProperties;
use Seo\SchemaOrg\Properties\ArticleProperties;
use Seo\SchemaOrg\Properties\BrandProperties;
use Seo\SchemaOrg\Properties\CertificationProperties;
use Seo\SchemaOrg\Properties\ContactPointProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\DemandProperties;
use Seo\SchemaOrg\Properties\EducationalOccupationalCredentialProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GeoCoordinatesProperties;
use Seo\SchemaOrg\Properties\GeoShapeProperties;
use Seo\SchemaOrg\Properties\GeospatialGeometryProperties;
use Seo\SchemaOrg\Properties\GrantProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\InteractionCounterProperties;
use Seo\SchemaOrg\Properties\LanguageProperties;
use Seo\SchemaOrg\Properties\LoanOrCreditProperties;
use Seo\SchemaOrg\Properties\LocationFeatureSpecificationProperties;
use Seo\SchemaOrg\Properties\MapProperties;
use Seo\SchemaOrg\Properties\MemberProgramProperties;
use Seo\SchemaOrg\Properties\MemberProgramTierProperties;
use Seo\SchemaOrg\Properties\MerchantReturnPolicyProperties;
use Seo\SchemaOrg\Properties\NonprofitTypeProperties;
use Seo\SchemaOrg\Properties\OfferCatalogProperties;
use Seo\SchemaOrg\Properties\OfferProperties;
use Seo\SchemaOrg\Properties\OpeningHoursSpecificationProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\OwnershipInfoProperties;
use Seo\SchemaOrg\Properties\PaymentMethodProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PhotographProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\PostalAddressProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\ProductReturnPolicyProperties;
use Seo\SchemaOrg\Properties\ProgramMembershipProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\ReviewProperties;
use Seo\SchemaOrg\Properties\ShippingServiceProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ThingProperties;
use Seo\SchemaOrg\Properties\TravelAgencyProperties;
use Seo\SchemaOrg\Properties\VirtualLocationProperties;
use Seo\SchemaOrg\Type;

final class TravelAgency extends Type implements TravelAgencyProperties
{
    protected function type(): string
    {
        return 'TravelAgency';
    }

    /**
     * @param LoanOrCreditProperties|LoanOrCreditProperties[]|PaymentMethodProperties|PaymentMethodProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function acceptedPaymentMethod(mixed $value): static
    {
        return $this->set('acceptedPaymentMethod', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function actionableFeedbackPolicy(mixed $value): static
    {
        return $this->set('actionableFeedbackPolicy', $value);
    }

    /**
     * @param PropertyValueProperties|PropertyValueProperties[]|IdReference|IdReference[] $value
     */
    public function additionalProperty(mixed $value): static
    {
        return $this->set('additionalProperty', $value);
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
     * @param InteractionCounterProperties|InteractionCounterProperties[]|IdReference|IdReference[] $value
     */
    public function agentInteractionStatistic(mixed $value): static
    {
        return $this->set('agentInteractionStatistic', $value);
    }

    /**
     * @param AggregateRatingProperties|AggregateRatingProperties[]|IdReference|IdReference[] $value
     */
    public function aggregateRating(mixed $value): static
    {
        return $this->set('aggregateRating', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function alternateName(mixed $value): static
    {
        return $this->set('alternateName', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function alumni(mixed $value): static
    {
        return $this->set('alumni', $value);
    }

    /**
     * @param LocationFeatureSpecificationProperties|LocationFeatureSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function amenityFeature(mixed $value): static
    {
        return $this->set('amenityFeature', $value);
    }

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function areaServed(mixed $value): static
    {
        return $this->set('areaServed', $value);
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
     * @param string|string[] $value
     */
    public function branchCode(mixed $value): static
    {
        return $this->set('branchCode', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function branchOf(mixed $value): static
    {
        return $this->set('branchOf', $value);
    }

    /**
     * @param BrandProperties|BrandProperties[]|OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function brand(mixed $value): static
    {
        return $this->set('brand', $value);
    }

    /**
     * @param CertificationProperties|CertificationProperties[]|IdReference|IdReference[] $value
     */
    public function companyRegistration(mixed $value): static
    {
        return $this->set('companyRegistration', $value);
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
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function containedIn(mixed $value): static
    {
        return $this->set('containedIn', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function containedInPlace(mixed $value): static
    {
        return $this->set('containedInPlace', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function containsPlace(mixed $value): static
    {
        return $this->set('containsPlace', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function correctionsPolicy(mixed $value): static
    {
        return $this->set('correctionsPolicy', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function currenciesAccepted(mixed $value): static
    {
        return $this->set('currenciesAccepted', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function department(mixed $value): static
    {
        return $this->set('department', $value);
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
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dissolutionDate(mixed $value): static
    {
        return $this->set('dissolutionDate', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function diversityPolicy(mixed $value): static
    {
        return $this->set('diversityPolicy', $value);
    }

    /**
     * @param ArticleProperties|ArticleProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function diversityStaffingReport(mixed $value): static
    {
        return $this->set('diversityStaffingReport', $value);
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
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function employee(mixed $value): static
    {
        return $this->set('employee', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function employees(mixed $value): static
    {
        return $this->set('employees', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function ethicsPolicy(mixed $value): static
    {
        return $this->set('ethicsPolicy', $value);
    }

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function event(mixed $value): static
    {
        return $this->set('event', $value);
    }

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function events(mixed $value): static
    {
        return $this->set('events', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function faxNumber(mixed $value): static
    {
        return $this->set('faxNumber', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function founder(mixed $value): static
    {
        return $this->set('founder', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function founders(mixed $value): static
    {
        return $this->set('founders', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function foundingDate(mixed $value): static
    {
        return $this->set('foundingDate', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function foundingLocation(mixed $value): static
    {
        return $this->set('foundingLocation', $value);
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
     * @param GeoCoordinatesProperties|GeoCoordinatesProperties[]|GeoShapeProperties|GeoShapeProperties[]|IdReference|IdReference[] $value
     */
    public function geo(mixed $value): static
    {
        return $this->set('geo', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoContains(mixed $value): static
    {
        return $this->set('geoContains', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCoveredBy(mixed $value): static
    {
        return $this->set('geoCoveredBy', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCovers(mixed $value): static
    {
        return $this->set('geoCovers', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoCrosses(mixed $value): static
    {
        return $this->set('geoCrosses', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoDisjoint(mixed $value): static
    {
        return $this->set('geoDisjoint', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoEquals(mixed $value): static
    {
        return $this->set('geoEquals', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoIntersects(mixed $value): static
    {
        return $this->set('geoIntersects', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoOverlaps(mixed $value): static
    {
        return $this->set('geoOverlaps', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoTouches(mixed $value): static
    {
        return $this->set('geoTouches', $value);
    }

    /**
     * @param GeospatialGeometryProperties|GeospatialGeometryProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function geoWithin(mixed $value): static
    {
        return $this->set('geoWithin', $value);
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
     * @param bool|bool[] $value
     */
    public function hasDriveThroughService(mixed $value): static
    {
        return $this->set('hasDriveThroughService', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function hasGS1DigitalLink(mixed $value): static
    {
        return $this->set('hasGS1DigitalLink', $value);
    }

    /**
     * @param MapProperties|MapProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function hasMap(mixed $value): static
    {
        return $this->set('hasMap', $value);
    }

    /**
     * @param MemberProgramProperties|MemberProgramProperties[]|IdReference|IdReference[] $value
     */
    public function hasMemberProgram(mixed $value): static
    {
        return $this->set('hasMemberProgram', $value);
    }

    /**
     * @param MerchantReturnPolicyProperties|MerchantReturnPolicyProperties[]|IdReference|IdReference[] $value
     */
    public function hasMerchantReturnPolicy(mixed $value): static
    {
        return $this->set('hasMerchantReturnPolicy', $value);
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
     * @param ProductReturnPolicyProperties|ProductReturnPolicyProperties[]|IdReference|IdReference[] $value
     */
    public function hasProductReturnPolicy(mixed $value): static
    {
        return $this->set('hasProductReturnPolicy', $value);
    }

    /**
     * @param ShippingServiceProperties|ShippingServiceProperties[]|IdReference|IdReference[] $value
     */
    public function hasShippingService(mixed $value): static
    {
        return $this->set('hasShippingService', $value);
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
     * @param bool|bool[] $value
     */
    public function isAccessibleForFree(mixed $value): static
    {
        return $this->set('isAccessibleForFree', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function isicV4(mixed $value): static
    {
        return $this->set('isicV4', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function iso6523Code(mixed $value): static
    {
        return $this->set('iso6523Code', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function keywords(mixed $value): static
    {
        return $this->set('keywords', $value);
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
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function latitude(mixed $value): static
    {
        return $this->set('latitude', $value);
    }

    /**
     * @param PostalAddressProperties|PostalAddressProperties[]|IdReference|IdReference[] $value
     */
    public function legalAddress(mixed $value): static
    {
        return $this->set('legalAddress', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function legalName(mixed $value): static
    {
        return $this->set('legalName', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function legalRepresentative(mixed $value): static
    {
        return $this->set('legalRepresentative', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function leiCode(mixed $value): static
    {
        return $this->set('leiCode', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|PostalAddressProperties|PostalAddressProperties[]|string|string[]|VirtualLocationProperties|VirtualLocationProperties[]|IdReference|IdReference[] $value
     */
    public function location(mixed $value): static
    {
        return $this->set('location', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function logo(mixed $value): static
    {
        return $this->set('logo', $value);
    }

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function longitude(mixed $value): static
    {
        return $this->set('longitude', $value);
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
     * @param string|string[] $value
     */
    public function map(mixed $value): static
    {
        return $this->set('map', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function maps(mixed $value): static
    {
        return $this->set('maps', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function maximumAttendeeCapacity(mixed $value): static
    {
        return $this->set('maximumAttendeeCapacity', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function member(mixed $value): static
    {
        return $this->set('member', $value);
    }

    /**
     * @param MemberProgramTierProperties|MemberProgramTierProperties[]|OrganizationProperties|OrganizationProperties[]|ProgramMembershipProperties|ProgramMembershipProperties[]|IdReference|IdReference[] $value
     */
    public function memberOf(mixed $value): static
    {
        return $this->set('memberOf', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function members(mixed $value): static
    {
        return $this->set('members', $value);
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
     * @param NonprofitTypeProperties|NonprofitTypeProperties[]|IdReference|IdReference[] $value
     */
    public function nonprofitStatus(mixed $value): static
    {
        return $this->set('nonprofitStatus', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function numberOfEmployees(mixed $value): static
    {
        return $this->set('numberOfEmployees', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function openingHours(mixed $value): static
    {
        return $this->set('openingHours', $value);
    }

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function openingHoursSpecification(mixed $value): static
    {
        return $this->set('openingHoursSpecification', $value);
    }

    /**
     * @param AboutPageProperties|AboutPageProperties[]|CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function ownershipFundingInfo(mixed $value): static
    {
        return $this->set('ownershipFundingInfo', $value);
    }

    /**
     * @param OwnershipInfoProperties|OwnershipInfoProperties[]|ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function owns(mixed $value): static
    {
        return $this->set('owns', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function parentOrganization(mixed $value): static
    {
        return $this->set('parentOrganization', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function paymentAccepted(mixed $value): static
    {
        return $this->set('paymentAccepted', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|PhotographProperties|PhotographProperties[]|IdReference|IdReference[] $value
     */
    public function photo(mixed $value): static
    {
        return $this->set('photo', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|PhotographProperties|PhotographProperties[]|IdReference|IdReference[] $value
     */
    public function photos(mixed $value): static
    {
        return $this->set('photos', $value);
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
    public function priceRange(mixed $value): static
    {
        return $this->set('priceRange', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function publicAccess(mixed $value): static
    {
        return $this->set('publicAccess', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function publishingPrinciples(mixed $value): static
    {
        return $this->set('publishingPrinciples', $value);
    }

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function review(mixed $value): static
    {
        return $this->set('review', $value);
    }

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function reviews(mixed $value): static
    {
        return $this->set('reviews', $value);
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
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function serviceArea(mixed $value): static
    {
        return $this->set('serviceArea', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function skills(mixed $value): static
    {
        return $this->set('skills', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function slogan(mixed $value): static
    {
        return $this->set('slogan', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function smokingAllowed(mixed $value): static
    {
        return $this->set('smokingAllowed', $value);
    }

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function specialOpeningHoursSpecification(mixed $value): static
    {
        return $this->set('specialOpeningHoursSpecification', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static
    {
        return $this->set('sponsor', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function subOrganization(mixed $value): static
    {
        return $this->set('subOrganization', $value);
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
    public function tourBookingPage(mixed $value): static
    {
        return $this->set('tourBookingPage', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function unnamedSourcesPolicy(mixed $value): static
    {
        return $this->set('unnamedSourcesPolicy', $value);
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
}
