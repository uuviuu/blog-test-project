FROM node:18

WORKDIR /home/app

COPY --from=spiralscout/roadrunner:2.9.1 /usr/bin/rr /usr/bin/rr

RUN apt-get update && apt-get install -y \
    nano \
    mc \
    zsh

RUN sh -c "$(curl -fsSL https://raw.github.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"

RUN npm install -g npm@10.3.0

RUN export DOCKER_SCAN_SUGGEST=false

EXPOSE 3000