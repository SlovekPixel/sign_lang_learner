FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
        git \
        unzip \
        libzip-dev \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring zip bcmath opcache \
    && a2enmod rewrite expires headers deflate \
    && rm -rf /var/lib/apt/lists/*

# OPcache for faster PHP on every request
RUN printf 'opcache.enable=1\n\
opcache.memory_consumption=128\n\
opcache.interned_strings_buffer=16\n\
opcache.max_accelerated_files=10000\n\
opcache.validate_timestamps=1\n\
opcache.revalidate_freq=2\n\
opcache.fast_shutdown=1\n' > /usr/local/etc/php/conf.d/opcache-recommended.ini \
 && printf 'realpath_cache_size=4096K\nrealpath_cache_ttl=600\n' > /usr/local/etc/php/conf.d/realpath.ini

COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html

COPY docker/apache-laravel.conf /etc/apache2/sites-available/000-default.conf

COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["apache2-foreground"]
