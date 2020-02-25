FROM php:7.4.2

# copy config file
COPY ./php.ini /usr/local/etc/php/

# module install
RUN apt-get update\
  && apt-get install -y vim tree \
  && apt-get clean
