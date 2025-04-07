FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/*

WORKDIR /app

COPY . /app

COPY xdebug.ini /usr/local/etc/php/conf.d/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

# Keeps the container alive
CMD ["tail", "-f", "/dev/null"]