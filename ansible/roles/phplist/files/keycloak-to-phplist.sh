#!/bin/bash

echo "RUN $(date --rfc-3339=seconds)"

TOKEN=$(curl -X POST -H 'Content-Type: application/x-www-form-urlencoded' -d "client_id=admin-cli"   -d "username={{ keycloak_user }}"   -d "password={{ keycloak_password }}"   -d "grant_type=password"   "http://localhost:8080/auth/realms/master/protocol/openid-connect/token" | jq .access_token -r)
INPUT=/tmp/keycloak-to-phplist-input.csv
echo "email" > $INPUT
curl   -H "Authorization: bearer $TOKEN" "http://localhost:8080/auth/admin/realms/zhiva-mrezha/users" | jq .[].email >> $INPUT
cat $INPUT
/usr/local/bin/phplist -pimport2 -mSubscribersPlugin -l 2 -f $INPUT
