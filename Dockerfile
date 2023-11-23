# Utilisez l'image PHP Apache officielle
FROM php:apache

# Copiez le code PHP dans le répertoire du serveur web
COPY . /var/www/html/
