<?php

declare(strict_types=1);

namespace Seo\LlmsTxt;

final class LlmsTxtSectionBuilder
{
    private string $title = '';

    /**
     * @var array<LlmsTxtSectionLink>
     */
    private array $links = [];

    public function title(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function link(string $title, string $url, ?string $details = null): self
    {
        $this->links[] = LlmsTxtSectionLink::make($title, $url, $details);

        return $this;
    }

    public function build(): LlmsTxtSection
    {
        return LlmsTxtSection::make($this->title, $this->links);
    }
}
