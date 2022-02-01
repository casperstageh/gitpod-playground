FROM php:7.4-apache

RUN  apt-get update \
&& apt-get install php7.4-mysql
