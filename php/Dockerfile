FROM php:7.0.2-apache
COPY php.ini /usr/local/etc/php/
RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev zlib1g-dev libicu-dev g++ zip unzip \
  && docker-php-ext-configure intl \
  && docker-php-ext-install intl pdo_mysql mysqli mbstring gd iconv mcrypt

# apache config
## Custom VirturlHost
ENV COSTOM_ENABLED=custom-enabled
RUN mkdir -p  /etc/apache2/${COSTOM_ENABLED}
RUN echo "" >> /etc/apache2/apache2.conf \
  && echo "# Include the configurations from the host machine" >> /etc/apache2/apache2.conf \
  && echo "IncludeOptional ${COSTOM_ENABLED}/*.conf" >> /etc/apache2/apache2.conf \
  && ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/

# Install composer
## Register the COMPOSER_HOME environment variable
ENV COMPOSER_HOME /composer
## Add global binary directory to PATH and make sure to re-export it
ENV PATH ${COMPOSER_HOME}/vendor/bin:$PATH
## Allow Composer to be run as root
ENV COMPOSER_ALLOW_SUPERUSER 1
## Composer version
ENV COMPOSER_VERSION=1.3.1
## Setup the Composer installer
RUN curl -o /tmp/composer-setup.php https://getcomposer.org/installer \
  && curl -o /tmp/composer-setup.sig https://composer.github.io/installer.sig \
  && php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) !== trim(file_get_contents('/tmp/composer-setup.sig'))) { unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); }"
RUN php /tmp/composer-setup.php --no-ansi --install-dir=/usr/local/bin --filename=composer --version=${COMPOSER_VERSION} && rm -rf /tmp/composer-setup.php

# Install git
RUN apt-get install -y libcurl4-gnutls-dev libexpat1-dev gettext libz-dev libssl-dev
RUN apt-get install -y git

# Install cakephp
RUN cd /var/www/html
# RUN composer config -g repositories.packagist composer https://packagist.jp
# RUN composer create-project --prefer-dist -n cakephp/app app
