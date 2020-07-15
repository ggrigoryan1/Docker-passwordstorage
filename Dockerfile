FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

# ADD . /var/www/html
# RUN chown -R www-data:www-data /var/www/html