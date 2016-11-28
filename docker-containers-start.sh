#!/bin/bash
docker start \
    vmscgit-proxy-files \
    vmscgit-proxy-mariadb \
    vmscgit-proxy-mariadb-contao \
    vmscgit-proxy-php-apache \
    vmscgit-proxy-redis \
    vmscgit-origin-files \
    vmscgit-origin-mariadb \
    vmscgit-origin-mariadb-contao \
    vmscgit-origin-php-apache \
    vmscgit-origin-redis
