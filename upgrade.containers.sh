#!/bin/bash
export MYSQL_ROOT_PASSWORD=$(cat ../secrets/mysql.root.password)
export OPENWEBUI_OAUTH_CLIENT_ID=$(cat ../secrets/openwebui.oauth.client_id)
export OPENWEBUI_OAUTH_CLIENT_SECRET=$(cat ../secrets/openwebui.oauth.client_secret)
export AWS_SES_SMTP_USER_USERNAME=$(cat ../secrets/aws.ses.smtp_user.username)
export AWS_SES_SMTP_USER_PASSWORD=$(cat ../secrets/aws.ses.smtp_user.password)

docker compose -f ghost.home.compose pull
docker compose -f ghost.phil.compose pull
docker compose -f mysql.compose pull
docker compose -f n8n.compose pull
docker compose -f nextcloud.compose pull
docker compose -f nginx.compose pull
docker compose -f openwebui.compose pull

./restart.containers.sh

docker image prune

