FROM php:8.3-fpm

# Instala dependências
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/app_finances

# Copiar arquivos do app
COPY . .

# Rodar composer
RUN composer install --no-dev --optimize-autoloader

# Copiar config do nginx customizado
COPY ./env/docker/nginx/sites.conf /etc/nginx/sites-available/default

# Expor porta 80
EXPOSE 80

# Iniciar PHP-FPM e Nginx juntos
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]
