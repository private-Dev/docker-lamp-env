
FROM php:7.3.3-apache
RUN apt-get update && apt-get upgrade -y --allow-unauthenticated
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 80
