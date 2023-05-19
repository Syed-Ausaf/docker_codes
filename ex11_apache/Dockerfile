FROM ubuntu:latest

# Install Apache
RUN apt-get update && apt-get install apache2 -y

# Copy index.html to the Apache document root
WORKDIR /var/www/html/
COPY index.html .

# Add the CA certificate
WORKDIR /etc/apache2/ssl/
COPY ./certs/ca.crt .
COPY ./ca.key .

# Enable SSL module and configure Apache to use the certificate
RUN a2enmod ssl
RUN echo "SSLCertificateFile /etc/apache2/ssl/ca.crt" >> /etc/apache2/sites-available/default-ssl.conf
RUN echo "SSLCertificateKeyFile /etc/apache2/ssl/ca.key" >> /etc/apache2/sites-available/default-ssl.conf

# Set the ServerName directive
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Enable the default SSL virtual host
RUN a2ensite default-ssl

# Start Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]

