FROM hacklab/mapasculturais:7.6-RC

COPY themes /var/www/src/themes
COPY plugins /var/www/src/plugins

WORKDIR /var/www/src
RUN pnpm install --recursive && pnpm run build 
WORKDIR /var/www

COPY docker/common/config.d /var/www/config/common.d
COPY docker/production/config.d /var/www/config/config.d

COPY docker/mantenimiento.php /var/www/html/mantenimiento.php
COPY overrides/translations /var/www/src/translations
