FROM nginx:1.11-alpine

COPY config /etc/nginx/
COPY web /srv/

#CMD ["sh", "ls /etc/nginx/config/"]
#CMD ["sh -c /etc/nginx/config/boot.bash"]
CMD ["sh",  "-c", "/etc/nginx/boot.bash"]


#CMD ["bash -c 'sed -i \"s,value,$(ip addr show | grep inet | tr '\r\n' ' '),g\"  /etc/nginx/config/mytest' ; nginx -g daemon off;"]
#CMD ["sh -c 'sed -i \"s,value,$(ip addr show | grep inet | tr '\r\n' ' '),g\"  /etc/nginx/mytest ; nginx -g 'daemon off;'"]