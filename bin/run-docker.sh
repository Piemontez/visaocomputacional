#!/bin/bash
cd "$(dirname "$0")"
CONF_FILE=../wordpress/wp-config.php
CONF_EX_FILE=../wordpress/wp-config-docker.php

#DATA FOLDERS
echo "Verificando e criando pastas de dados"
mkdir -p ../tmp/mysql
mkdir -p ../tmp/html/upgrade
mkdir -p ../tmp/html/uploads
mkdir -p ../tmp/html/bkps

#CONFIG
if [ ! -f "$CONF_FILE" ]; then
    echo "Criando arquivo de configuração $CONF_FILE."
    cp $CONF_EX_FILE $CONF_FILE
fi

#RUN
cd ../docker
docker-compose --env-file .env.dev up
