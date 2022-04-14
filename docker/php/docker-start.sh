#!/bin/bash

php artisan cache:clear
php artisan view:clear
php artisan config:clear
php artisan route:clear
php artisan optimize:clear

php artisan octane:start --watch --host 0.0.0.0 --port 9000