<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Types;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\ActionProperties;
use Seo\SchemaOrg\Properties\AdultOrientedEnumerationProperties;
use Seo\SchemaOrg\Properties\AggregateRatingProperties;
use Seo\SchemaOrg\Properties\AlignmentObjectProperties;
use Seo\SchemaOrg\Properties\AudienceProperties;
use Seo\SchemaOrg\Properties\AudioObjectProperties;
use Seo\SchemaOrg\Properties\BrandProperties;
use Seo\SchemaOrg\Properties\CategoryCodeProperties;
use Seo\SchemaOrg\Properties\CertificationProperties;
use Seo\SchemaOrg\Properties\ClaimProperties;
use Seo\SchemaOrg\Properties\ClipProperties;
use Seo\SchemaOrg\Properties\CommentProperties;
use Seo\SchemaOrg\Properties\CorrectionCommentProperties;
use Seo\SchemaOrg\Properties\CountryProperties;
use Seo\SchemaOrg\Properties\CreativeWorkProperties;
use Seo\SchemaOrg\Properties\DefinedTermProperties;
use Seo\SchemaOrg\Properties\DemandProperties;
use Seo\SchemaOrg\Properties\DistanceProperties;
use Seo\SchemaOrg\Properties\DurationProperties;
use Seo\SchemaOrg\Properties\EnergyConsumptionDetailsProperties;
use Seo\SchemaOrg\Properties\EventProperties;
use Seo\SchemaOrg\Properties\GrantProperties;
use Seo\SchemaOrg\Properties\IPTCDigitalSourceEnumerationProperties;
use Seo\SchemaOrg\Properties\ImageObjectProperties;
use Seo\SchemaOrg\Properties\InteractionCounterProperties;
use Seo\SchemaOrg\Properties\ItemListProperties;
use Seo\SchemaOrg\Properties\LanguageProperties;
use Seo\SchemaOrg\Properties\ListItemProperties;
use Seo\SchemaOrg\Properties\MassProperties;
use Seo\SchemaOrg\Properties\MediaObjectProperties;
use Seo\SchemaOrg\Properties\MerchantReturnPolicyProperties;
use Seo\SchemaOrg\Properties\MusicRecordingProperties;
use Seo\SchemaOrg\Properties\OfferItemConditionProperties;
use Seo\SchemaOrg\Properties\OfferProperties;
use Seo\SchemaOrg\Properties\OrganizationProperties;
use Seo\SchemaOrg\Properties\PersonProperties;
use Seo\SchemaOrg\Properties\PhysicalActivityCategoryProperties;
use Seo\SchemaOrg\Properties\PlaceProperties;
use Seo\SchemaOrg\Properties\ProductCollectionProperties;
use Seo\SchemaOrg\Properties\ProductGroupProperties;
use Seo\SchemaOrg\Properties\ProductModelProperties;
use Seo\SchemaOrg\Properties\ProductProperties;
use Seo\SchemaOrg\Properties\ProductReturnPolicyProperties;
use Seo\SchemaOrg\Properties\PropertyValueProperties;
use Seo\SchemaOrg\Properties\PublicationEventProperties;
use Seo\SchemaOrg\Properties\QuantitativeValueProperties;
use Seo\SchemaOrg\Properties\RatingProperties;
use Seo\SchemaOrg\Properties\ReviewProperties;
use Seo\SchemaOrg\Properties\ServiceProperties;
use Seo\SchemaOrg\Properties\SizeSpecificationProperties;
use Seo\SchemaOrg\Properties\TextObjectProperties;
use Seo\SchemaOrg\Properties\ThingProperties;
use Seo\SchemaOrg\Properties\TypeAndQuantityNodeProperties;
use Seo\SchemaOrg\Properties\VideoObjectProperties;
use Seo\SchemaOrg\Properties\WebContentProperties;
use Seo\SchemaOrg\Properties\WebPageProperties;
use Seo\SchemaOrg\Type;

final class ProductCollection extends Type implements ProductCollectionProperties
{
    protected function type(): string
    {
        return 'ProductCollection';
    }

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function about(mixed $value): static
    {
        return $this->set('about', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function abstract(mixed $value): static
    {
        return $this->set('abstract', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function accessMode(mixed $value): static
    {
        return $this->set('accessMode', $value);
    }

    /**
     * @param ItemListProperties|ItemListProperties[]|IdReference|IdReference[] $value
     */
    public function accessModeSufficient(mixed $value): static
    {
        return $this->set('accessModeSufficient', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function accessibilityAPI(mixed $value): static
    {
        return $this->set('accessibilityAPI', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function accessibilityControl(mixed $value): static
    {
        return $this->set('accessibilityControl', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function accessibilityFeature(mixed $value): static
    {
        return $this->set('accessibilityFeature', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function accessibilityHazard(mixed $value): static
    {
        return $this->set('accessibilityHazard', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function accessibilitySummary(mixed $value): static
    {
        return $this->set('accessibilitySummary', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function accountablePerson(mixed $value): static
    {
        return $this->set('accountablePerson', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function acquireLicensePage(mixed $value): static
    {
        return $this->set('acquireLicensePage', $value);
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
    public function alternativeHeadline(mixed $value): static
    {
        return $this->set('alternativeHeadline', $value);
    }

    /**
     * @param string|string[]|WebPageProperties|WebPageProperties[]|IdReference|IdReference[] $value
     */
    public function archivedAt(mixed $value): static
    {
        return $this->set('archivedAt', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function asin(mixed $value): static
    {
        return $this->set('asin', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function assesses(mixed $value): static
    {
        return $this->set('assesses', $value);
    }

    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|IdReference|IdReference[] $value
     */
    public function associatedMedia(mixed $value): static
    {
        return $this->set('associatedMedia', $value);
    }

    /**
     * @param AudienceProperties|AudienceProperties[]|IdReference|IdReference[] $value
     */
    public function audience(mixed $value): static
    {
        return $this->set('audience', $value);
    }

    /**
     * @param AudioObjectProperties|AudioObjectProperties[]|ClipProperties|ClipProperties[]|MusicRecordingProperties|MusicRecordingProperties[]|IdReference|IdReference[] $value
     */
    public function audio(mixed $value): static
    {
        return $this->set('audio', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function author(mixed $value): static
    {
        return $this->set('author', $value);
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
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function character(mixed $value): static
    {
        return $this->set('character', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function citation(mixed $value): static
    {
        return $this->set('citation', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function collectionSize(mixed $value): static
    {
        return $this->set('collectionSize', $value);
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
     * @param CommentProperties|CommentProperties[]|IdReference|IdReference[] $value
     */
    public function comment(mixed $value): static
    {
        return $this->set('comment', $value);
    }

    /**
     * @param int|int[] $value
     */
    public function commentCount(mixed $value): static
    {
        return $this->set('commentCount', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function conditionsOfAccess(mixed $value): static
    {
        return $this->set('conditionsOfAccess', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function contentLocation(mixed $value): static
    {
        return $this->set('contentLocation', $value);
    }

    /**
     * @param RatingProperties|RatingProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function contentRating(mixed $value): static
    {
        return $this->set('contentRating', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function contentReferenceTime(mixed $value): static
    {
        return $this->set('contentReferenceTime', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function contributor(mixed $value): static
    {
        return $this->set('contributor', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function copyrightHolder(mixed $value): static
    {
        return $this->set('copyrightHolder', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function copyrightNotice(mixed $value): static
    {
        return $this->set('copyrightNotice', $value);
    }

    /**
     * @param float|float[]|int|int[] $value
     */
    public function copyrightYear(mixed $value): static
    {
        return $this->set('copyrightYear', $value);
    }

    /**
     * @param CorrectionCommentProperties|CorrectionCommentProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function correction(mixed $value): static
    {
        return $this->set('correction', $value);
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
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function creativeWorkStatus(mixed $value): static
    {
        return $this->set('creativeWorkStatus', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function creator(mixed $value): static
    {
        return $this->set('creator', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function creditText(mixed $value): static
    {
        return $this->set('creditText', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dateCreated(mixed $value): static
    {
        return $this->set('dateCreated', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dateModified(mixed $value): static
    {
        return $this->set('dateModified', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datePublished(mixed $value): static
    {
        return $this->set('datePublished', $value);
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
     * @param IPTCDigitalSourceEnumerationProperties|IPTCDigitalSourceEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function digitalSourceType(mixed $value): static
    {
        return $this->set('digitalSourceType', $value);
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
    public function discussionUrl(mixed $value): static
    {
        return $this->set('discussionUrl', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function editEIDR(mixed $value): static
    {
        return $this->set('editEIDR', $value);
    }

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function editor(mixed $value): static
    {
        return $this->set('editor', $value);
    }

    /**
     * @param AlignmentObjectProperties|AlignmentObjectProperties[]|IdReference|IdReference[] $value
     */
    public function educationalAlignment(mixed $value): static
    {
        return $this->set('educationalAlignment', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationalLevel(mixed $value): static
    {
        return $this->set('educationalLevel', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationalUse(mixed $value): static
    {
        return $this->set('educationalUse', $value);
    }

    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|IdReference|IdReference[] $value
     */
    public function encoding(mixed $value): static
    {
        return $this->set('encoding', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function encodingFormat(mixed $value): static
    {
        return $this->set('encodingFormat', $value);
    }

    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|IdReference|IdReference[] $value
     */
    public function encodings(mixed $value): static
    {
        return $this->set('encodings', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function exampleOfWork(mixed $value): static
    {
        return $this->set('exampleOfWork', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function expires(mixed $value): static
    {
        return $this->set('expires', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function fileFormat(mixed $value): static
    {
        return $this->set('fileFormat', $value);
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
     * @param string|string[] $value
     */
    public function genre(mixed $value): static
    {
        return $this->set('genre', $value);
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
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function hasPart(mixed $value): static
    {
        return $this->set('hasPart', $value);
    }

    /**
     * @param ProductReturnPolicyProperties|ProductReturnPolicyProperties[]|IdReference|IdReference[] $value
     */
    public function hasProductReturnPolicy(mixed $value): static
    {
        return $this->set('hasProductReturnPolicy', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function headline(mixed $value): static
    {
        return $this->set('headline', $value);
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
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inLanguage(mixed $value): static
    {
        return $this->set('inLanguage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function inProductGroupWithID(mixed $value): static
    {
        return $this->set('inProductGroupWithID', $value);
    }

    /**
     * @param TypeAndQuantityNodeProperties|TypeAndQuantityNodeProperties[]|IdReference|IdReference[] $value
     */
    public function includesObject(mixed $value): static
    {
        return $this->set('includesObject', $value);
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
    public function interactivityType(mixed $value): static
    {
        return $this->set('interactivityType', $value);
    }

    /**
     * @param ClaimProperties|ClaimProperties[]|IdReference|IdReference[] $value
     */
    public function interpretedAsClaim(mixed $value): static
    {
        return $this->set('interpretedAsClaim', $value);
    }

    /**
     * @param bool|bool[] $value
     */
    public function isAccessibleForFree(mixed $value): static
    {
        return $this->set('isAccessibleForFree', $value);
    }

    /**
     * @param ProductProperties|ProductProperties[]|IdReference|IdReference[] $value
     */
    public function isAccessoryOrSparePartFor(mixed $value): static
    {
        return $this->set('isAccessoryOrSparePartFor', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|ProductProperties|ProductProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isBasedOn(mixed $value): static
    {
        return $this->set('isBasedOn', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|ProductProperties|ProductProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isBasedOnUrl(mixed $value): static
    {
        return $this->set('isBasedOnUrl', $value);
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
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isPartOf(mixed $value): static
    {
        return $this->set('isPartOf', $value);
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
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function learningResourceType(mixed $value): static
    {
        return $this->set('learningResourceType', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function license(mixed $value): static
    {
        return $this->set('license', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function locationCreated(mixed $value): static
    {
        return $this->set('locationCreated', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function logo(mixed $value): static
    {
        return $this->set('logo', $value);
    }

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function mainEntity(mixed $value): static
    {
        return $this->set('mainEntity', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function mainEntityOfPage(mixed $value): static
    {
        return $this->set('mainEntityOfPage', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function maintainer(mixed $value): static
    {
        return $this->set('maintainer', $value);
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
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function materialExtent(mixed $value): static
    {
        return $this->set('materialExtent', $value);
    }

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function mentions(mixed $value): static
    {
        return $this->set('mentions', $value);
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
     * @param int|int[]|string|string[] $value
     */
    public function position(mixed $value): static
    {
        return $this->set('position', $value);
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
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function producer(mixed $value): static
    {
        return $this->set('producer', $value);
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
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static
    {
        return $this->set('provider', $value);
    }

    /**
     * @param PublicationEventProperties|PublicationEventProperties[]|IdReference|IdReference[] $value
     */
    public function publication(mixed $value): static
    {
        return $this->set('publication', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function publisher(mixed $value): static
    {
        return $this->set('publisher', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function publisherImprint(mixed $value): static
    {
        return $this->set('publisherImprint', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function publishingPrinciples(mixed $value): static
    {
        return $this->set('publishingPrinciples', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function purchaseDate(mixed $value): static
    {
        return $this->set('purchaseDate', $value);
    }

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function recordedAt(mixed $value): static
    {
        return $this->set('recordedAt', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function releaseDate(mixed $value): static
    {
        return $this->set('releaseDate', $value);
    }

    /**
     * @param PublicationEventProperties|PublicationEventProperties[]|IdReference|IdReference[] $value
     */
    public function releasedEvent(mixed $value): static
    {
        return $this->set('releasedEvent', $value);
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
     * @param string|string[] $value
     */
    public function schemaVersion(mixed $value): static
    {
        return $this->set('schemaVersion', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function sdDatePublished(mixed $value): static
    {
        return $this->set('sdDatePublished', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function sdLicense(mixed $value): static
    {
        return $this->set('sdLicense', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sdPublisher(mixed $value): static
    {
        return $this->set('sdPublisher', $value);
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
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function sourceOrganization(mixed $value): static
    {
        return $this->set('sourceOrganization', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function spatial(mixed $value): static
    {
        return $this->set('spatial', $value);
    }

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function spatialCoverage(mixed $value): static
    {
        return $this->set('spatialCoverage', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static
    {
        return $this->set('sponsor', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function subjectOf(mixed $value): static
    {
        return $this->set('subjectOf', $value);
    }

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function teaches(mixed $value): static
    {
        return $this->set('teaches', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function temporal(mixed $value): static
    {
        return $this->set('temporal', $value);
    }

    /**
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function temporalCoverage(mixed $value): static
    {
        return $this->set('temporalCoverage', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function text(mixed $value): static
    {
        return $this->set('text', $value);
    }

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|IdReference|IdReference[] $value
     */
    public function thumbnail(mixed $value): static
    {
        return $this->set('thumbnail', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function thumbnailUrl(mixed $value): static
    {
        return $this->set('thumbnailUrl', $value);
    }

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function timeRequired(mixed $value): static
    {
        return $this->set('timeRequired', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function translationOfWork(mixed $value): static
    {
        return $this->set('translationOfWork', $value);
    }

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function translator(mixed $value): static
    {
        return $this->set('translator', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function typicalAgeRange(mixed $value): static
    {
        return $this->set('typicalAgeRange', $value);
    }

    /**
     * @param string|string[] $value
     */
    public function url(mixed $value): static
    {
        return $this->set('url', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function usageInfo(mixed $value): static
    {
        return $this->set('usageInfo', $value);
    }

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function version(mixed $value): static
    {
        return $this->set('version', $value);
    }

    /**
     * @param ClipProperties|ClipProperties[]|VideoObjectProperties|VideoObjectProperties[]|IdReference|IdReference[] $value
     */
    public function video(mixed $value): static
    {
        return $this->set('video', $value);
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

    /**
     * @param int|int[] $value
     */
    public function wordCount(mixed $value): static
    {
        return $this->set('wordCount', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function workExample(mixed $value): static
    {
        return $this->set('workExample', $value);
    }

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function workTranslation(mixed $value): static
    {
        return $this->set('workTranslation', $value);
    }
}
