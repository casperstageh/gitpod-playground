FROM php:7.4-apache

RUN  apt-get update \
&& install php7.4-mysql
