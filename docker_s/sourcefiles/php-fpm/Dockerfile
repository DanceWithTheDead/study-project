FROM php:8.3-fpm

WORKDIR "/application"

# Установка базовых зависимостей
RUN apt-get update && apt-get install -y \
    nano \
    git \
    unzip \
    libzip-dev \
    zip \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libssl-dev \
    && rm -rf /var/lib/apt/lists/*

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Установка PHP расширений
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    gd \
    zip \
    intl \
    pdo_mysql \
    mysqli \
    opcache \
    bcmath

# Настройка php.ini
RUN { \
    echo 'memory_limit = 512M'; \
    echo 'upload_max_filesize = 2048M'; \
    echo 'post_max_size = 2048M'; \
    echo 'max_execution_time = 600'; \
} > /usr/local/etc/php/conf.d/custom.ini

# Очистка кеша
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Рекомендуется указывать пользователя (лучше совпадать с веб-сервером)
RUN groupadd -g 1000 appuser && useradd -u 1000 -g appuser -m appuser
USER appuser