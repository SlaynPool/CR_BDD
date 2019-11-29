---
author:
- Nicolas Vadkerti
title: Stockage de Données avec base de données MySQLd
---

<https://github.com/SlaynPool/CR_BDD/>

Préparation (Installation des outils)
=====================================

Suite au passage à Debian 10, PHPmyAdmin n'est plus disponnible via les
depots de APT, de ce fais, j'ai décidé d'utiliser Adminer, un
gestionnaire de DATABASE equivalent, qui a la force d'etre qu'un seul
fichier PHP donc très simple de déploiment.

-   ``` {#commande/1.txt .default caption="Installation de Adminer" label="commande/1.txt" style="Style1"}
    #Installation
    apt install apache2 php mariadb-server mariadb

    #ADMINER
    wget https://github.com/vrana/adminer/releases/download/v4.7.3/adminer-4.7.3.php
    mkdir /var/www/html/adminer
    mv adminer-4.7.3.php /var/www/html/adminer/adminer.php
    chmod 755 /var/www/html/adminer/adminer.php
    chown -R www-data:www-data /var/www/html/adminer
    ```

d
