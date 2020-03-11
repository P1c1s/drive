#!/bin/bash
clear;
echo -e '\033[0;31m';
echo '+-------------------------------------------------------------------------------------+';
echo '                                                                               _____'
echo ' ____________    ___________         ____________   _______    ______     _____\    \';
echo '\           \   \          \       /            \  \      |  |      |   /    / |    |';
echo ' \           \   \    /\    \     |\___/\  \\___/|  |     /  /     /|  /    /  /___/|';
echo  '  |    /\     |   |   \_\    |     \|____\  \___|/  |\    \  \    |/  |    |__ |___|/';
echo '  |   |  |    |   |      ___/            |  |       \ \    \ |    |   |       \';
echo '  |    \/     |   |      \  ____    __  /   / __     \|     \|    |   |     __/ __';
echo '  /           /|  /     /\ \/    \  /  \/   /_/  |     |\         /|   |\    \  /  \';
echo ' /___________/ | /_____/ |\______| |____________/|     | \_______/ |   | \____\/    |';
echo '|           | /  |     | | |     | |           | /      \ |     | /    | |    |____/|';
echo '|___________|/   |_____|/ \|_____| |___________|/        \|_____|/      \|____|   | |';
echo '                                                                              |___|/';
echo '+-------------------------------------------------------------------------------------+';


echo -e '\033[1;37m';

echo "Hi, I am a the installer of Drive. You must execute me like root or sudoers."
read -p "Do you want install me? YES [y] NO [n]: " decision

   echo 'Go to ' $(hostname -I)

if [ "$decision" = "y" ]; then

   #Upadating
   apt-get update &&  apt-get upgrade
   #Installation of Apache2
   apt-get install apache2 && apt-get install libapache2-mod-php

   mv ../drive-master /var/www/html/drive
   echo 'Go to ' hostanme -I
   rm /var/www/html/drive/installer.sh
fi
