<?php

declare(strict_types=1);

namespace Seo\Laravel\Console\Commands;

use Illuminate\Console\Command;

use function Laravel\Prompts\multiselect;

final class InstallCommand extends Command
{
    protected $signature = 'seo:install
        {--F|force : Overwrite existing provider files}
        {--all : Install all packages without prompting}';

    protected $description = 'Install the SEO package';

    /**
     * @var array<string, string>
     */
    private const PACKAGES = [
        'head' => 'head:install',
        'llms-txt' => 'llms-txt:install',
        'robots' => 'robots:install',
    ];

    public function __invoke(): int
    {
        $selected = $this->selectPackages();

        $failed = [];

        foreach ($selected as $package) {
            $command = self::PACKAGES[$package] ?? null;

            if ($command === null) {
                continue;
            }

            $result = $this->call($command, [
                '--force' => (bool) $this->option('force'),
            ]);

            if ($result !== self::SUCCESS) {
                $failed[] = $package;
            }
        }

        if ($failed !== []) {
            return self::FAILURE;
        }

        $this->info('SEO package installed successfully.');

        return self::SUCCESS;
    }

    /**
     * @return list<string>
     */
    private function selectPackages(): array
    {
        if ($this->option('all') || !$this->input->isInteractive()) {
            return array_keys(self::PACKAGES);
        }

        return multiselect(
            label: 'Which SEO packages would you like to install?',
            options: [
                'head' => 'Head — meta tags, Open Graph & more',
                'llms-txt' => 'Llms.txt — llms.txt & llms-full.txt routes',
                'robots' => 'Robots.txt — robots.txt route',
            ],
            default: array_keys(self::PACKAGES),
            required: true,
        );
    }
}
