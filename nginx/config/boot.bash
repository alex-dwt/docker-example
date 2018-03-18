#!/usr/bin/env sh


sed -i "s,value,$(ip addr show | grep inet | tr '\r\n' ' '),g"  /etc/nginx/mytest

nginx -g "daemon off;"