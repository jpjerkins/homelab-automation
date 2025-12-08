#!/bin/bash
export MYSQL_ROOT_PASSWORD=$(cat ../secrets/mysql.root.password)
export OPENWEBUI_OAUTH_CLIENT_ID=$(cat ../secrets/openwebui.oauth.client_id)
export OPENWEBUI_OAUTH_CLIENT_SECRET=$(cat ../secrets/openwebui.oauth.client_secret)
export AWS_SES_SMTP_USER_USERNAME=$(cat ../secrets/aws.ses.smtp_user.username)
export AWS_SES_SMTP_USER_PASSWORD=$(cat ../secrets/aws.ses.smtp_user.password)

docker compose -f ghost.home.compose -p home up -d
# docker compose -f ghost.phil.compose -p phil up -d
docker compose -f mysql.compose -p mysql up -d
docker compose -f n8n.compose -p n8n up -d
docker compose -f nextcloud.compose -p nextcloud up -d
docker compose -f nginx.compose -p nginx up -d
docker compose -f openwebui.compose -p oi up -d
