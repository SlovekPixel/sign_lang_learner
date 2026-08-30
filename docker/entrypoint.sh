#!/bin/bash
set -e

cd /var/www/html

if [ ! -f .env ]; then
  cp .env.example .env
fi

# Sync DB settings for Docker network
sed -i 's/^DB_HOST=.*/DB_HOST=db/' .env
sed -i 's/^DB_PORT=.*/DB_PORT=3306/' .env
sed -i 's/^DB_DATABASE=.*/DB_DATABASE=learner/' .env
sed -i 's/^DB_USERNAME=.*/DB_USERNAME=learner/' .env
sed -i 's/^DB_PASSWORD=.*/DB_PASSWORD=secret/' .env
sed -i 's|^APP_URL=.*|APP_URL=http://localhost:8000|' .env

if [ ! -d vendor/laravel ]; then
  composer install --no-interaction --prefer-dist --optimize-autoloader
fi

# Generate APP_KEY if empty
if ! grep -q '^APP_KEY=base64:' .env; then
  php artisan key:generate --force
fi

chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true
chmod -R 775 storage bootstrap/cache 2>/dev/null || true

# Warm views only (route/config cache can fight local .env edits)
php artisan view:cache >/dev/null 2>&1 || true

exec "$@"
