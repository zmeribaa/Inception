FROM debian:buster

RUN apt-get update

RUN apt-get install -y php php-fpm php-mysqli curl

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/


CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]