# GDSD 2019 G6
M0 Ends on 07/11/2019 for GDSD 2019 Group G6

As Grace Hopper said:
> Info on server setup command used (we can use the following linux commands to setup a similar environment in local ubuntu 18.04 virtual machines to replicate server configuration)

```
#!/usr/bin/env bash

sudo -i

apt-get update
apt-get -y upgrade
apt-get -y dist-upgrade

apt-get -y install dialog rsync curl traceroute bash-completion nmap mtr-tiny

apt-get -y install apache2
a2enmod actions headers rewrite cgi
a2enmod expires
a2dismod mpm_event
a2enmod mpm_prefork
a2enmod rewrite
a2enmod ssl
a2ensite default-ssl

service apache2 restart

sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'
sudo apt-get -y install mysql-server
sudo apt-get -y install mysql-client

apt-get -y install php libapache2-mod-php
apt-get -y install php-mysql php-curl php-gd php-intl php-pear php-imagick php-imap php-memcache php-pspell php-recode php-sqlite3 php-tidy php-xmlrpc php-xsl php-mbstring php-gettext
apt-get -y install php-apcu
apt-get -y install libapache2-mod-perl2
apt-get -y install libapache2-mod-passenger ruby-rmagick
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

apt-get -y install build-essential autoconf libtool pkg-config python-opengl python-pyrex python-pyside.qtopengl idle-python2.7 qt4-dev-tools qt4-designer libqtgui4 libqtcore4 libqt4-xml libqt4-test libqt4-script libqt4-network libqt4-dbus python-qt4 python-qt4-gl libgle3 python-dev python3-dev

apt-get -y install git

service apache2 restart
```