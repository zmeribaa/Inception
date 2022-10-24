FROM debian:buster

RUN apt-get update && apt -y upgrade 

RUN apt-get install -y php php-fpm php-mysqli curl sendmail

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

RUN chmod +x /var/www/wp_script.sh 

ENTRYPOINT ["/var/www/wp_script.sh"]

CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]