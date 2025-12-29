FROM php:8.2-fpm-alpine

# 1. Instalar dependencias del sistema PRIMERO
RUN apk update && apk add --no-cache \
    nginx \
    supervisor \
    curl \
    git \
    zip \
    unzip \
    libpng-dev \
    libzip-dev \
    postgresql-dev \
    && rm -rf /var/cache/apk/*

# 2. Instalar extensiones PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql gd zip

# 3. Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4. Establecer directorio de trabajo
WORKDIR /var/www/html

# 5. Copiar solo los archivos necesarios primero (mejora caché de Docker)
COPY composer.json composer.lock ./

# 6. Instalar dependencias SIN scripts (evita problemas)
RUN composer install --no-interaction --no-dev --optimize-autoloader --no-scripts

# 7. Copiar el resto de la aplicación
COPY . .

# 8. Establecer permisos para Laravel
RUN chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# 9. Copiar configuraciones
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# 10. Exponer puerto
EXPOSE 80

# 11. Comando de inicio
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
