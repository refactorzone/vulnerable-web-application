FROM phusion/baseimage
MAINTAINER feedback@refactor.zone
RUN apt-get update -y && apt-get upgrade -y && apt-get dist-upgrade -y
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y apache2 php7.0-cgi php-xdebug libapache2-mod-fcgid libapache2-mod-php7.0 apache2-suexec-pristine && \
    a2enmod fcgid && a2enmod suexec
RUN echo "#!/bin/bash">/etc/my_init.d/01-apache.sh && echo "/etc/init.d/apache2 start">>/etc/my_init.d/01-apache.sh && chmod +x /etc/my_init.d/01-apache.sh
RUN debconf-set-selections << 'mysql-server mysql-server/root_password password asdfasdf' &&\
    debconf-set-selections << 'mysql-server mysql-server/root_password_again password asdfasdf' &&\
    DEBIAN_FRONTEND=noninteractive apt-get install -y mysql-server
RUN echo "#!/bin/bash">/etc/my_init.d/02-mysql.sh && echo "/etc/init.d/mysql start">>/etc/my_init.d/02-mysql.sh && chmod +x /etc/my_init.d/02-mysql.sh
EXPOSE 22
EXPOSE 80
