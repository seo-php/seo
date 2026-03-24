<?php

declare(strict_types=1);

pest()->project()->github('seo-php/seo');

// Include per-package Pest.php files that define helpers and configuration.
$pestFiles = glob(__DIR__.'/../packages/*/tests/Pest.php');

foreach ($pestFiles as $file) {
    require_once $file;
}
