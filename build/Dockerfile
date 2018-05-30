FROM php:7.1-apache

EXPOSE 80

RUN apt-get update && apt-get install -y git zip unzip \
	&& docker-php-ext-install pdo pdo_mysql

COPY config/php.ini /usr/local/etc/php/

RUN a2enmod rewrite

RUN /etc/init.d/apache2 restart

MAINTAINER savioasrodrigues@gmail.com 
