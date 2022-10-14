FROM debian:buster

RUN apt update && apt upgrade 

RUN apt install -y mariadb-server

RUN service mysql start

EXPOSE 3306

CMD [ "mysqld" ]