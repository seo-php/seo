<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

interface PublicationVolumeProperties extends CreativeWorkProperties
{
    /**
     * @param int|int[]|string|string[] $value
     */
    public function pageEnd(mixed $value): static;

    /**
     * @param int|int[]|string|string[] $value
     */
    public function pageStart(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function pagination(mixed $value): static;

    /**
     * @param int|int[]|string|string[] $value
     */
    public function volumeNumber(mixed $value): static;
}
