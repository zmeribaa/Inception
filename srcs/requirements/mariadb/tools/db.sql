CREATE DATABASE wordpress;
CREATE user 'zmeribaa'@'%' identified BY 'user';
GRANT all privileges ON wordpress.* TO 'zmeribaa'@'%';
flush privileges;
ALTER user 'root'@'localhost' identified BY 'root';