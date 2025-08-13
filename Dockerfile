FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/app_finances

# Copiar arquivos do app
COPY . .

RUN composer install --no-dev --optimize-autoloader

# Copiar config do nginx customizado
COPY ./env/docker/nginx/sites.conf /etc/nginx/sites-available/default

# Expor porta 80 pro Nginx
EXPOSE 80

# Iniciar PHP-FPM e Nginx juntos
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]
