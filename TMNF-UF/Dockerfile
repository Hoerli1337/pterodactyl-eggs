# ----------------------------------
# Pterodactyl Dockerfile for TrackMania Nations Forever - United Forever
# By Hoerli - GameMania.org
# Minimum Panel Version: 0.6.0
# ----------------------------------
FROM frolvlad/alpine-glibc

LABEL maintainer='NoxInmortus (IMPERIUM)'

RUN apk add --update --no-cache wget ca-certificates libstdc++ musl libuuid curl tar bash fontconfig php7 php7-fpm php7-gd php7-xml php7-curl php7-mysqli php7-zip php7-mbstring php7-xmlrpc php7-intl php7-common php7-cli php7-bz2 \
  && adduser -D -h /home/container container

USER container
ENV  USER=container HOME=/mnt/server
WORKDIR /mnt/server

COPY ./entrypoint.sh /entrypoint.sh
CMD ["/bin/ash", "/entrypoint.sh"]
