FROM php:apache-bullseye
COPY . /var/www/html
RUN sed -i "s/Listen 80/Listen 8080/g" /etc/apache2/ports.conf
RUN sed -i "s/:80/:8080/g" /etc/apache2/sites-enabled/*
CMD ["apache2-foreground"]