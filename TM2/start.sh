#!/bin/bash
cd tmserver
./ManiaPlanetServer /title=TMStadium@nadeo /game_settings=MatchSettings/maplist.txt /dedicated_cfg=dedicated_cfg.txt &
cd ..
cd uaseco
php webrequest.php &
while true; do
    if ss -tuln | grep ":$RPC_PORT " >/dev/null; then
        #php aseco.php TMF </dev/null >aseco.log 2>&1 &
        DATE=`date +%Y-%m-%d`
        php -d allow_url_fopen=on -d safe_mode=0 uaseco.php TM2 2>>logs/$DATE-uaseco-current.log 2>&1 | tee logs/$DATE-uaseco-current.log & # Show xaseco output in the Pterodactyl console
        break
    fi
done

while [[ $INPUT != "stopserver" ]]; do
    read INPUT
done

pid=$(pgrep -f TrackmaniaServer)
kill $pid

echo "Server stopped"
