FROM php:8.0-fpm
# update upgrade
RUN apt-get update && apt-get upgrade -y
# php extensions
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql
#zip
RUN apt install zip -y
RUN apt install git -y
#composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN mv composer.phar /usr/local/bin/composer

#RUN apt-get install phpunit