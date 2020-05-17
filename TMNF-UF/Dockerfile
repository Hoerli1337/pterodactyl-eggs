#################################
## Dockerfile TM NF / UF       ##
## Hoerli                      ##
#################################
FROM alpine:3.11
LABEL maintainer='Hoerli (GameMania)'

# Notwendige Pakete installieren
RUN apk add --no-cache --update nano ca-certificates curl tar bash fontconfig php7 php7-fpm php7-gd php7-xml php7-curl php7-mysqli php7-zip php7-mbstring php7-xmlrpc php7-intl php7-common php7-cli php7-bz2 \
    && adduser -D -h /home/container container

# Server installieren
RUN mkdir /home/container/tmnf-uf
RUN wget http://files2.trackmaniaforever.com/TrackmaniaServer_2011-02-21.zip
RUN unzip TrackmaniaServer_2011-02-21.zip -d /home/container/tmnf-uf
COPY Config/tm/tracklist.txt /home/container/tmnf-uf/GameData/Tracks/MatchSettings/tracklist.txt
COPY Config/tm/dedicated_cfg.txt /home/container/tmnf-uf/GameData/Config/dedicated_cfg.txt
# XAseco installieren
RUN mkdir /home/container/xaseco
RUN wget https://fastdl.gamemania.org/xaseco1.16-php7.zip
RUN unzip xaseco1.16-php7.zip -d /home/container/xaseco
# Angepasste Startdatei für Xaseco
COPY Config/xaseco/Aseco.sh /home/container/xaseco/Aseco.sh
COPY Config/xaseco/AsecoF.sh /home/container/xaseco/AsecoF.sh
RUN chmod 777 /home/container/xaseco/Aseco.sh
RUN chmod 777 /home/container/xaseco/AsecoF.sh
# Berechtigungen setzen
RUN chown -R container.container /home/container/
USER container
ENV  USER=container HOME=/home/container

WORKDIR /home/container
VOLUME /home/container
# Ports
EXPOSE 2350 2350/udp 3450 3450/udp 5000
# Entrypoint für Pterodactyl
COPY ./entrypoint.sh /entrypoint.sh
CMD ["/bin/bash", "/entrypoint.sh"]