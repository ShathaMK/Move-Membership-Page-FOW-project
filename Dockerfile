FROM ubuntu:22.04
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y \
    apache2 \
    php8.1 \
    php8.1-mysql \
    libapache2-mod-php8.1 && \
    rm -rf /var/lib/apt/lists/*
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
EXPOSE ${PORT}
CMD ["apache2ctl", "-D", "FOREGROUND"]
