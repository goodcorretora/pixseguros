FROM composer:2 AS composer

FROM php:8.4-fpm-alpine

# LABEL maintainer="Antônio <antonio@email.com>"

ARG PUID=1000
ARG PGID=1000
ARG WWWGROUP
ARG NODE_VERSION=24
ARG MYSQL_CLIENT="mysql-client"
ARG POSTGRES_VERSION=18

WORKDIR /var/www/html

ENV TZ=UTC \
    COMPOSER_ALLOW_SUPERUSER=1 \
    PLAYWRIGHT_BROWSERS_PATH=0 \
    PATH="/var/www/html/node_modules/.bin:$PATH"

# Dependências do sistema
RUN apk add --no-cache \
    bash curl git icu-dev libzip-dev libpng-dev libjpeg-turbo-dev freetype-dev \
    imagemagick imagemagick-dev libxml2-dev oniguruma-dev postgresql-dev \
    autoconf g++ make nodejs npm yarn supervisor sqlite ffmpeg nano

# Extensões PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        bcmath intl pdo pdo_mysql pdo_pgsql zip gd opcache pcntl \
    && pecl install imagick redis \
    && docker-php-ext-enable imagick redis

# Configuração OPcache
RUN { \
    echo 'opcache.memory_consumption=256'; \
    echo 'opcache.interned_strings_buffer=16'; \
    echo 'opcache.max_accelerated_files=10000'; \
    echo 'opcache.revalidate_freq=0'; \
    echo 'opcache.validate_timestamps=0'; \
    echo 'opcache.enable_cli=1'; \
} > /usr/local/etc/php/conf.d/opcache.ini

# Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Usuário não-root
RUN addgroup -g ${PGID} www \
    && adduser -G www -u ${PUID} -g www -s /bin/sh -D www \
    && sed -i 's/^user = .*/user = www/' /usr/local/etc/php-fpm.d/www.conf \
    && sed -i 's/^group = .*/group = www/' /usr/local/etc/php-fpm.d/www.conf

# Copia aplicação
COPY --chown=www:www ./pixseguros /var/www/html/pixseguros
WORKDIR /var/www/html/pixseguros

# Instala dependências PHP
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Instala dependências Node (Tailwind, Alpine, etc.)
# COPY package.json package-lock.json ./
COPY pixseguros/package.json pixseguros/package-lock.json ./

RUN npm ci

# Build frontend (TailwindCSS, Alpine.js, etc.)
RUN npm run build \
    && rm -rf node_modules \
    && rm -rf /root/.npm

# Permissões
RUN mkdir -p storage bootstrap/cache public/build/assets \
    && chown -R www:www /var/www/html/pixseguros \
    && chmod -R 775 storage bootstrap/cache public/build

# Entrypoint
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Executar entrypoint como root para criar diretórios, depois mudar para www
# USER www será aplicado pelo entrypoint após configuração

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["php-fpm"]


