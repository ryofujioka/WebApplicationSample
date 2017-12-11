FROM php:5.6.30-cli

RUN ["apt-get", "update"]
RUN ["apt-get", "install", "-y", "vim"]
RUN ["apt-get", "install", "-y", "git"]
RUN ["apt-get", "install", "-y", "unzip"]
RUN ["apt-get", "install", "-y", "libicu-dev"]
RUN docker-php-ext-install mbstring intl pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

EXPOSE 80