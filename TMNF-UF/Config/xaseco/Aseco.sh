#!/bin/sh
cd /home/container/xaseco
php aseco.php TMN </dev/null >aseco.log 2>&1 &
echo $!
