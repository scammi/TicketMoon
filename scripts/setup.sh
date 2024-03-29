#!/usr/bin/env bash

# Set up script for the web server,used in both Dockerfiles,
# while building the Attendize container or installing Attendize in a different environment.
composer install --no-interaction
cp .env.example .env
chmod -R a+w .env
chmod -R a+w storage/
chmod -R a+w bootstrap/cache/
php artisan key:generate
