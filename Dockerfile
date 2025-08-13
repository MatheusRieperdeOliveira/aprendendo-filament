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

RUN composer install --no-dev --optimize-autoloader

# Copiar config do nginx customizado
COPY ./nginx.conf /etc/nginx/sites-available/default

CMD ["php-fpm"]
