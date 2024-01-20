FROM node:18

RUN apt-get update && apt-get install -y \
    nano \
    mc \
    zsh

COPY --from=spiralscout/roadrunner:2.9.1 /usr/bin/rr /usr/bin/rr

RUN npm install -g npm@10.3.0 \
    @vue/cli

RUN export DOCKER_SCAN_SUGGEST=false

USER node

WORKDIR /home/app

CMD ["node"]