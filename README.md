#Intro



sudo apt install libapache2-mod-php

sudo apt-get install php-mysql

cd /etc/php/7.2/apache2

sudo nano php.ini

(uncomment mysqli module)

sudo /etc/init.d/apache2 restart

add phpinfo(); to a php file and search for mysqli



CREATE USER 'pablo'@'localhost' IDENTIFIED BY 'portaf';

GRANT ALL PRIVILEGES ON *.* TO 'pablo'@'localhost' WITH GRANT OPTION;

create database statistiki;

mysql -u pablo -p statistiki < file.sql


sudo phpenmod mysqli
sudo service apache2 restart

date-transform.php


https://console.cloud.google.com/net-services/dns/
update ip address

![image](https://github.com/pablitomilenio/portfolio/assets/34131550/f63b7637-b144-4e71-a57b-2e6202159b85)
