#!/bin/bash

#Clean terminal
clear;
echo -e '\033[0;37m+\033[0;31m---------------\033[0;33mInstaller\033[0;31m--------------\033[0;37m+\033[0;31m';
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

   #Updating
   apt-get update &&  apt-get upgrade
   #Installation of Apache2
   apt-get install apache2 -y && apt-get install php7.3 -y && apt-get install libapache2-mod-php7.3 -y

   #Move drive to web-root, Change PErmission, Remove installer and Show ip
   mv ../drive /var/www/html/
   chown www-data /var/www/html/drive/files -R && chgrp www-data /var/www/html/drive/files -R
   chown www-data /var/www/html/drive/trash -R && chgrp www-data /var/www/html/drive/trash -R
   rm /var/www/html/drive/installer.sh
   echo '';

fi

#Stop for 5 seconds the script
sleep 5;

echo '  _____                 _   _ _       _   _                _____                      _      _           _';
echo ' |_   _|               | | | | |     | | (_)              / ____|                    | |    | |         | |';
echo '   | |  _ __  ___  __ _| |_| | | __ _| |_ _  ___  _ __   | |     ___  _ __ ___  _ __ | | ___| |_ ___  __| |';
echo '   | | |  _ \/ __|/ _` | __| | |/ _` | __| |/ _ \| _  \  | |    / _ \|  _ ` _ \|  _ \| |/ _ \ __/ _ \/ _` |';
echo '  _| |_| | | \__ \ (_| | |_| | | (_| | |_| | (_) | | | | | |___| (_) | | | | | | |_) | |  __/ ||  __/ (_| |';
echo ' |_____|_| |_|___/\__,_|\__|_|_|\__,_|\__|_|\___/|_| |_|  \_____\___/|_| |_| |_| .__/|_|\___|\__\___|\__,_|';
echo '                                                                               | |';
echo '                                                                               |_|';

#Stop for 3 seconds the script
sleep 3;

#Clean terminal
clear;

echo -e '\033[0;31m Go to ' $(hostname -I)'/drive';
