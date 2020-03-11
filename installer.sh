#!/bin/bash
clear;
echo -e '\033[0;31m';
echo '+--------------------------------------+';
echo '|    _____          _                  |';
echo '|   (____ \        (_)                 |';
echo '|    _   \ \  ____  _  _   _  ____     |';
echo '|   | |   | |/ ___)| || | | |/ _  )    |';
echo '|   | |__/ /| |    | | \ V /( (/ /     |';
echo '|   |_____/ |_|    |_|  \_/  \____)    |';
echo '|                                      |';
echo '+------------'$(date +%a-%d-%M-%Y)'------------+';


echo -e '\033[1;37m';

echo "Hi, I am a the installer of Drive. You must execute me like root or sudoers."
read -p "Do you want install me? YES [y] NO [n]: " decision


if [ "$decision" = "y" ]; then

   #Upadating
   apt-get update &&  apt-get upgrade
   #Installation of Apache2
   apt-get install apache2 -y && apt-get install php7.3 -y && apt-get install libapache2-mod-php7.3 -y

   #Move drive to web-root, Remove installer and Show ip
   mv ../drive /var/www/html/drive
   rm /var/www/html/drive/installer.sh
   echo -e '\033[0;31m Go to ' $(hostname -I)/drive
fi
