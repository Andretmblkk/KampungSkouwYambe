<?php

// Optimize Laravel
passthru('php artisan optimize');
passthru('php artisan view:cache');
passthru('php artisan config:cache');
passthru('php artisan route:cache');

// Copy .env.example to .env if .env doesn't exist
if (!file_exists('.env')) {
    copy('.env.example', '.env');
}

// Generate application key if not set
if (empty(env('APP_KEY'))) {
    passthru('php artisan key:generate');
} 