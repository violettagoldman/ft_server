FROM debian:buster

MAINTAINER Violetta Goldman <vgoldman@student.42.fr>

#updating and upgrading the system
RUN apt-get -y update
RUN apt-get -y upgrade

#services installation
RUN apt-get install -y nginx
RUN apt-get -y install mariadb-server mariadb-client
RUN apt-get -y install php php-fpm php-mysql php-mbstring php-cli
RUN apt-get -y install openssl


#tools installation
RUN apt-get -y install vim
RUN apt-get -y install wget

#home directory creation
RUN mkdir /home/root/

#content directory creation
RUN mkdir /home/root/www

#content copy
COPY srcs/localhost ./home/root/localhost
COPY srcs/www /home/root/www
COPY srcs/services.sh /home/root/
COPY srcs/ft_server.sql /home/root/

#user change and permissions
RUN chown -R www-data:www-data /home/root/www/*
RUN chmod -R 755 /home/root/www/*

#nginx configuraion
RUN mv /home/root/localhost /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost

#phpMyAdmin installation
WORKDIR /home/root/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.1/phpMyAdmin-4.9.1-english.tar.gz
RUN mkdir /home/root/www/phpmyadmin
RUN tar xzf phpMyAdmin-4.9.1-english.tar.gz --strip-components=1 -C /home/root/www/phpmyadmin

#certificate creation
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=FR/ST=France/L=Paris/O=42/CN=localhost" -keyout /etc/ssl/private/nginx_server.key -out /etc/ssl/certs/nginx_server.crt
RUN openssl dhparam -out /etc/nginx/dhparam.pem 1000

#run the server
CMD sh /home/root/services.sh && /bin/sh

EXPOSE 80
EXPOSE 443
