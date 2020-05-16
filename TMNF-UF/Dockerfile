# Dockerfile for https://index.docker.io/u/crosbymichael/python/

FROM alpine:3.7
MAINTAINER Hoerli :)

# Notwendige Pakete installieren

RUN apk add --no-cache --update nano curl tar bash fontconfig php7-fpm php7-gd php7-xml php7-curl mariadb \
    && adduser -D -h /home/container container
	
# Server kopieren
RUN mkdir /home/container/tmnf-uf
RUN wget http://files2.trackmaniaforever.com/TrackmaniaServer_2011-02-21.zip
RUN unzip TrackmaniaServer_2011-02-21.zip -d /home/container/tmnf-uf
COPY Config/maplist.txt /home/container/tmnf-uf/GameData/Tracks/MatchSettings/maplist.txt

# XAseco kopieren
RUN mkdir /home/container/xaseco
RUN wget https://fastdl.gamemania.org/xaseco_116.zip
RUN unzip xaseco_116.zip -d /home/container/xaseco
# Hier noch xaseco-fix einfügen

USER container
ENV  USER=container HOME=/home/container

WORKDIR /home/container

COPY ./entrypoint.sh /entrypoint.sh

CMD ["/bin/bash", "/entrypoint.sh"]
