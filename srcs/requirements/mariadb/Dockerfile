FROM alpine:3.16

RUN apk update && apk upgrade
RUN apk add mysql mysql-client

RUN rm -rf /etc/mysql/mariadb.conf.d/50-server.conf
COPY ./config.cnf /etc/mysql/mariadb.conf.d/50-server.conf

RUN mkdir -p /auth_pam_tool_dir/auth_pam_tool
RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql --basedir=/usr

RUN echo [mysqld]          >> /etc/my.cnf
RUN echo skip-networking=0 >> /etc/my.cnf
RUN echo skip-bind-address >> /etc/my.cnf

ARG MARIADB_NAME
ARG MARIADB_USER
ARG MARIADB_PWD
ARG MARIADB_ROOT_PWD

RUN mysqld_safe --user=mysql --datadir=/var/lib/mysql & sleep 2 \
 && mysql -u root -e "CREATE DATABASE IF NOT EXISTS ${MARIADB_NAME};" \
 && mysql -u root -e "CREATE USER IF NOT EXISTS '${MARIADB_USER}'@'localhost' IDENTIFIED BY '${MARIADB_PWD}';" \
 && mysql -u root -e "GRANT ALL PRIVILEGES ON ${MARIADB_NAME}.* TO '${MARIADB_USER}'@'localhost' WITH GRANT OPTION;" \
 && mysql -u root -e "CREATE USER IF NOT EXISTS '${MARIADB_USER}'@'%' IDENTIFIED BY '${MARIADB_PWD}';" \
 && mysql -u root -e "GRANT ALL PRIVILEGES ON ${MARIADB_NAME}.* TO '${MARIADB_USER}'@'%' WITH GRANT OPTION;" \
 && mysql -u root -e "FLUSH PRIVILEGES;" \
 && mysql -u root -e "DROP USER ''@'localhost'; FLUSH PRIVILEGES;" \
 && mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MARIADB_ROOT_PWD}';"

EXPOSE 3306

ENTRYPOINT [ "mysqld_safe" ]