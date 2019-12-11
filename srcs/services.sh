#start web services
service nginx start
service mysql start
/etc/init.d/php7.3-fpm start

#import database
echo "CREATE DATABASE ft_server;" | mysql -u root
mysql -u root ft_server < /home/root/ft_server.sql

#create MySQL user
echo "CREATE USER 'vgoldman'@'localhost' IDENTIFIED BY 'password';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON ft_server.* TO 'vgoldman'@'localhost';" | mysql -u root
