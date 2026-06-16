<?php

declare(strict_types=1);

use function Pest\Laravel\artisan;

it('scaffolds the llms txt service provider', function (): void {
    $providerPath = app_path('Providers/LlmsTxtServiceProvider.php');

    if (file_exists($providerPath)) {
        unlink($providerPath);
    }

    artisan('llms-txt:install')
        ->assertSuccessful()
    ;

    expect(file_exists($providerPath))->toBeTrue()
        ->and(file_get_contents($providerPath))->toContain('Seo\\LlmsTxt\\Laravel\\Providers\\LlmsTxtServiceProvider')
    ;
});

it('refuses to overwrite an existing provider without force', function (): void {
    $providerPath = app_path('Providers/LlmsTxtServiceProvider.php');
    $directory = dirname($providerPath);

    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }

    file_put_contents($providerPath, '<?php // existing');

    artisan('llms-txt:install')
        ->assertFailed()
    ;

    expect(file_get_contents($providerPath))->toBe('<?php // existing');
});

it('overwrites an existing provider with force', function (): void {
    $providerPath = app_path('Providers/LlmsTxtServiceProvider.php');
    $directory = dirname($providerPath);

    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }

    file_put_contents($providerPath, '<?php // existing');

    artisan('llms-txt:install', ['--force' => true])
        ->assertSuccessful()
    ;

    expect(file_get_contents($providerPath))->toContain('Seo\\LlmsTxt\\Laravel\\Providers\\LlmsTxtServiceProvider');
});
