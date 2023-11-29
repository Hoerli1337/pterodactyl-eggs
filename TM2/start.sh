#!/bin/bash
cd tmserver
./TrackmaniaServer /game_settings=MatchSettings/Nations/NationsBlue.txt /dedicated_cfg=dedicated_cfg.txt /nodaemon &
cd ..
cd xaseco
while true; do
    if ss -tuln | grep ":$RPC_PORT " >/dev/null; then
        #php aseco.php TMF </dev/null >aseco.log 2>&1 &
        php aseco.php TMF 2>&1 | tee aseco.log & # Show xaseco output in the Pterodactyl console
        break
    fi
done

while [[ $INPUT != "stopserver" ]]; do
    read INPUT
done

pid=$(pgrep -f TrackmaniaServer)
kill $pid

echo "Server stopped"