FROM php:8.2-apache
COPY . /var/www/html/
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT /var/www/html
