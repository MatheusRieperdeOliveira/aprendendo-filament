#!/bin/bash
set -e

# Criar diretórios de logs do Supervisor e da aplicação
mkdir -p /var/www/storage/logs
chown -R www-data:www-data /var/www/storage
#chmod -R 777 /var/www/

# Iniciar o Supervisor
exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
