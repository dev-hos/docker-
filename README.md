# docker-
Apprendre docker et son utilisation au sein de symfony
    - Decouverte de docker 
    
Trois principes dans docker 
    1 - Le registre (docker hub) -- stockage de multiples images 
    2- Image -- copie d'un system qui peut etre exécuté dans un conteneur 
    3- Container instance d'une image en cours d'exécution 

On trouve d'abord la machine sur laquelle tourne le system d'exploitation (linux, macos, windows ...)
et sur lequelle tourne docker qui à son tour gère et exécute les différentes images 
sur ce q'on appelle des conteneurs 

-- Démarrer un conteneur httpd
    docker run httpd => démarre sur le port 80
    docker run -p 8080:80  httpd => démarre sur le port 8080
    démarrer u conteneur en détaché (detach) avec le flag -d et retourne l'id du conteneur: 
    docker run -d -p 8080:80 
     
-- Nommer un conteneur 
docker run --name apache1 -d -p 8080:80  httpd

-- Docker compose 
docker compose est un ficher de config yml ou yaml qui détermine les images qu'on souhaite utiliser 
pour notre projet ainsi que d'autre configurations comme les potrs les volumes 

-- DockerFile
Le Dockerfile est un fichier de commande qui permet de lancer des commandes, et installer des extensions

    FROM php:8.2-apache (utilisation de l'image 8.2-apache)

    RUN apt-get update && apt-get upgrade -y (commande pour la mise à jour des paquets)
    RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo_mysql (installation des extension php et de mysql)

    EXPOSE 80 (spécification du port utilisé par le conteneur)