FROM php:8.2-apache

# Enable mod_rewrite if needed
RUN a2enmod rewrite

# Copy your PHP files into the container
COPY . /var/www/html/

# Set correct working directory permissions
RUN chown -R www-data:www-data /var/www/html
