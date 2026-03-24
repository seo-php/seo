<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface SoftwareSourceCodeProperties extends CreativeWorkProperties
{
    /**
     * @param string|string[] $value
     */
    public function codeRepository(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function codeSampleType(mixed $value): static;

    /**
     * @param ComputerLanguageProperties|ComputerLanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function programmingLanguage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function runtime(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function runtimePlatform(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function sampleType(mixed $value): static;

    /**
     * @param SoftwareApplicationProperties|SoftwareApplicationProperties[]|IdReference|IdReference[] $value
     */
    public function targetProduct(mixed $value): static;
}
