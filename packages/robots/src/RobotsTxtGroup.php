<?php

declare(strict_types=1);

namespace Seo\Robots;

final readonly class RobotsTxtGroup
{
    /**
     * @param array<string> $agents
     * @param array<RobotsTxtDirective> $directives
     */
    public function __construct(public array $agents, public array $directives) {}
}
