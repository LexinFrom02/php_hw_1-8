FROM php:7.1-fpm
#FROM nginx:latest
COPY . /var/www
RUN docker-php-ext-install mysqli 
#&& docker-php-ext-enable mysqli
#RUN apt-get install php-mysqlnd
WORKDIR /var/www
COPY nginx.conf /etc/nginx/nginx.conf
#CMD [ "php-fpm"]