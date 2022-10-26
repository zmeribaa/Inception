#!/bin/bash

if [ ! -f /etc/ssl/certs/zmeribaa.crt ]; then
echo "Nginx: setting up ssl ...";
openssl req -nodes -x509 -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/zmeribaa.key -out /etc/ssl/certs/zmeribaa.crt -subj "/C=MA/ST=Rehamna Province/L=Benguerir/O=1337/CN=zmeribaa.42.fr";
echo "Nginx: ssl is set up!";
fi

exec "$@"