#!/bin/bash

# Startup Variables
MODIFIED_STARTUP=`/home/container/tmnf-uf/TrackmaniaServer /game_settings=MatchSettings/maplist.txt /dedicated_cfg=dedicated_cfg.txt /noautoquit`
echo ":/home/container/tmnf-uf$ ${MODIFIED_STARTUP}"

# Run the Server
${MODIFIED_STARTUP}