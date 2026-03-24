<?php

declare(strict_types=1);

namespace Seo\Robots;

use RuntimeException;

final class RobotsTxtParseException extends RuntimeException
{
    public static function invalidLine(int $lineNumber, string $line): self
    {
        return new self("Invalid line {$lineNumber}: \"{$line}\"");
    }

    public static function directiveWithoutGroup(int $lineNumber, string $line): self
    {
        return new self("Directive without a preceding User-agent at line {$lineNumber}: \"{$line}\"");
    }
}
