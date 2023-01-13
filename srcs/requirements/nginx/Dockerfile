#base layer for our container
FROM alpine:3.16

# doing updates and installing nginx and openssl
RUN apk update && apk upgrade
RUN apk add nginx
RUN apk add openssl

COPY ./conf/nginx.conf /etc/nginx/http.d/nginx.conf

#generating a self-signed ssl certificate (valid for 365 days, nodes = no password, 
# rsa is type of key generation, sha = hash algo used to sign. subj sets domain name of cert to mine)
RUN openssl req -x509 -days 365 -nodes -newkey rsa:4096 \
	-keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt \
	-sha256 -subj "/CN=tzeck.42.fr"

# telling thingy that it should listen to this port (just for readabilty, doesnt do anything)
EXPOSE 443

# run nginx in the foreground
CMD ["nginx", "-g", "daemon off;"]
