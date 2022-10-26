#!/bin/sh

mysql_install_db

/etc/init.d/mysql start

#Check if the database exists

if [ -d "/var/lib/mysql/$DB" ]
then 

	echo "Database already exists"
else

# Set root option so that connexion without root password is not possible

mysql_secure_installation <<_EOF_

Y
root123
root123
Y
n
Y
Y
_EOF_

#Add a root user on 127.0.0.1 to allow remote connexion

	echo "GRANT ALL ON *.* TO 'root'@'%' IDENTIFIED BY '$DB_ROOT'; FLUSH PRIVILEGES;" | mysql -uroot

#Create database and user for wordpress
	echo "CREATE DATABASE IF NOT EXISTS $DB; GRANT ALL ON $DB.* TO '$DB_USER'@'%' IDENTIFIED BY '$DB_PW'; FLUSH PRIVILEGES;" | mysql -uroot

#Import database
mysql -uroot -p$DB_ROOT $DB < /usr/local/bin/ugh.sql

fi

/etc/init.d/mysql stop

exec "$@"
