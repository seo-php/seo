<?php

declare(strict_types=1);

namespace Seo\LlmsTxt;

final readonly class LlmsTxtRenderer
{
    public function render(LlmsTxt $llms): string
    {
        $content = implode(PHP_EOL.PHP_EOL, array_filter([
            $this->title($llms->title),
            $this->description($llms->description),
            $this->details($llms->details),
            $this->sections($llms->sections),
        ]));

        return trim($content);
    }

    private function title(string $title): string
    {
        return "# {$title}";
    }

    private function description(?string $description): ?string
    {
        if ($description === null) {
            return null;
        }

        return "> {$description}";
    }

    private function details(?string $details): ?string
    {
        if ($details === null) {
            return null;
        }

        return $details;
    }

    /**
     * @param array<LlmsTxtSection> $sections
     */
    private function sections(array $sections): ?string
    {
        if ($sections === []) {
            return null;
        }

        $sections = array_map(fn (LlmsTxtSection $section): string => $this->section($section), $sections);

        return implode(PHP_EOL.PHP_EOL, $sections);
    }

    private function section(LlmsTxtSection $section): string
    {
        $content = implode(PHP_EOL.PHP_EOL, [
            "## {$section->title}",
            implode(PHP_EOL, array_map(fn (LlmsTxtSectionLink $link) => $this->sectionLink($link), $section->links)),
        ]);

        return trim($content);
    }

    private function sectionLink(LlmsTxtSectionLink $link): string
    {
        $content = "- [{$link->title}]({$link->url})";

        if ($link->details !== null) {
            $content .= ": {$link->details}";
        }

        return $content;
    }
}
