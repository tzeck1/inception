#!/bin/sh

wp core install --url=${DOMAIN} --title=${TITLE} --admin_user=${WP_ROOT_USER} --admin_password=${WP_ROOT_PWD} \
                --admin_email=${WP_ROOT_MAIL} --allow-root

wp user create ${WP_USER} ${WP_MAIL} --role=administrator --user_pass=${WP_PWD} --allow-root

php-fpm8 -F