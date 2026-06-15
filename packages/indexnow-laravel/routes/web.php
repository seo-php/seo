<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Seo\IndexNow\Laravel\Http\Controllers\IndexNowKeyGetController;
use Seo\IndexNow\Laravel\IndexNowConfigRegistry;

foreach (app(IndexNowConfigRegistry::class)->all() as $domain => $config) {
    if ($config->key === '') {
        continue;
    }

    $path = $config->keyLocation !== null
        ? parse_url($config->keyLocation, PHP_URL_PATH)
        : "/{$config->key}.txt";

    if (!is_string($path) || $path === '') {
        continue;
    }

    Route::domain($domain)
        ->middleware($config->middleware)
        ->get($path, IndexNowKeyGetController::class)
    ;
}
