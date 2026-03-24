<?php

declare(strict_types=1);

namespace Seo\LlmsTxt;

use Closure;

final class LlmsTxtBuilder
{
    private string $title = '';

    private ?string $description = null;

    private ?string $details = null;

    /**
     * @var array<LlmsTxtSection>
     */
    private array $sections = [];

    public function title(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function description(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function details(string $details): self
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @param Closure(LlmsTxtSectionBuilder): (LlmsTxtSectionBuilder|void) $callback
     */
    public function section(Closure $callback): self
    {
        $builder = new LlmsTxtSectionBuilder();

        $callback($builder);

        $this->sections[] = $builder->build();

        return $this;
    }

    public function build(): LlmsTxt
    {
        return LlmsTxt::make(
            $this->title,
            $this->description,
            $this->details,
            $this->sections,
        );
    }
}
