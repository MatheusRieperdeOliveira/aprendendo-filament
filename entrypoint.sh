#!/bin/bash
set -e

# Criar diretórios de logs
mkdir -p /var/www/storage/logs
chown -R www-data:www-data /var/www/storage

# Rodar scripts do composer agora que o container tá pronto
composer install --no-interaction --prefer-dist --optimize-autoloader
php artisan package:discover --ansi || true
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Iniciar o Supervisor
exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
