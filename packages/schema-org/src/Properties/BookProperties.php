<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BookProperties extends CreativeWorkProperties
{
    /**
     * @param bool|bool[] $value
     */
    public function abridged(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function bookEdition(mixed $value): static;

    /**
     * @param BookFormatTypeProperties|BookFormatTypeProperties[]|IdReference|IdReference[] $value
     */
    public function bookFormat(mixed $value): static;

    /**
     * @param PersonProperties|PersonProperties[]|IdReference|IdReference[] $value
     */
    public function illustrator(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function isbn(mixed $value): static;

    /**
     * @param int|int[] $value
     */
    public function numberOfPages(mixed $value): static;
}
