FROM php:8.3.36-fpm

WORKDIR /var/www/html
COPY public/ public/
COPY src/ src/

EXPOSE 9000
CMD ["php-fpm"]
