<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Seo\IndexNow\Laravel\Http\Controllers;

Route::get('/{key}.txt', Controllers\IndexNowKeyGetController::class);
