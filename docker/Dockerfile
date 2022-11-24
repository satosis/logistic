FROM php:8.1-apache

RUN apt-get -y update && apt-get -y install vim curl git zip unzip libpng-dev zlib1g-dev libzip-dev libmagickwand-dev
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash
RUN apt-get -y install nodejs
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install gd
RUN docker-php-ext-install zip

RUN docker-php-ext-enable pdo_mysql
RUN docker-php-ext-enable gd
RUN docker-php-ext-enable zip

RUN pecl install imagick
RUN docker-php-ext-enable imagick

RUN a2enmod rewrite ssl

WORKDIR /var/www/html

EXPOSE 80 443
