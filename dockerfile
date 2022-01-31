FROM php:8.0.7-apache

RUN  apt-get update \
&& apt-get install -y php-mysqli
