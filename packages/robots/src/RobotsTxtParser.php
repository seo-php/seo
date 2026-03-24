<?php

declare(strict_types=1);

namespace Seo\Robots;

final readonly class RobotsTxtParser
{
    public function parse(string $content): RobotsTxt
    {
        /** @var array<RobotsTxtGroup> */
        $groups = [];

        /** @var array<string> */
        $sitemaps = [];

        /** @var array<string> */
        $currentAgents = [];

        /** @var array<RobotsTxtDirective> */
        $currentDirectives = [];

        $lines = explode("\n", str_replace("\r\n", "\n", $content));

        foreach ($lines as $index => $rawLine) {
            // Handle empty lines as group separators
            if (trim($rawLine) === '') {
                if ($currentAgents !== []) {
                    $groups[] = new RobotsTxtGroup($currentAgents, $currentDirectives);
                    $currentAgents = [];
                    $currentDirectives = [];
                }

                continue;
            }

            $line = $this->stripComment($rawLine);

            if ($line === '') {
                continue;
            }

            $colonPosition = strpos($line, ':');

            if ($colonPosition === false) {
                throw RobotsTxtParseException::invalidLine($index + 1, $rawLine);
            }

            $key = substr($line, 0, $colonPosition);
            $value = trim(substr($line, $colonPosition + 1));

            if (strcasecmp($key, 'User-agent') === 0) {
                if ($currentDirectives !== []) {
                    $groups[] = new RobotsTxtGroup($currentAgents, $currentDirectives);
                    $currentAgents = [];
                    $currentDirectives = [];
                }

                $currentAgents[] = $value;

                continue;
            }

            if (strcasecmp($key, 'Sitemap') === 0) {
                $sitemaps[] = $value;

                continue;
            }

            if ($currentAgents === []) {
                throw RobotsTxtParseException::directiveWithoutGroup($index + 1, $rawLine);
            }

            $currentDirectives[] = new RobotsTxtDirective($key, $value);
        }

        if ($currentAgents !== []) {
            $groups[] = new RobotsTxtGroup($currentAgents, $currentDirectives);
        }

        return new RobotsTxt($groups, $sitemaps);
    }

    private function stripComment(string $line): string
    {
        $commentPos = strpos($line, '#');

        if ($commentPos !== false) {
            $line = substr($line, 0, $commentPos);
        }

        return trim($line);
    }
}
