<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use DateTimeInterface;
use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\CreativeWorkProperties as CreativeWorkProperties1;

interface CreativeWorkProperties extends ThingProperties
{
    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function about(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function abstract(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function accessMode(mixed $value): static;

    /**
     * @param ItemListProperties|ItemListProperties[]|IdReference|IdReference[] $value
     */
    public function accessModeSufficient(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function accessibilityAPI(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function accessibilityControl(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function accessibilityFeature(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function accessibilityHazard(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function accessibilitySummary(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function accountablePerson(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function acquireLicensePage(mixed $value): static;

    /**
     * @param AggregateRatingProperties|AggregateRatingProperties[]|IdReference|IdReference[] $value
     */
    public function aggregateRating(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function alternativeHeadline(mixed $value): static;

    /**
     * @param string|string[]|WebPageProperties|WebPageProperties[]|IdReference|IdReference[] $value
     */
    public function archivedAt(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function assesses(mixed $value): static;

    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|IdReference|IdReference[] $value
     */
    public function associatedMedia(mixed $value): static;

    /**
     * @param AudienceProperties|AudienceProperties[]|IdReference|IdReference[] $value
     */
    public function audience(mixed $value): static;

    /**
     * @param AudioObjectProperties|AudioObjectProperties[]|ClipProperties|ClipProperties[]|MusicRecordingProperties|MusicRecordingProperties[]|IdReference|IdReference[] $value
     */
    public function audio(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function author(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function award(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function awards(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function character(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function citation(mixed $value): static;

    /**
     * @param CommentProperties|CommentProperties[]|IdReference|IdReference[] $value
     */
    public function comment(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function commentCount(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function conditionsOfAccess(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function contentLocation(mixed $value): static;

    /**
     * @param RatingProperties|RatingProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function contentRating(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function contentReferenceTime(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function contributor(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function copyrightHolder(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function copyrightNotice(mixed $value): static;

    /**
     * @param float|float[]|int|int[] $value
     */
    public function copyrightYear(mixed $value): static;

    /**
     * @param CorrectionCommentProperties|CorrectionCommentProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function correction(mixed $value): static;

    /**
     * @param CountryProperties|CountryProperties[]|IdReference|IdReference[] $value
     */
    public function countryOfOrigin(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function creativeWorkStatus(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function creator(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function creditText(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dateCreated(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function dateModified(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function datePublished(mixed $value): static;

    /**
     * @param IPTCDigitalSourceEnumerationProperties|IPTCDigitalSourceEnumerationProperties[]|IdReference|IdReference[] $value
     */
    public function digitalSourceType(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function discussionUrl(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function editEIDR(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function editor(mixed $value): static;

    /**
     * @param AlignmentObjectProperties|AlignmentObjectProperties[]|IdReference|IdReference[] $value
     */
    public function educationalAlignment(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationalLevel(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function educationalUse(mixed $value): static;

    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|IdReference|IdReference[] $value
     */
    public function encoding(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function encodingFormat(mixed $value): static;

    /**
     * @param MediaObjectProperties|MediaObjectProperties[]|IdReference|IdReference[] $value
     */
    public function encodings(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function exampleOfWork(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function expires(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function fileFormat(mixed $value): static;

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
    public function genre(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function hasPart(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function headline(mixed $value): static;

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function inLanguage(mixed $value): static;

    /**
     * @param InteractionCounterProperties|InteractionCounterProperties[]|IdReference|IdReference[] $value
     */
    public function interactionStatistic(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function interactivityType(mixed $value): static;

    /**
     * @param ClaimProperties|ClaimProperties[]|IdReference|IdReference[] $value
     */
    public function interpretedAsClaim(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isAccessibleForFree(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|ProductProperties|ProductProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isBasedOn(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|ProductProperties|ProductProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isBasedOnUrl(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isFamilyFriendly(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function isPartOf(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function keywords(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function learningResourceType(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function license(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function locationCreated(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function mainEntity(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function maintainer(mixed $value): static;

    /**
     * @param ProductProperties|ProductProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function material(mixed $value): static;

    /**
     * @param QuantitativeValueProperties|QuantitativeValueProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function materialExtent(mixed $value): static;

    /**
     * @param ThingProperties|ThingProperties[]|IdReference|IdReference[] $value
     */
    public function mentions(mixed $value): static;

    /**
     * @param DemandProperties|DemandProperties[]|OfferProperties|OfferProperties[]|IdReference|IdReference[] $value
     */
    public function offers(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function pattern(mixed $value): static;

    /**
     * @param int|int[]|string|string[] $value
     */
    public function position(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function producer(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function provider(mixed $value): static;

    /**
     * @param PublicationEventProperties|PublicationEventProperties[]|IdReference|IdReference[] $value
     */
    public function publication(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function publisher(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function publisherImprint(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function publishingPrinciples(mixed $value): static;

    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function recordedAt(mixed $value): static;

    /**
     * @param PublicationEventProperties|PublicationEventProperties[]|IdReference|IdReference[] $value
     */
    public function releasedEvent(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function review(mixed $value): static;

    /**
     * @param ReviewProperties|ReviewProperties[]|IdReference|IdReference[] $value
     */
    public function reviews(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function schemaVersion(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[] $value
     */
    public function sdDatePublished(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function sdLicense(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sdPublisher(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|QuantitativeValueProperties|QuantitativeValueProperties[]|SizeSpecificationProperties|SizeSpecificationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function size(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|IdReference|IdReference[] $value
     */
    public function sourceOrganization(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function spatial(mixed $value): static;

    /**
     * @param PlaceProperties|PlaceProperties[]|IdReference|IdReference[] $value
     */
    public function spatialCoverage(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function sponsor(mixed $value): static;

    /**
     * @param DefinedTermProperties|DefinedTermProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function teaches(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function temporal(mixed $value): static;

    /**
     * @param DateTimeInterface|DateTimeInterface[]|string|string[] $value
     */
    public function temporalCoverage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function text(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|IdReference|IdReference[] $value
     */
    public function thumbnail(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function thumbnailUrl(mixed $value): static;

    /**
     * @param DurationProperties|DurationProperties[]|IdReference|IdReference[] $value
     */
    public function timeRequired(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function translationOfWork(mixed $value): static;

    /**
     * @param OrganizationProperties|OrganizationProperties[]|PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function translator(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function typicalAgeRange(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function usageInfo(mixed $value): static;

    /**
     * @param float|float[]|int|int[]|string|string[] $value
     */
    public function version(mixed $value): static;

    /**
     * @param ClipProperties|ClipProperties[]|VideoObjectProperties|VideoObjectProperties[]|IdReference|IdReference[] $value
     */
    public function video(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function wordCount(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function workExample(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function workTranslation(mixed $value): static;
}
