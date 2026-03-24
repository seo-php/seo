<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AdministrativeAreaProperties;
use Seo\SchemaOrg\Properties\AggregateRatingProperties;
use Seo\SchemaOrg\Properties\AudienceProperties;
use Seo\SchemaOrg\Properties\BrandProperties;
use Seo\SchemaOrg\Properties\CategoryCodeProperties;
use Seo\SchemaOrg\Properties\CertificationProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DemandProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GeoShapeProperties;
use Seo\SchemaOrg\Properties\GovernmentBenefitsTypeProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\InvestmentOrDepositProperties;
use Seo\SchemaOrg\Properties\MonetaryAmountProperties;
use Seo\SchemaOrg\Properties\OfferCatalogProperties;
use Seo\SchemaOrg\Properties\OfferProperties;
use Seo\SchemaOrg\Properties\OpeningHoursSpecificationProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PhysicalActivityCategoryProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\ReviewProperties;
use Seo\SchemaOrg\Properties\ServiceChannelProperties;
use Seo\SchemaOrg\Properties\ServiceProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ThingProperties;
use Seo\SchemaOrg\Type;

final class InvestmentOrDeposit extends Type implements InvestmentOrDepositProperties
{
    protected function type(): string
    {
        return 'InvestmentOrDeposit';
    }

    /**
     * @param string|string[] $value
     */
    public function additionalType(mixed $value): static
    {
        return $this->set('additionalType', $value);
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
     * @param float|float[]|int|int[]|MonetaryAmountProperties|MonetaryAmountProperties[]|IdReference|IdReference[] $value
     */
    public function amount(mixed $value): static
    {
        return $this->set('amount', $value);
    }

    /**
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function annualPercentageRate(mixed $value): static
    {
        return $this->set('annualPercentageRate', $value);
    }

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function areaServed(mixed $value): static
    {
        return $this->set('areaServed', $value);
    }

    /**
     * @param AudienceProperties|AudienceProperties[]|IdReference|IdReference[] $value
     */
    public function audience(mixed $value): static
    {
        return $this->set('audience', $value);
    }

    /**
     * @param ServiceChannelProperties|ServiceChannelProperties[]|IdReference|IdReference[] $value
     */
    public function availableChannel(mixed $value): static
    {
        return $this->set('availableChannel', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function award(mixed $value): static
    {
        return $this->set('award', $value);
    }

    /**
     * @param BrandProperties|BrandProperties[]|OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function brand(mixed $value): static
    {
        return $this->set('brand', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function broker(mixed $value): static
    {
        return $this->set('broker', $value);
    }

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|PhysicalActivityCategoryProperties|PhysicalActivityCategoryProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function category(mixed $value): static
    {
        return $this->set('category', $value);
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
    public function feesAndCommissionsSpecification(mixed $value): static
    {
        return $this->set('feesAndCommissionsSpecification', $value);
    }

    /**
     * @param CertificationProperties|CertificationProperties[]|IdReference|IdReference[] $value
     */
    public function hasCertification(mixed $value): static
    {
        return $this->set('hasCertification', $value);
    }

    /**
     * @param OfferCatalogProperties|OfferCatalogProperties[]|IdReference|IdReference[] $value
     */
    public function hasOfferCatalog(mixed $value): static
    {
        return $this->set('hasOfferCatalog', $value);
    }

    /**
     * @param OpeningHoursSpecificationProperties|OpeningHoursSpecificationProperties[]|IdReference|IdReference[] $value
     */
    public function hoursAvailable(mixed $value): static
    {
        return $this->set('hoursAvailable', $value);
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
     * @param float|float[]|int|int[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function interestRate(mixed $value): static
    {
        return $this->set('interestRate', $value);
    }

    /**
     * @param ProductProperties|ProductProperties[]|ServiceProperties|ServiceProperties[]|IdReference|IdReference[] $value
     */
    public function isRelatedTo(mixed $value): static
    {
        return $this->set('isRelatedTo', $value);
    }

    /**
     * @param ProductProperties|ProductProperties[]|ServiceProperties|ServiceProperties[]|IdReference|IdReference[] $value
     */
    public function isSimilarTo(mixed $value): static
    {
        return $this->set('isSimilarTo', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function logo(mixed $value): static
    {
        return $this->set('logo', $value);
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
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static
    {
        return $this->set('offers', $value);
    }

    /**
     * @param ActionProperties|ActionProperties[]|IdReference|IdReference[] $value
     */
    public function potentialAction(mixed $value): static
    {
        return $this->set('potentialAction', $value);
    }

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function produces(mixed $value): static
    {
        return $this->set('produces', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static
    {
        return $this->set('provider', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function providerMobility(mixed $value): static
    {
        return $this->set('providerMobility', $value);
    }

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function review(mixed $value): static
    {
        return $this->set('review', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param AdministrativeAreaProperties|AdministrativeAreaProperties[]|GeoShapeProperties|GeoShapeProperties[]|PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function serviceArea(mixed $value): static
    {
        return $this->set('serviceArea', $value);
    }

    /**
     * @param AudienceProperties|AudienceProperties[]|IdReference|IdReference[] $value
     */
    public function serviceAudience(mixed $value): static
    {
        return $this->set('serviceAudience', $value);
    }

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function serviceOutput(mixed $value): static
    {
        return $this->set('serviceOutput', $value);
    }

    /**
     * @param GovernmentBenefitsTypeProperties|GovernmentBenefitsTypeProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function serviceType(mixed $value): static
    {
        return $this->set('serviceType', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function slogan(mixed $value): static
    {
        return $this->set('slogan', $value);
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
    public function termsOfService(mixed $value): static
    {
        return $this->set('termsOfService', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }
}
