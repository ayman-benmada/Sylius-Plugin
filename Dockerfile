FROM thecodingmachine/php:8.3-v4-apache-node16

ARG COMPOSER_AUTH

ENV APACHE_DOCUMENT_ROOT="public/" \
    APACHE_EXTENSIONS_HTTP2=1 \
    PHP_EXTENSION_XDEBUG=0 \
    PHP_EXTENSION_INTL=1 \
    PHP_EXTENSION_GD=1 \
    PHP_INI_MEMORY_LIMIT="8G" \
    PHP_INI_UPLOAD_MAX_FILESIZE="1G" \
    PHP_INI_POST_MAX_SIZE="2G" \
    PHP_INI_DATE__TIMEZONE="Europe/Paris"

COPY --chown=docker . .

RUN composer install

RUN yarn install
RUN yarn build:prod

RUN bin/console assets:install --ansi

RUN bin/console cache:clear
RUN bin/console cache:warmup
