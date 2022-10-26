FROM debian:buster

RUN apt-get update && apt-get -y upgrade

RUN apt-get install -y vim

RUN apt-get install -y nginx openssl

EXPOSE 443

COPY ./conf/default /etc/nginx/sites-enabled/default
COPY ./tools/nginx_script.sh /var/www

RUN chmod +x /var/www/nginx_script.sh

ENTRYPOINT [ "var/www/nginx_script.sh" ]

CMD ["nginx", "-g", "daemon off;"]