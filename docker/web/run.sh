#!/usr/bin/env bash

chmod 777 -Rf public/
chmod 777 -Rf storage/
if [ ! -f "/var/www/html/.env" ]; then
    echo "[App] Copy environment"
    cp .env.example .env

    echo "[App] Key generation"
    php artisan key:generate
fi
composer update --ignore-platform-reqs
composer dump-autoload
php artisan key:generate
php artisan migrate
php-fpm
