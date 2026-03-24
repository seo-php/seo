<?php

declare(strict_types=1);

namespace Seo\Robots;

use InvalidArgumentException;

final class RobotsTxtGroupBuilder
{
    /**
     * @var array<string>
     */
    private array $agents = [];

    /**
     * @var array<RobotsTxtDirective>
     */
    private array $directives = [];

    public function agent(string $agent): self
    {
        $this->agents[] = $agent;

        return $this;
    }

    public function disallow(string $path = ''): self
    {
        return $this->directive('Disallow', $path);
    }

    public function allow(string $path): self
    {
        return $this->directive('Allow', $path);
    }

    public function crawlDelay(int $seconds): self
    {
        return $this->directive('Crawl-delay', (string) $seconds);
    }

    public function directive(string $name, string $value): self
    {
        $this->directives[] = new RobotsTxtDirective($name, $value);

        return $this;
    }

    public function build(): RobotsTxtGroup
    {
        if ($this->agents === []) {
            throw new InvalidArgumentException('A group must have at least one user-agent');
        }

        return new RobotsTxtGroup($this->agents, $this->directives);
    }
}
