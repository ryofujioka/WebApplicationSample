FROM php:7-apache
COPY . /var/www/html/

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        zlib1g-dev \
        libicu-dev \
        g++ \
    && docker-php-ext-configure intl \
    && docker-php-ext-install -j$(nproc) iconv intl pdo pdo_mysql mbstring \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

# RUN chmod -R 777 /var/www/html/tmp/
# RUN chmod -R 777 /var/www/html/logs/

EXPOSE 80