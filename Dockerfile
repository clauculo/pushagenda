# Use the official PHP 8.3 image with Apache
FROM php:8.3-apache

# Set working directory
WORKDIR /var/www/html

# Copy website source code into the container
COPY . /var/www/html

# Install commonly used PHP extensions
RUN apt-get update && apt-get install -y \
        libzip-dev \
        unzip \
        git \
    && docker-php-ext-install pdo_mysql zip \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

# Configure Apache to allow .htaccess overrides (useful for frameworks like Laravel or CMSs)
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf \
    && echo '<Directory /var/www/html/public>\n\
        AllowOverride All\n\
    </Directory>' >> /etc/apache2/apache2.conf

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install

# Expose HTTP port
EXPOSE 80

# Use production PHP settings (you can also use php.ini-development)
#COPY ./php.ini-production /usr/local/etc/php/php.ini

# Set proper file permissions
RUN chown -R www-data:www-data /var/www/html

# Start Apache server
CMD ["apache2-foreground"]
