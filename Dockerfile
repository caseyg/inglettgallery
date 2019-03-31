
FROM ubuntu:trusty
RUN apt-get update
RUN apt-get install -y software-properties-common
RUN LC_ALL=C.UTF-8 apt-add-repository -y ppa:ondrej/php
RUN apt-get update
RUN apt-get install -y nginx
RUN apt-get install -y php7.2
RUN apt-get install -y php7.2-fpm
RUN apt-get install -y imagemagick

WORKDIR /app
EXPOSE 80

CMD mkdir -p /var/run/php && \
  /usr/sbin/php-fpm7.2 \
  -D \
  -c /app/php.ini \
  --fpm-config /etc/php/7.2/fpm/php-fpm.conf \ 
  --allow-to-run-as-root && nginx -g 'daemon off;'