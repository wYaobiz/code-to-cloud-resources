# A LAMP application image built on the official PHP image with Apache.
# Starting from php:8.2-apache means Apache and PHP are already wired together.
FROM php:8.2-apache

# Install the system libraries the PHP extensions need, then the extensions.
# Combining the commands into one RUN keeps the image smaller, since each
# RUN adds a layer.
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mysqli \
    && rm -rf /var/lib/apt/lists/*

# mod_rewrite is needed for clean URLs, mod_headers for security headers
RUN a2enmod rewrite headers

WORKDIR /var/www/html

COPY . /var/www/html/

# Apache runs as www-data, so it needs to own the files it serves
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80
