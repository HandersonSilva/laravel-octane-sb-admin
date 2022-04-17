#!/bin/bash

#Descomentar em desenvolvimento
composer install
npm install && npm run production

php artisan cache:clear
php artisan view:clear
php artisan config:clear
php artisan route:clear
php artisan optimize:clear

php artisan migrate --force
php artisan db:seed --force

php artisan octane:start --watch --host 0.0.0.0 --port 9000