FROM php:7.1.7-fpm

WORKDIR /app
CMD ["php-fpm", "-R"]

COPY php/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./app /app/