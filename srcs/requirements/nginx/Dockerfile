FROM debian:buster

RUN apt update && apt -y upgrade

RUN apt install -y vim

RUN apt install -y nginx openssl

EXPOSE 443

COPY ./conf/default /etc/nginx/sites-enabled/default
COPY ./tools/nginx_script.sh /var/www

RUN chmod +x /var/www/nginx_script.sh

ENTRYPOINT [ "var/www/nginx_script.sh" ]

CMD ["nginx", "-g", "daemon off;"]