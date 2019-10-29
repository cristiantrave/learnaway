FROM php:7.2-fpm

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/learnaway

COPY api /var/www/learnaway

RUN composer install

ENTRYPOINT ["php", "bin/console", "server:run", "8080"]

EXPOSE 8080