<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface APIReferenceProperties extends TechArticleProperties
{
    /**
     * @param string|string[] $value
     */
    public function assembly(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function assemblyVersion(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function executableLibraryName(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function programmingModel(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function targetPlatform(mixed $value): static;
}
