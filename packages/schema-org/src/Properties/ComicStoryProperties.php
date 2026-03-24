<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface ComicStoryProperties extends CreativeWorkProperties
{
    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function artist(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function colorist(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function inker(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function letterer(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function penciler(mixed $value): static;
}
