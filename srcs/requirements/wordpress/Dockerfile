FROM alpine:3.16

RUN apk update && apk upgrade
RUN apk add php8-fpm php8-mysqli php8-cli php8-phar php8-iconv curl

RUN rm -rf /etc/php8/php-fpm.d/www.conf
COPY ./wp.conf /etc/php8/php-fpm.d/www.conf
RUN rm -rf /var/www/wordpress/wp-config-sample.php
COPY ./wp-config.php /var/www/wordpress/wp-config.php

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

# RUN ln `which php8` /usr/local/bin/php

EXPOSE 9000

COPY ./entry.sh /usr/local/bin/entry.sh
RUN chmod +x /usr/local/bin/entry.sh

WORKDIR /var/www/wordpress
RUN wp core download --allow-root
ENTRYPOINT [ "/usr/local/bin/entry.sh" ]
