FROM php:5.6.35-apache-jessie
MAINTAINER james.mclean@gmail.com

RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get -y upgrade \
    && DEBIAN_FRONTEND=noninteractive apt-get -y install apt-utils \
        libcurl4-openssl-dev \
        libpq-dev \
        postgresql-client \
        wget \
        curl \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pgsql

EXPOSE 80
CMD ["apache2-foreground"]
