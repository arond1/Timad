# Timad

Projets réalisés par une bande d'amateurs

avec l'aide des tutos :

Symfony :

https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/symfony-un-framework-php


=============================================
Zeone de transfert de lien avec le serv :
TTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\ -f1`

sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var

sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX var
===========================================
