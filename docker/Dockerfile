FROM php:apache-buster
RUN docker-php-source extract \
	&& docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-source delete

COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite
