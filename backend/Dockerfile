FROM php:7.3-fpm-alpine

COPY composer.lock composer.json /app/
WORKDIR /app

RUN apk -U upgrade \
    apk add --no-cache openssl bash autoconf build-base openssl-dev \
    docker-php-ext-install pdo pdo_mysql pgsql pdo_pgsql mbstring zip exif pcntl gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /app

RUN chmod +x ./docker-bootstrap.sh \
    ./docker-bootstrap.sh

EXPOSE 8081

CMD ["php", "-S", "0.0.0.0:8081", "-t", "public"]