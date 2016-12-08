#!/bin/bash
# Warning! This code was written to be broken ON PURPOSE! Every single piece of it is bad quality ON PURPOSE! DON'T
# EVER USE THIS FOR ANYTHING! PLEASE!

SERVERNAME=$1
adduser --home /var/www/${SERVERNAME} --group www-data ${SERVERNAME}

mkdir -p /var/www/${SERVERNAME}
mkdir -p /var/www/${SERVERNAME}/tmp
mkdir -p /var/www/${SERVERNAME}/htdocs
mkdir -p /var/www/${SERVERNAME}/logs

echo >/etc/apache2/sites-available/${SERVERNAME}.conf << EOF
<VirtualHost *:80>
  ServerName ${SERVERNAME}
  SuexecUserGroup ${SERVERNAME} www=data
  AddHandler fcgid-script .php
  DocumentRoot "/var/www/${SERVERNAME}/htdocs"
  DirectoryIndex index.htm index.html index.php
  <Directory />
    Options FollowSymLinks
    AllowOverride None
  </Directory>
  <Directory "/var/www/${SERVERNAME}/htdocs">
    Options Indexes MultiViews FollowSymLinks +ExecCGI
    FCGIWrapper /var/www/${SERVERNAME}/php-fcgi/php-fcgi-starter .php
    Order allow,deny
    allow from all
  </Directory>
  ErrorLog /var/www/${SERVERNAME}/logs/error.log
  LogLevel warn
  CustomLog /var/www/${SERVERNAME}/logs/access.log combined
</VirtualHost>
EOF

cat > /var/www/${SERVERNAME}/php-fcgi/php-fcgi-starter << EOF
#!/bin/sh
export TMPDIR=/var/www/${SERVERNAME}/tmp
exec /usr/bin/php5-cgi
EOF

chown -R ${SERVERNAME}:www-data /var/www/${SERVERNAME}
chmod 750 /var/www/${SERVERNAME}/php-fcgi/php-fcgi-starter

a2ensite ${SERVERNAME}
