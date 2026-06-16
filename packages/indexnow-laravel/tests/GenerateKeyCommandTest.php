<?php

declare(strict_types=1);

use function Pest\Laravel\artisan;

it('outputs a valid key', function (): void {
    /** @var Illuminate\Testing\PendingCommand $command */
    $command = artisan('indexnow:generate-key');

    $command->assertSuccessful();
});

it('respects length option', function (): void {
    /** @var Illuminate\Testing\PendingCommand $command */
    $command = artisan('indexnow:generate-key', ['--length' => 16]);

    $command->assertSuccessful();
});

it('fails for invalid length', function (): void {
    /** @var Illuminate\Testing\PendingCommand $command */
    $command = artisan('indexnow:generate-key', ['--length' => 7]);
    $command->assertFailed();

    /** @var Illuminate\Testing\PendingCommand $command */
    $command = artisan('indexnow:generate-key', ['--length' => 129]);
    $command->assertFailed();
});
