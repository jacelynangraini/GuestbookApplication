#!/bin/bash

# Enter html directory
cd /var/www/html/

# Create cache and chmod folders
mkdir -p /var/www/html/bootstrap/cache
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/framework/cache
mkdir -p /var/www/html/public/files/

# Install dependencies
export COMPOSER_ALLOW_SUPERUSER=1
composer install -d /var/www/html/

# Copy configuration from /var/www/.env, see README.MD for more information
aws --region=us-east-1 ssm get-parameter --name env --with-decryption --output text --query Parameter.Value > /var/www/html/.env

# Migrate all tables
php /var/www/html/artisan migrate

# Clear any previous cached views
php /var/www/html/artisan config:clear
php /var/www/html/artisan cache:clear
php /var/www/html/artisan view:clear

# Optimize the application
php /var/www/html/artisan config:cache
# php /var/www/html/artisan optimize
# php /var/www/html/artisan route:cache

# Change rights
sudo chmod -R 777 /var/www/html/storage/
sudo chmod -R 777 /var/www/html/bootstrap/
sudo chmod 777 -R /var/www/html/public/files/

# Bring up application
#php /var/www/html/artisan up
