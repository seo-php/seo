<?php

declare(strict_types=1);

namespace Seo\Robots;

final readonly class RobotsTxt
{
    /**
     * @param array<RobotsTxtGroup> $groups
     * @param array<string> $sitemaps
     */
    public function __construct(public array $groups, public array $sitemaps) {}

    public function isAllowed(string $agent, string $path): bool
    {
        $group = $this->findGroupForAgent($agent);

        if ($group === null) {
            return true;
        }

        $bestDirective = null;
        $bestLength = -1;

        foreach ($group->directives as $directive) {
            if (strcasecmp($directive->name, 'Allow') !== 0 && strcasecmp($directive->name, 'Disallow') !== 0) {
                continue;
            }

            if ($directive->value === '') {
                continue;
            }

            if (!$this->pathMatchesPattern($directive->value, $path)) {
                continue;
            }

            $patternLength = strlen($directive->value);

            if ($patternLength > $bestLength) {
                $bestLength = $patternLength;
                $bestDirective = $directive;
            } elseif ($patternLength === $bestLength && strcasecmp($directive->name, 'Allow') === 0) {
                $bestDirective = $directive;
            }
        }

        if ($bestDirective === null) {
            return true;
        }

        return strcasecmp($bestDirective->name, 'Allow') === 0;
    }

    public function isDisallowed(string $agent, string $path): bool
    {
        return !$this->isAllowed($agent, $path);
    }

    public function crawlDelayFor(string $agent): ?int
    {
        $group = $this->findGroupForAgent($agent);

        if ($group === null) {
            return null;
        }

        foreach ($group->directives as $directive) {
            if (strcasecmp($directive->name, 'Crawl-delay') === 0) {
                return (int) $directive->value;
            }
        }

        return null;
    }

    private function findGroupForAgent(string $agent): ?RobotsTxtGroup
    {
        $bestGroup = null;
        $bestLength = 0;
        $wildcardGroup = null;

        foreach ($this->groups as $group) {
            foreach ($group->agents as $groupAgent) {
                if ($groupAgent === '*') {
                    $wildcardGroup = $group;

                    continue;
                }

                if (stripos($agent, $groupAgent) === 0 && strlen($groupAgent) > $bestLength) {
                    $bestLength = strlen($groupAgent);
                    $bestGroup = $group;
                }
            }
        }

        return $bestGroup ?? $wildcardGroup;
    }

    private function pathMatchesPattern(string $pattern, string $path): bool
    {
        $regex = '';
        $length = strlen($pattern);

        for ($i = 0; $i < $length; $i++) {
            $char = $pattern[$i];

            if ($char === '*') {
                $regex .= '.*';
            } elseif ($char === '$' && $i === $length - 1) {
                $regex .= '$';
            } else {
                $regex .= preg_quote($char, '/');
            }
        }

        if (!str_ends_with($pattern, '$')) {
            $regex .= '.*';
        }

        return preg_match('/^'.$regex.'$/u', $path) === 1;
    }
}
