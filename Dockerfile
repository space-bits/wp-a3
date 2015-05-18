FROM tutum/apache-php
MAINTAINER Andre Ribas <andreribas@gmail.com>
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -yq \
        php5-sqlite \
        sqlite3 && \
    rm -rf /var/lib/apt/lists/*
RUN a2enmod rewrite
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride all/' /etc/apache2/apache2.conf
RUN rm -rf /app
ADD . /app
