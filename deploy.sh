#!/bin/bash

echo "
----------------------------------
Rancang Bangun Perangkat Lunak [C]
  Sistem Informasi Akademik ITS
          Kelompok 1
----------------------------------
"

# Generate Environment
if [ ! -f .env ]; then
echo "----------------------------------
Generating environment...
----------------------------------
"
cp .env.example .env
echo " .env generated!"
fi

# Maintenance Mode
echo "
----------------------------------
Turning on maintenance mode...
----------------------------------
"
php artisan down

# Update Source Code
echo "
----------------------------------
Updating source code...
----------------------------------
"
git pull

# Install Dependencies
echo "
----------------------------------
Installing dependencies...
----------------------------------
"
composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader

# Creating siakad Database
echo "
----------------------------------
Creating 'siakad' database...
----------------------------------
"
php artisan database:create
echo " siakad database created!"

# Migrate & Seed Database
echo "
----------------------------------
Migrating database...
----------------------------------
"
php artisan migrate:fresh --seed --force

# Generate Application Key
echo "
----------------------------------
Generating application key...
----------------------------------
"
php artisan key:generate

# Clear Cache
echo "
----------------------------------
Clearing cache...
----------------------------------
"
php artisan cache:clear
php artisan config:cache

# Live Mode
echo "
----------------------------------
Turning off maintenance mode...
----------------------------------
"
php artisan up

# Deploy Server
echo "
----------------------------------
Deploying server...
----------------------------------
"
php artisan serve