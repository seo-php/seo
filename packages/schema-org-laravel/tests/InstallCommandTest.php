<?php

declare(strict_types=1);

use function Pest\Laravel\artisan;

it('scaffolds the schema org service provider', function (): void {
    $providerPath = app_path('Providers/SchemaOrgServiceProvider.php');

    if (file_exists($providerPath)) {
        unlink($providerPath);
    }

    /** @var Illuminate\Testing\PendingCommand $command */
    $command = artisan('schema-org:install');

    $command->assertSuccessful();

    expect(file_exists($providerPath))->toBeTrue()
        ->and(file_get_contents($providerPath))->toContain('Seo\\SchemaOrg\\Laravel\\Providers\\SchemaOrgServiceProvider')
    ;
});

it('refuses to overwrite an existing provider without force', function (): void {
    $providerPath = app_path('Providers/SchemaOrgServiceProvider.php');
    $directory = dirname($providerPath);

    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }

    file_put_contents($providerPath, '<?php // existing');

    /** @var Illuminate\Testing\PendingCommand $command */
    $command = artisan('schema-org:install');

    $command->assertFailed();

    expect(file_get_contents($providerPath))->toBe('<?php // existing');
});

it('overwrites an existing provider with force', function (): void {
    $providerPath = app_path('Providers/SchemaOrgServiceProvider.php');
    $directory = dirname($providerPath);

    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }

    file_put_contents($providerPath, '<?php // existing');

    /** @var Illuminate\Testing\PendingCommand $command */
    $command = artisan('schema-org:install', ['--force' => true]);

    $command->assertSuccessful();

    expect(file_get_contents($providerPath))->toContain('Seo\\SchemaOrg\\Laravel\\Providers\\SchemaOrgServiceProvider');
});
