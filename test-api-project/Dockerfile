FROM php:8.1-fpm

RUN docker-php-ext-install mbstring exif pcntl bcmath gd

COPY composer.lock composer.json /var/www/html/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html
WORKDIR /var/www/html

RUN composer install --no-interaction --optimize-autoloader

EXPOSE 9000
CMD ["php-fpm"]
