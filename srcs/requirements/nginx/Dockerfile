FROM debian:buster

RUN apt update && apt upgrade

RUN apt install -y nginx openssl

EXPOSE 443

COPY ./conf/default /etc/nginx/sites-enabled/default

RUN openssl req -newkey rsa:4096 -keyout /etc/ssl/private/zmeribaa.key -out /etc/ssl/certs/zmeribaa.crt

CMD ["nginx", "-g", "daemon off;"]