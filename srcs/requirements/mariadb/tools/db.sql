create database wordpress;
create user 'zmeribaa'@'%' identified by 'user';
grant all privileges on wordpress.* to 'zmeribaa'@'%';
flush privileges;
-- alter user 'root'@'localhost' identified by 'root';