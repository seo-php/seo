<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Artisan;

it('registers the seo install command', function (): void {
    expect(Artisan::all())->toHaveKey('seo:install');
});
