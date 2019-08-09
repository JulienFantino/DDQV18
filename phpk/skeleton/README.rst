============================
 Starter Kit PHP - Skeleton
============================

Le projet est hébergé sur
http://gitlab.cnqd.cnamts.fr/STARTER_KIT_PHP-2015/Skeleton

Pré-requis techniques
*********************

* Serveur PLC >= 7
* Hors PLC, PHP >= 5.3.9

Quickstart
**********

Création du projet
==================

Étape 1 - Installation & Configuration de Composer
--------------------------------------------------

Récupérez Composer sur le site officiel https://getcomposer.org/composer.phar

Créez le fichier **config.json** dans le répertoire indiqué par la commande
**composer config home** avec le contenu suivant :

.. code-block:: javascript

    {
        "config": {
            "secure-http" : false
        },
        "repositories": [
                {
                    "type": "composer",
                    "url": "http://artifactory.f5.cnqd.cnamts.fr/artifactory/api/composer/php-remote"
                },
                {
                    "type": "composer",
                    "url": "http://artifactory.f5.cnqd.cnamts.fr/artifactory/api/composer/php-release"
                },
                {
                    "type": "composer",
                    "url": "http://artifactory.f5.cnqd.cnamts.fr/artifactory/api/composer/php-snapshot"
                },
                {
                    "packagist": false
                }
        ]
    }

.. note::

    Pour plus de facilité, la commande
    **php /repertoire_composer/composer.phar** sera remplacée par **composer**
    dans la suite de ce document

Étape 2 - Récupération du package
---------------------------------

Tout d'abord, téléchargez le bundle via **Composer** :

    composer create-project cnamts/phpk/skeleton

Cette commande va télécharger le Skeleton SK PHP et l'ensemble de ses
dépendances en fonction de l'environnement sur lequel vous l'exécutez :

- Avec **PHP >=5.4.16 & <5.5.9** - Le Skeleton installera **Symfony 2.8**
- Avec **PHP >=5.5.9 | >= 7.0.8** - Le Skeleton installera **Symfony 3.4**

.. warning::

    Composer est gourmand en mémoire lors de la résolution de dépendances.
    Pensez à passer à l'interpréteur PHP l'option -d memory_limit=-1 ou à
    modifier votre php.ini CLI

Erreurs possibles
'''''''''''''''''

The following exception is caused by a lack of memory or swap, or not having swap configured
````````````````````````````````````````````````````````````````````````````````````````````

Ce problème vient de la machine, qui ne dispose pas de suffisamment de mémoire.
Deux solutions s'offrent à vous :

- Augmenter la RAM disponible
- Augmenter le Swap

Afin d'augmenter le Swap disponible, voilà les commandes à exécuter :

.. code-block:: bash

    sudo /bin/dd if=/dev/zero of=/var/swap.1 bs=1M count=4096
    sudo /sbin/mkswap /var/swap.1
    sudo /sbin/swapon /var/swap.1

Étape 3 - Activation des dépendances
------------------------------------

Ensuite, activez les bundles **PHPKCoreBundle** et **PHPKWebProfilerBundle**
en les ajoutant dans la liste des bundles enregistrés dans votre fichier
**app/AppKernel.php** :

.. code-block:: php

    // app/AppKernel.php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new CNAMTS\PHPK\CoreBundle\PHPKCoreBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            // ...
            $bundles[] = new CNAMTS\PHPK\WebProfilerBundle\PHPKWebProfilerBundle();
        }
    }

Étape 4 - Finalisation
----------------------

- Rendez la page **web/app_dev.php** accessible si elle ne l'est pas
- Donnez les droits en écriture sur les répertoires suivants :
    - Symfony 2.8 : **app/cache**, **app/logs** et **app/sessions**
    - Symfony 3.4 : **var/cache**, **var/logs** et **app/sessions**

Votre application est désormais disponible à l'adresse suivante :
http://IP/repertoire/web/app_dev.php

.. note::

    Vous pouvez ensuite ajouter les bundles dont vous avez besoin pour
    développer votre application via **composer require**.

Contribuer
==========

Pour contribuer, merci de respecter les normes indiquées dans le fichier
**CONTRIBUTING.rst** du projet
`SK PHP <http://gitlab.cnqd.cnamts.fr/STARTER_KIT_PHP-2015/phpk_j>`_.

Support
=======

Le support est assuré par le projet
`SK PHP <http://gitlab.cnqd.cnamts.fr/STARTER_KIT_PHP-2015/phpk_j>`_.

Documentation projet
********************

.. toctree::
   :titlesonly:
   :caption: Documentation visiteur

   generalites
