FROM php:8.3-fpm

# Variables con valores por defecto
ARG user=appuser
ARG uid=1000

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    curl \
    git \
    libonig-dev \
    libpng-dev \
    libxml2-dev \
    unzip \
    zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Extensiones de PHP necesarias
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer desde imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear usuario con UID y shell bash
RUN useradd -u ${uid} -m -s /bin/bash -g www-data ${user}

# Copiar proyecto con permisos correctos
COPY --chown=${user}:www-data . /var/www

# Instalar Node.js (última LTS)
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get -yq update \
    && apt-get -yq install -yq nodejs \
    && npm --version

# Cambiar al usuario no root
USER ${user}

# Exponer puerto para PHP-FPM
EXPOSE 9000

CMD ["php-fpm"]
