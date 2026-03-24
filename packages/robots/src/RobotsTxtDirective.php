<?php

declare(strict_types=1);

namespace Seo\Robots;

final readonly class RobotsTxtDirective
{
    public function __construct(public string $name, public string $value) {}
}
