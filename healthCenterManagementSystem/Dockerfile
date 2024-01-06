FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql zip

RUN a2enmod rewrite && service apache2 restart

WORKDIR /var/www/html

COPY . /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --no-interaction --optimize-autoloader

RUN chmod -R 775 storage bootstrap/cache
RUN chown -R www-data:www-data storage bootstrap/cache

# Set up MySQL
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=healthcenter_management_system
ENV MYSQL_USER=root
ENV MYSQL_PASSWORD=password

COPY docker/mysql-init.sql /docker-entrypoint-initdb.d/

RUN apt-get update && apt-get install -y npm
RUN npm install
RUN npm run production

EXPOSE 80

CMD php artisan migrate --seed && php artisan serve --host=0.0.0.0 --port=80
