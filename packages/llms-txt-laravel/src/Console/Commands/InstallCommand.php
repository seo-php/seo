<?php

declare(strict_types=1);

namespace Seo\LlmsTxt\Laravel\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\ServiceProvider;
use RuntimeException;

final class InstallCommand extends Command
{
    protected $signature = 'llms-txt:install {--F|force}';

    protected $description = 'Install the LlmsTxt package';

    public function __invoke(): int
    {
        $this->comment('Installing LlmsTxt package...');

        $appNamespace = trim($this->laravel->getNamespace(), '\\');

        $providerPath = app_path('Providers/LlmsTxtServiceProvider.php');

        if (file_exists($providerPath) && !$this->option('force')) {
            $this->error("{$providerPath} already exists. Use the --force option to overwrite.");

            return self::FAILURE;
        }

        $this->generateProvider($providerPath, $appNamespace);

        ServiceProvider::addProviderToBootstrapFile("{$appNamespace}\\Providers\\LlmsTxtServiceProvider");

        $this->info('LlmsTxt package installed successfully.');

        return self::SUCCESS;
    }

    private function generateProvider(string $providerPath, string $appNamespace): void
    {
        $stub = file_get_contents(__DIR__.'/../../../stubs/LlmsTxtServiceProvider.stub');

        if ($stub === false) {
            throw new RuntimeException('Failed to read the provider stub file.');
        }

        $content = str_replace('DummyNamespace', "{$appNamespace}\\Providers", $stub);

        $directory = dirname($providerPath);

        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        file_put_contents($providerPath, $content);
    }
}
