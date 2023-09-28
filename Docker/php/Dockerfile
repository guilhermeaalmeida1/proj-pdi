FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    bash \
    git \
    vim \
    curl

COPY /public /var/www/public

COPY /Docker/php/php.ini /usr/local/etc/php.ini

CMD ["php-fpm"]