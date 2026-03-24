<?php

declare(strict_types=1);

namespace Seo\Robots;

use Closure;

final class RobotsTxtBuilder
{
    /**
     * @var array<RobotsTxtGroup>
     */
    private array $groups = [];

    /**
     * @var array<string>
     */
    private array $sitemaps = [];

    /**
     * @param Closure(RobotsTxtGroupBuilder): (RobotsTxtGroupBuilder|void) $callback
     */
    public function group(Closure $callback): self
    {
        $groupBuilder = new RobotsTxtGroupBuilder();

        $callback($groupBuilder);

        $this->groups[] = $groupBuilder->build();

        return $this;
    }

    public function sitemap(string $url): self
    {
        $this->sitemaps[] = $url;

        return $this;
    }

    public function build(): RobotsTxt
    {
        return new RobotsTxt($this->groups, $this->sitemaps);
    }
}
