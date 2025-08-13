FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY . /var/www
WORKDIR /var/www

RUN composer install
RUN composer require filament/filament:"^3.3" -W \
RUN php artisan filament:install --panels

# Copiar config do nginx customizado
COPY ./env/docker/nginx/sites.conf /etc/nginx/sites-available/default

CMD ["php-fpm"]
