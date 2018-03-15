FROM nginx:1.11-alpine

COPY config /etc/nginx/
COPY web /srv/

CMD ["nginx", "-g", "daemon off;"]