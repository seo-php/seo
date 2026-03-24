<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface EntryPointProperties extends IntangibleProperties
{
    /**
     * @param SoftwareApplicationProperties|SoftwareApplicationProperties[]|IdReference|IdReference[] $value
     */
    public function actionApplication(mixed $value): static;

    /**
     * @param DigitalPlatformEnumerationProperties|DigitalPlatformEnumerationProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function actionPlatform(mixed $value): static;

    /**
     * @param SoftwareApplicationProperties|SoftwareApplicationProperties[]|IdReference|IdReference[] $value
     */
    public function application(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function contentType(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function encodingType(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function httpMethod(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function urlTemplate(mixed $value): static;
}
