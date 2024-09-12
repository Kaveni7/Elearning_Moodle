FROM debian:buster

# Install dependencies
RUN apt-get update && \
    apt-get install -y apache2 php php-pgsql libapache2-mod-php php-gd php-intl php-xml php-mbstring php-curl git unzip

# Set up Apache
RUN a2enmod rewrite
COPY moodle.conf /etc/apache2/sites-available/000-default.conf

# Copy Moodle source code
COPY . /var/www/html/moodle

# Set up permissions
RUN chown -R www-data:www-data /var/www/html/moodle

# Expose port
EXPOSE 80

# Start services
CMD ["apachectl", "-D", "FOREGROUND"]
