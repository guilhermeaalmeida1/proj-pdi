FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    bash \
    git \
    vim \
    curl \
    wget \
    libonig-dev \
    unzip

RUN docker-php-ext-install mbstring

RUN pecl install xdebug-3.2.0 \
    && docker-php-ext-enable xdebug

RUN wget https://github.com/infection/infection/releases/download/0.27.0/infection.phar \
    && chmod +x infection.phar \
    && mv infection.phar /usr/local/bin/infection

RUN wget https://cs.symfony.com/download/php-cs-fixer-v3.phar -O php-cs-fixer \
    && chmod a+x php-cs-fixer \
    && mv php-cs-fixer /usr/local/bin/php-cs-fixer

COPY /Docker/php/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
COPY /Docker/php/php.ini /usr/local/etc/php.ini
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . /var/www

WORKDIR /var/www

RUN composer update \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

#Temporario
COPY ../../public/index.html /var/www/html/

CMD ["php-fpm"]