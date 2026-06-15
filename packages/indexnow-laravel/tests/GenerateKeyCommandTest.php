<?php

declare(strict_types=1);

use function Pest\Laravel\artisan;

it('outputs a valid key', function (): void {
    artisan('indexnow:generate-key')->assertSuccessful();
});

it('respects length option', function (): void {
    artisan('indexnow:generate-key', ['--length' => 16])->assertSuccessful();
});

it('fails for invalid length', function (): void {
    artisan('indexnow:generate-key', ['--length' => 7])->assertFailed();
    artisan('indexnow:generate-key', ['--length' => 129])->assertFailed();
});
