#!/bin/sh

sed -i "s,LISTEN_PORT,$PORT,g" /etc/nginx/nginx.conf

php-fpm -D

cd /app && php artisan migrate --force
cd /app && php artisan db:seed

nginx