#!/bin/bash
cd "$(dirname "$0")"
mkdir -p ../tmp/mysql
mkdir -p ../tmp/html
cd ../docker
docker-compose --env-file .env.dev up
