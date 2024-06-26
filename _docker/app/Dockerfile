FROM php:8.1-fpm

WORKDIR /var/www

COPY ../../composer.lock composer.json /var/www/


RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    libpq-dev \
    zip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_pgsql

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY ./storage ./storage
RUN chmod -R gu+w storage
RUN chmod -R guo+w storage

COPY ../.. /var/www
RUN chown -R www-data:www-data \
    /var/www/storage
EXPOSE 9000

CMD ["php-fpm"]
