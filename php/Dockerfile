FROM php:8.0-fpm

RUN apt-get update && apt-get install -y zlib1g-dev g++ git libicu-dev zip libpq-dev libzip-dev zip wget \
    && docker-php-ext-install intl opcache pdo pdo_mysql pdo_pgsql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

WORKDIR /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer