FROM debian:buster

RUN apt update && apt -y upgrade 

RUN apt install -y mariadb-server

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

RUN service mysql start && mysql < /var/www/db.sql;

CMD ["mysqld"]