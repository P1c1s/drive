#!/bin/bash
clear;
echo -e '\033[0;37m+\033[0;31m----------------\033[0;33mUpdater\033[0;31m---------------\033[0;37m+\033[0;31m';
echo -e '|   \033[0;37m _____\033[0;31m          \033[1;37m _\033[0;31m                 |';
echo -e '|   \033[0;37m(____ \ \033[0;31m        \033[1;37m(_)\033[0;31m                |';
echo -e '|   \033[0;37m _   \ \ \033[0;31m  ____ \033[1;37m _\033[0;31m  _   _ \033[0;37m ____\033[0;31m    |';
echo -e '|   \033[0;37m| |  | | \033[0;31m|/ ___)\033[1;37m| |\033[0;31m| | | |\033[0;37m/ _  )\033[0;31m   |';
echo -e '|   \033[0;37m| |__/ / \033[0;31m| |    \033[1;37m| |\033[0;31m \ V /\033[0;37m( (/ /\033[0;31m    |';
echo -e '|   \033[0;37m|_____/ \033[0;31m |_|   \033[1;37m |_|\033[0;31m  \_/ \033[0;37m \____)\033[0;31m   |';
echo -e '|                                      |';
echo -e '\033[0;37m+\033[0;31m------------\033[0;35m'$(date +%a-%d-%M-%Y)'\033[0;31m------------\033[0;37m+';
echo -e '\033[1;37m';

echo "Hi, I am a the updater of Drive. You must execute me like root or sudoers."
read -p "Do you want update me? YES [y] NO [n]: " decision


if [ "$decision" = "y" ]; then

   #Updating
   git pull orgin master

fi

clear

#Stop for 2 seconds the script
sleep 2;

#Clean terminal
clear;

echo '  _    _           _       _          _____                      _      _           _';
echo ' | |  | |         | |     | |        / ____|                    | |    | |         | |';
echo ' | |  | |_ __   __| | __ _| |_ ___  | |     ___  _ __ ___  _ __ | | ___| |_ ___  __| |';
echo ' | |  | |  _ \ / _` |/ _` | __/ _ \ | |    / _ \|  _ ` _ \|  _ \| |/ _ \ __/ _ \/ _` |';
echo ' | |__| | |_) | (_| | (_| | ||  __/ | |___| (_) | | | | | | |_) | |  __/ ||  __/ (_| |';
echo '  \____/| .__/ \__,_|\__,_|\__\___|  \_____\___/|_| |_| |_| .__/|_|\___|\__\___|\__,_|';
echo '        | |                                               | |';
echo '        |_|                                               |_|';
