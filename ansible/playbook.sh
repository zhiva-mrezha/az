#!/bin/bash

ansible-playbook -i inventory --private-key=secret/zhiva-mrezha-aws.pem --vault-password=getpass.sh playbook.yaml "$@"
