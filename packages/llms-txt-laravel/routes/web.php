<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Seo\LlmsTxt\Laravel\Http\Controllers\LlmsTxtGetController;
use Seo\LlmsTxt\Laravel\LlmsTxtConfigRegistry;

foreach (app(LlmsTxtConfigRegistry::class)->all() as $domain => $config) {
    Route::domain($domain)
        ->middleware($config->middleware)
        ->get('/llms.txt', LlmsTxtGetController::class)
    ;
}
