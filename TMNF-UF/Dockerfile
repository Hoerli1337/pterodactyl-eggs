# Dockerfile for https://index.docker.io/u/crosbymichael/python/

FROM alpine:3.7
MAINTAINER Hoerli :)

# Notwendige Pakete installieren

RUN apk add --no-cache --update nano curl tar bash fontconfig php7-fpm php7-gd php7-xml php7-curl mariadb \
    && adduser -D -h /home/container container

# Server kopieren
RUN mkdir /home/container/tmnf-uf
RUN wget --no-cache http://files2.trackmaniaforever.com/TrackmaniaServer_2011-02-21.zip
RUN unzip TrackmaniaServer_2011-02-21.zip -d /home/container/tmnf-uf
COPY Config/tm/tracklist.txt /home/container/tmnf-uf/GameData/Tracks/MatchSettings/tracklist.txt
COPY Config/tm/dedicated_cfg.txt /home/container/tmnf-uf/GameData/Config/dedicated_cfg.txt

# XAseco kopieren
RUN mkdir /home/container/xaseco
RUN wget --no-cache https://fastdl.gamemania.org/xaseco_116.zip
RUN unzip xaseco_116.zip -d /home/container
COPY Config/xaseco/access.xml /home/container/xaseco/access.xml
COPY Config/xaseco/adminops.xml /home/container/xaseco/adminops.xml
COPY Config/xaseco/Aseco.sh /home/container/xaseco/Aseco.sh
COPY Config/xaseco/AsecoF.sh /home/container/xaseco/AsecoF.sh
COPY Config/xaseco/autotime.xml /home/container/xaseco/autotime.xml
COPY Config/xaseco/bannedips.xml /home/container/xaseco/bannedips.xml
COPY Config/xaseco/config.xml /home/container/xaseco/config.xml
COPY Config/xaseco/dedimania.xml /home/container/xaseco/dedimania.xml
COPY Config/xaseco/html.tpl /home/container/xaseco/html.tpl
COPY Config/xaseco/jfreu.config.php /home/container/xaseco/jfreu.config.php
COPY Config/xaseco/localdatabase.xml /home/container/xaseco/localdatabase.xml
COPY Config/xaseco/matchsave.xml /home/container/xaseco/matchsave.xml
COPY Config/xaseco/musicserver.xml /home/container/xaseco/musicserver.xml
COPY Config/xaseco/plugins.xml /home/container/xaseco/plugins.xml
COPY Config/xaseco/rasp.settings.php /home/container/xaseco/rasp.settings.php
COPY Config/xaseco/rasp.xml /home/container/xaseco/rasp.xml
COPY Config/xaseco/text.tpl /home/container/xaseco/text.tpl
COPY Config/xaseco/votes.config.php /home/container/xaseco/votes.config.php
# Hier noch xaseco-fix einfügen

RUN chmod 777 /home/container/xaseco/Aseco.sh
RUN chmod 777 /home/container/xaseco/AsecoF.sh

# Startdatei erstellen
COPY Config/start-server.sh /home/container/start-server.sh
RUN chmod 777 /home/container/start-server.sh

RUN chown -R container.container /home/container/

USER container
ENV  USER=container HOME=/home/container

WORKDIR /home/container

# COPY ./entrypoint.sh /entrypoint.sh

# CMD ["/bin/bash", "/entrypoint.sh"]
