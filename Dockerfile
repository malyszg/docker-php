FROM php:7-apache

WORKDIR /var/www/html

RUN apt update -y && \
    apt upgrade -y && \
    apt-get install mc -y && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql
RUN pecl install redis && docker-php-ext-enable redis
#RUN curl -sS https://getcomposer.org/installer | php

COPY vhost /etc/apache2/sites-available/000-default.conf
