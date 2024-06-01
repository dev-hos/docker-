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
