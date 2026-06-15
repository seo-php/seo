<?php

declare(strict_types=1);

namespace Seo\IndexNow\Laravel\Console\Commands;

use Illuminate\Console\Command;

final class GenerateKeyCommand extends Command
{
    protected $signature = 'indexnow:generate-key
                            {--length=32 : Key length between 8 and 128}';

    protected $description = 'Generate an IndexNow API key';

    public function __invoke(): int
    {
        $length = (int) $this->option('length');

        if ($length < 8 || $length > 128) {
            $this->error("Key length must be between 8 and 128 characters. Given: {$length}");

            return self::FAILURE;
        }

        $key = $this->generate($length);

        $this->line($key);

        return self::SUCCESS;
    }

    private function generate(int $length): string
    {
        return substr(bin2hex(random_bytes(max(1, (int) ceil($length / 2)))), 0, $length);
    }
}
