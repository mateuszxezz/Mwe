#!/bin/sh

# Baixar e instalar o Composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
