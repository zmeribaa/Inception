FROM debian:buster

RUN apt update && apt -y upgrade

RUN apt install -y vim

RUN apt install -y nginx openssl

EXPOSE 443

COPY ./conf/default /etc/nginx/sites-enabled/default
COPY ./HTML/index /var/www/html

RUN openssl req -nodes -x509 -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/zmeribaa.key -out /etc/ssl/certs/zmeribaa.crt -subj "/C=MA/ST=Rehamna Province/L=Benguerir/O=1337/CN=zmeribaa.42.fr";

CMD ["nginx", "-g", "daemon off;"]