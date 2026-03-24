<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface AlignmentObjectProperties extends IntangibleProperties
{
    /**
     * @param string|string[] $value
     */
    public function alignmentType(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function educationalFramework(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function targetDescription(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function targetName(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function targetUrl(mixed $value): static;
}
