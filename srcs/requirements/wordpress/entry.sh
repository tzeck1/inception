#!/bin/sh

wp core install --url=${DOMAIN} --title=${TITLE} --admin_user=${WP_ROOT_USER} --admin_password=${WP_ROOT_PWD} \
                --admin_email=${WP_ROOT_MAIL} --allow-root

export user_check=$(wp user list | grep "test")
export admin_check=$(wp user list | grep "tzeck")

if [ -z "$user_check" ]; then
    wp user create --quiet ${WP_USER} ${WP_MAIL} --user_pass=${WP_PWD}
fi

if [ -z "$admin_check" ]; then
    wp user create --quiet ${WP_ROOT_USER} ${WP_ROOT_MAIL} --role=administrator --user_pass=${WP_ROOT_PWD} --allow-root
fi

php-fpm8 -F