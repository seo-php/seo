<?php

declare(strict_types=1);

use function Pest\Laravel\artisan;

it('scaffolds all seo service providers', function (): void {
    removeSeoProviders();

    artisan('seo:install', ['--all' => true])
        ->assertSuccessful()
    ;

    expect(file_exists(app_path('Providers/HeadServiceProvider.php')))->toBeTrue()
        ->and(file_get_contents(app_path('Providers/HeadServiceProvider.php')))->toContain('Seo\\Head\\Laravel\\Providers\\HeadServiceProvider')
        ->and(file_exists(app_path('Providers/IndexNowServiceProvider.php')))->toBeTrue()
        ->and(file_get_contents(app_path('Providers/IndexNowServiceProvider.php')))->toContain('Seo\\IndexNow\\Laravel\\Providers\\IndexNowServiceProvider')
        ->and(file_exists(app_path('Providers/LlmsTxtServiceProvider.php')))->toBeTrue()
        ->and(file_get_contents(app_path('Providers/LlmsTxtServiceProvider.php')))->toContain('Seo\\LlmsTxt\\Laravel\\Providers\\LlmsTxtServiceProvider')
        ->and(file_exists(app_path('Providers/RobotsTxtServiceProvider.php')))->toBeTrue()
        ->and(file_get_contents(app_path('Providers/RobotsTxtServiceProvider.php')))->toContain('Seo\\Robots\\Laravel\\Providers\\RobotsTxtServiceProvider')
        ->and(file_exists(app_path('Providers/SchemaOrgServiceProvider.php')))->toBeTrue()
        ->and(file_get_contents(app_path('Providers/SchemaOrgServiceProvider.php')))->toContain('Seo\\SchemaOrg\\Laravel\\Providers\\SchemaOrgServiceProvider')
    ;
});

it('refuses to overwrite an existing provider without force', function (): void {
    $providerPath = app_path('Providers/HeadServiceProvider.php');
    $directory = dirname($providerPath);

    removeSeoProviders();

    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }

    file_put_contents($providerPath, '<?php // existing');

    artisan('seo:install', ['--all' => true])
        ->assertFailed()
    ;

    expect(file_get_contents($providerPath))->toBe('<?php // existing');
});

it('overwrites an existing provider with force', function (): void {
    $providerPath = app_path('Providers/HeadServiceProvider.php');
    $directory = dirname($providerPath);

    removeSeoProviders();

    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }

    file_put_contents($providerPath, '<?php // existing');

    artisan('seo:install', ['--all' => true, '--force' => true])
        ->assertSuccessful()
    ;

    expect(file_get_contents($providerPath))->toContain('Seo\\Head\\Laravel\\Providers\\HeadServiceProvider');
});
