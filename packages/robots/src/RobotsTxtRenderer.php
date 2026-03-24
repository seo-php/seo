<?php

declare(strict_types=1);

namespace Seo\Robots;

final readonly class RobotsTxtRenderer
{
    public function render(RobotsTxt $robots): string
    {
        $content = implode(PHP_EOL.PHP_EOL, [
            $this->groups($robots->groups),
            $this->sitemaps($robots->sitemaps),
        ]);

        return trim($content);
    }

    /**
     * @param array<RobotsTxtGroup> $groups
     */
    private function groups(array $groups): string
    {
        $groups = array_map(function (RobotsTxtGroup $group): string {
            $agents = array_map(fn (string $agent) => "User-agent: {$agent}", $group->agents);
            $directives = array_map(fn (RobotsTxtDirective $directive) => "{$directive->name}: {$directive->value}", $group->directives);

            return implode(PHP_EOL, array_merge($agents, $directives));
        }, $groups);

        return implode(PHP_EOL.PHP_EOL, $groups);
    }

    /**
     * @param array<string> $sitemaps
     */
    private function sitemaps(array $sitemaps): string
    {
        return implode(PHP_EOL, array_map(fn (string $sitemap) => "Sitemap: {$sitemap}", $sitemaps));
    }
}
