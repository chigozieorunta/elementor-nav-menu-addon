FROM wordpress:php7.4-apache

# Development tooling dependencies
RUN apt-get update \
	&& apt-get install -y --no-install-recommends \
		bash less default-mysql-client git zip unzip \
		nodejs npm curl \
		msmtp \
	&& npm install --global npm@latest \
	&& rm -rf /var/lib/apt/lists/*

RUN curl -s https://getcomposer.org/installer | php \
	&& mv composer.phar /usr/local/bin/composer

# Include our custom config for PHP and Xdebug.
COPY config/php/* /usr/local/etc/php/conf.d/

# Setup xdebug.
RUN	pecl install xdebug; \
	docker-php-ext-enable xdebug;
