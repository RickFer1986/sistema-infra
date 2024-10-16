FROM php:8.1-fpm

# Set your user name, ex: user=ricardo
ARG user=ricardo
ARG uid=1000

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    vim

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Install redis
RUN pecl install -o -f redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis

# Set working directory
WORKDIR /var/www

# Copy custom configurations PHP
COPY docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

# Install Node.js dependencies
COPY package.json package-lock.json ./
RUN npm install

# Install Composer dependencies
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader
RUN composer dump-autoload

# Generate Bootstrap scaffolding for Laravel UI
RUN composer require laravel/ui && \
    php artisan ui bootstrap

# Build assets with Vite
RUN npm run build

# Copy the rest of the application code
COPY . .

# Ensure correct permissions for the user
RUN chown -R $user:$user /var/www

# Expose necessary ports
EXPOSE 80

# Command to run the application
CMD ["php-fpm"]
