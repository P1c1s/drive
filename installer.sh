#!/bin/bash
clear;
echo -e '\033[0;37m+\033[0;31m--------------------------------------\033[0;37m+\033[0;31m';
echo -e '|   \033[0;37m _____\033[0;31m          \033[1;37m _\033[0;31m                 |';
echo -e '|   \033[0;37m(____ \ \033[0;31m        \033[1;37m(_)\033[0;31m                |';
echo -e '|   \033[0;37m _   \ \ \033[0;31m  ____ \033[1;37m _\033[0;31m  _   _ \033[0;37m ____\033[0;31m    |';
echo -e '|   \033[0;37m| |  | | \033[0;31m|/ ___)\033[1;37m| |\033[0;31m| | | |\033[0;37m/ _  )\033[0;31m   |';
echo -e '|   \033[0;37m| |__/ / \033[0;31m| |    \033[1;37m| |\033[0;31m \ V /\033[0;37m( (/ /\033[0;31m    |';
echo -e '|   \033[0;37m|_____/ \033[0;31m |_|   \033[1;37m |_|\033[0;31m  \_/ \033[0;37m \____)\033[0;31m   |';
echo -e '|                                      |';
echo -e '\033[0;37m+\033[0;31m------------\033[0;35m'$(date +%a-%d-%M-%Y)'\033[0;31m------------\033[0;37m+';


echo -e '\033[1;37m';

echo "Hi, I am a the installer of Drive. You must execute me like root or sudoers."
read -p "Do you want install me? YES [y] NO [n]: " decision


if [ "$decision" = "y" ]; then

   #Upadating
   apt-get update &&  apt-get upgrade
   #Installation of Apache2
   apt-get install apache2 -y && apt-get install php7.3 -y && apt-get install libapache2-mod-php7.3 -y

   #Move drive to web-root, Change PErmission, Remove installer and Show ip
   mv ../drive /var/www/html/drive
   chown www-data /var/www/html/files -R && chgrp www-data /var/www/html/drive/files -R
   chown www-data /var/www/html/trash -R && chgrp www-data /var/www/html/drive/trash -R
   rm /var/www/html/drive/installer.sh
   echo '';
   echo -e '\033[0;31m Go to ' $(hostname -I)/drive
fi
