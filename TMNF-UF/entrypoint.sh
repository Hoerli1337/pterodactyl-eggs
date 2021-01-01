# Test-Stuff
#!/bin/bash
# Start TM-Server
#cd /home/container/tmnf-uf/
#/home/container/tmnf-uf/TrackmaniaServer /game_settings=MatchSettings/tracklist.txt /dedicated_cfg=dedicated_cfg.txt /noautoquit
#sleep 5s
# Start XAseco
#cd /home/container/xaseco/
#/home/container/xaseco/Aseco.sh

#!/bin/bash
cd /home/container

#STARTUP = MODIFIED_STARTUP
MODIFIED_STARTUP=eval echo $(echo ${STARTUP} | sed -e 's/{{/${/g' -e 's/}}/}/g')
echo ":/home/container/$ ${MODIFIED_STARTUP}"

# Run the Server
${MODIFIED_STARTUP}
