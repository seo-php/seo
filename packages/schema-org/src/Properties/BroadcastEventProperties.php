<?php

declare(strict_types=1);

namespace Seo\SchemaOrg\Properties;

use Seo\SchemaOrg\IdReference;

interface BroadcastEventProperties extends PublicationEventProperties
{
    /**
     * @param EventProperties|EventProperties[]|IdReference|IdReference[] $value
     */
    public function broadcastOfEvent(mixed $value): static;

    /**
     * @param bool|bool[] $value
     */
    public function isLiveBroadcast(mixed $value): static;

    /**
     * @param LanguageProperties|LanguageProperties[]|string|string[]|IdReference|IdReference[] $value
     */
    public function subtitleLanguage(mixed $value): static;

    /**
     * @param string|string[] $value
     */
    public function videoFormat(mixed $value): static;
}
