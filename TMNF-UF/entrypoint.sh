#!/bin/bash
# Start TM-Server
cd /home/container/tmnf-uf/
/home/container/tmnf-uf/TrackmaniaServer /game_settings=MatchSettings/tracklist.txt /dedicated_cfg=dedicated_cfg.txt /noautoquit
sleep 5s
# Start XAseco
cd /home/container/xaseco/
/home/container/xaseco/Aseco.sh
