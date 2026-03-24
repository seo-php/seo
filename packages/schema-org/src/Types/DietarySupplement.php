<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AdultOrientedEnumerationProperties;
use Seo\SchemaOrg\Properties\AggregateRatingProperties;
use Seo\SchemaOrg\Properties\AudienceProperties;
use Seo\SchemaOrg\Properties\BrandProperties;
use Seo\SchemaOrg\Properties\CategoryCodeProperties;
use Seo\SchemaOrg\Properties\CertificationProperties;
use Seo\SchemaOrg\Properties\CountryProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\DemandProperties;
use Seo\SchemaOrg\Properties\DietarySupplementProperties;
use Seo\SchemaOrg\Properties\DistanceProperties;
use Seo\SchemaOrg\Properties\DrugLegalStatusProperties;
use Seo\SchemaOrg\Properties\EnergyConsumptionDetailsProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GrantProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\ItemListProperties;
use Seo\SchemaOrg\Properties\ListItemProperties;
use Seo\SchemaOrg\Properties\MassProperties;
use Seo\SchemaOrg\Properties\MaximumDoseScheduleProperties;
use Seo\SchemaOrg\Properties\MedicalCodeProperties;
use Seo\SchemaOrg\Properties\MedicalEnumerationProperties;
use Seo\SchemaOrg\Properties\MedicalGuidelineProperties;
use Seo\SchemaOrg\Properties\MedicalSpecialtyProperties;
use Seo\SchemaOrg\Properties\MedicalStudyProperties;
use Seo\SchemaOrg\Properties\MedicineSystemProperties;
use Seo\SchemaOrg\Properties\MerchantReturnPolicyProperties;
use Seo\SchemaOrg\Properties\OfferItemConditionProperties;
use Seo\SchemaOrg\Properties\OfferProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PhysicalActivityCategoryProperties;
use Seo\SchemaOrg\Properties\ProductGroupProperties;
use Seo\SchemaOrg\Properties\ProductModelProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\ProductReturnPolicyProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\RecommendedDoseScheduleProperties;
use Seo\SchemaOrg\Properties\ReviewProperties;
use Seo\SchemaOrg\Properties\ServiceProperties;
use Seo\SchemaOrg\Properties\SizeSpecificationProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ThingProperties;
use Seo\SchemaOrg\Properties\WebContentProperties;
use Seo\SchemaOrg\Type;

final class DietarySupplement extends Type implements DietarySupplementProperties
{
    protected function type(): string
    {
        return 'DietarySupplement';
    }

    /**
     * @param string|string[] $value
     */
    public function activeIngredient(mixed $value): static
    {
        return $this->set('activeIngredient', $value);
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
     * @param string|string[] $value
     */
    public function asin(mixed $value): static
    {
        return $this->set('asin', $value);
    }

    /**
     * @param AudienceProperties|AudienceProperties[]|IdReference|IdReference[] $value
     */
    public function audience(mixed $value): static
    {
        return $this->set('audience', $value);
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
     * @param BrandProperties|BrandProperties[]|OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function brand(mixed $value): static
    {
        return $this->set('brand', $value);
    }

    /**
     * @param CategoryCodeProperties|CategoryCodeProperties[]|PhysicalActivityCategoryProperties|PhysicalActivityCategoryProperties[]|string|string[]|ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function category(mixed $value): static
    {
        return $this->set('category', $value);
    }

    /**
     * @param MedicalCodeProperties|MedicalCodeProperties[]|IdReference|IdReference[] $value
     */
    public function code(mixed $value): static
    {
        return $this->set('code', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function color(mixed $value): static
    {
        return $this->set('color', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function colorSwatch(mixed $value): static
    {
        return $this->set('colorSwatch', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function countryOfAssembly(mixed $value): static
    {
        return $this->set('countryOfAssembly', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function countryOfLastProcessing(mixed $value): static
    {
        return $this->set('countryOfLastProcessing', $value);
    }

    /**
     * @param CountryProperties|CountryProperties[]|IdReference|IdReference[] $value
     */
    public function countryOfOrigin(mixed $value): static
    {
        return $this->set('countryOfOrigin', $value);
    }

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function depth(mixed $value): static
    {
        return $this->set('depth', $value);
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
     * @param string|string[] $value
     */
    public function gtin(mixed $value): static
    {
        return $this->set('gtin', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function gtin12(mixed $value): static
    {
        return $this->set('gtin12', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function gtin13(mixed $value): static
    {
        return $this->set('gtin13', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function gtin14(mixed $value): static
    {
        return $this->set('gtin14', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function gtin8(mixed $value): static
    {
        return $this->set('gtin8', $value);
    }

    /**
     * @param MedicalGuidelineProperties|MedicalGuidelineProperties[]|IdReference|IdReference[] $value
     */
    public function guideline(mixed $value): static
    {
        return $this->set('guideline', $value);
    }

    /**
     * @param AdultOrientedEnumerationProperties|AdultOrientedEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function hasAdultConsideration(mixed $value): static
    {
        return $this->set('hasAdultConsideration', $value);
    }

    /**
     * @param CertificationProperties|CertificationProperties[]|IdReference|IdReference[] $value
     */
    public function hasCertification(mixed $value): static
    {
        return $this->set('hasCertification', $value);
    }

    /**
     * @param EnergyConsumptionDetailsProperties|EnergyConsumptionDetailsProperties[]|IdReference|IdReference[] $value
     */
    public function hasEnergyConsumptionDetails(mixed $value): static
    {
        return $this->set('hasEnergyConsumptionDetails', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function hasGS1DigitalLink(mixed $value): static
    {
        return $this->set('hasGS1DigitalLink', $value);
    }

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function hasMeasurement(mixed $value): static
    {
        return $this->set('hasMeasurement', $value);
    }

    /**
     * @param MerchantReturnPolicyProperties|MerchantReturnPolicyProperties[]|IdReference|IdReference[] $value
     */
    public function hasMerchantReturnPolicy(mixed $value): static
    {
        return $this->set('hasMerchantReturnPolicy', $value);
    }

    /**
     * @param ProductReturnPolicyProperties|ProductReturnPolicyProperties[]|IdReference|IdReference[] $value
     */
    public function hasProductReturnPolicy(mixed $value): static
    {
        return $this->set('hasProductReturnPolicy', $value);
    }

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function height(mixed $value): static
    {
        return $this->set('height', $value);
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
     * @param string|string[] $value
     */
    public function inProductGroupWithID(mixed $value): static
    {
        return $this->set('inProductGroupWithID', $value);
    }

    /**
     * @param ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function isAccessoryOrSparePartFor(mixed $value): static
    {
        return $this->set('isAccessoryOrSparePartFor', $value);
    }

    /**
     * @param ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function isConsumableFor(mixed $value): static
    {
        return $this->set('isConsumableFor', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function isFamilyFriendly(mixed $value): static
    {
        return $this->set('isFamilyFriendly', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function isProprietary(mixed $value): static
    {
        return $this->set('isProprietary', $value);
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
     * @param ProductGroupProperties|ProductGroupProperties[]|ProductModelProperties|ProductModelProperties[]|IdReference|IdReference[] $value
     */
    public function isVariantOf(mixed $value): static
    {
        return $this->set('isVariantOf', $value);
    }

    /**
     * @param OfferItemConditionProperties|OfferItemConditionProperties[]|IdReference|IdReference[] $value
     */
    public function itemCondition(mixed $value): static
    {
        return $this->set('itemCondition', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function keywords(mixed $value): static
    {
        return $this->set('keywords', $value);
    }

    /**
     * @param DrugLegalStatusProperties|DrugLegalStatusProperties[]|MedicalEnumerationProperties|MedicalEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function legalStatus(mixed $value): static
    {
        return $this->set('legalStatus', $value);
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
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function manufacturer(mixed $value): static
    {
        return $this->set('manufacturer', $value);
    }

    /**
     * @param ProductProperties|ProductProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function material(mixed $value): static
    {
        return $this->set('material', $value);
    }

    /**
     * @param MaximumDoseScheduleProperties|MaximumDoseScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function maximumIntake(mixed $value): static
    {
        return $this->set('maximumIntake', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function mechanismOfAction(mixed $value): static
    {
        return $this->set('mechanismOfAction', $value);
    }

    /**
     * @param MedicineSystemProperties|MedicineSystemProperties[]|IdReference|IdReference[] $value
     */
    public function medicineSystem(mixed $value): static
    {
        return $this->set('medicineSystem', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function mobileUrl(mixed $value): static
    {
        return $this->set('mobileUrl', $value);
    }

    /**
     * @param ProductModelProperties|ProductModelProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function model(mixed $value): static
    {
        return $this->set('model', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function mpn(mixed $value): static
    {
        return $this->set('mpn', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function name(mixed $value): static
    {
        return $this->set('name', $value);
    }

    /**
     * @param ItemListProperties|ItemListProperties[]|ListItemProperties|ListItemProperties[]|string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function negativeNotes(mixed $value): static
    {
        return $this->set('negativeNotes', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function nonProprietaryName(mixed $value): static
    {
        return $this->set('nonProprietaryName', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function nsn(mixed $value): static
    {
        return $this->set('nsn', $value);
    }

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static
    {
        return $this->set('offers', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function pattern(mixed $value): static
    {
        return $this->set('pattern', $value);
    }

    /**
     * @param ItemListProperties|ItemListProperties[]|ListItemProperties|ListItemProperties[]|string|string[]|WebContentProperties|WebContentProperties[]|IdReference|IdReference[] $value
     */
    public function positiveNotes(mixed $value): static
    {
        return $this->set('positiveNotes', $value);
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
    public function productID(mixed $value): static
    {
        return $this->set('productID', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function productionDate(mixed $value): static
    {
        return $this->set('productionDate', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function proprietaryName(mixed $value): static
    {
        return $this->set('proprietaryName', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function purchaseDate(mixed $value): static
    {
        return $this->set('purchaseDate', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function recognizingAuthority(mixed $value): static
    {
        return $this->set('recognizingAuthority', $value);
    }

    /**
     * @param RecommendedDoseScheduleProperties|RecommendedDoseScheduleProperties[]|IdReference|IdReference[] $value
     */
    public function recommendedIntake(mixed $value): static
    {
        return $this->set('recommendedIntake', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function releaseDate(mixed $value): static
    {
        return $this->set('releaseDate', $value);
    }

    /**
     * @param MedicalSpecialtyProperties|MedicalSpecialtyProperties[]|IdReference|IdReference[] $value
     */
    public function relevantSpecialty(mixed $value): static
    {
        return $this->set('relevantSpecialty', $value);
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
    public function safetyConsideration(mixed $value): static
    {
        return $this->set('safetyConsideration', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sameAs(mixed $value): static
    {
        return $this->set('sameAs', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|SizeSpecificationProperties|SizeSpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function size(mixed $value): static
    {
        return $this->set('size', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function sku(mixed $value): static
    {
        return $this->set('sku', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function slogan(mixed $value): static
    {
        return $this->set('slogan', $value);
    }

    /**
     * @param MedicalStudyProperties|MedicalStudyProperties[]|IdReference|IdReference[] $value
     */
    public function study(mixed $value): static
    {
        return $this->set('study', $value);
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
    public function targetPopulation(mixed $value): static
    {
        return $this->set('targetPopulation', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param MassProperties|MassProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function weight(mixed $value): static
    {
        return $this->set('weight', $value);
    }

    /**
     * @param DistanceProperties|DistanceProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|IdReference|IdReference[] $value
     */
    public function width(mixed $value): static
    {
        return $this->set('width', $value);
    }
}
