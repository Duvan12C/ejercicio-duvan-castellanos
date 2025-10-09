# 1. Imagen base PHP + FPM
FROM php:8.3-fpm

# 2. Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    mariadb-client \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# 3. Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Crear directorio de trabajo
WORKDIR /var/www/html

# 5. Copiar el proyecto al contenedor
COPY . .

# 6. Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# 7. Dar permisos para storage y cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 8. Exponer puerto de php-fpm
EXPOSE 9000

# 9. Comando por defecto
CMD ["php-fpm"]
