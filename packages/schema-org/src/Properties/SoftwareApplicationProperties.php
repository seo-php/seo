<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;
use Seo\SchemaOrg\Properties\SoftwareApplicationProperties as SoftwareApplicationProperties1;

interface SoftwareApplicationProperties extends CreativeWorkProperties
{
    /**
     * @param string|string[] $value
     */
    public function applicationCategory(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function applicationSubCategory(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function applicationSuite(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function availableOnDevice(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function countriesNotSupported(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function countriesSupported(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function device(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function downloadUrl(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function featureList(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function fileSize(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function installUrl(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function memoryRequirements(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function operatingSystem(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function permissions(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function processorRequirements(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function releaseNotes(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function requirements(mixed $value): static;

    /**
     * @param ImageObjectProperties|ImageObjectProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function screenshot(mixed $value): static;

    /**
     * @param SoftwareApplicationProperties|SoftwareApplicationProperties[]|IdReference|IdReference[] $value
     */
    public function softwareAddOn(mixed $value): static;

    /**
     * @param CreativeWorkProperties|CreativeWorkProperties[]|IdReference|IdReference[] $value
     */
    public function softwareHelp(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function softwareRequirements(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function softwareVersion(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function storageRequirements(mixed $value): static;

    /**
     * @param DataFeedProperties|DataFeedProperties[]|IdReference|IdReference[] $value
     */
    public function supportingData(mixed $value): static;
}
