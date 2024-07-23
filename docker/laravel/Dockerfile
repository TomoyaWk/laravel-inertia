FROM php:8.3-fpm

RUN apt-get update \
  && apt-get install -y zlib1g-dev mariadb-client vim libzip-dev nodejs npm \
  && docker-php-ext-install zip pdo_mysql

  
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin
EXPOSE 5173

WORKDIR /var/www

RUN composer global require "laravel/installer"