FROM php:7.2-fpm

RUN apt-get update \
&& apt-get install -y curl openssl git libzip-dev zip\
&& docker-php-ext-configure zip --with-libzip \
&& docker-php-ext-install pdo pdo_mysql mysqli

RUN pecl install xdebug-2.7.1 \
&& docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


WORKDIR /usr/share/nginx/html
