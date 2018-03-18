FROM php:7.1.7-fpm

RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install  pdo_pgsql

WORKDIR /app
CMD ["php-fpm", "-R"]

COPY php/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./app /app/