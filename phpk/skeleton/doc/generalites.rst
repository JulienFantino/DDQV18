Généralités sur le projet Skeleton
==================================

Description
-----------

Le Skeleton est un projet de base fonctionnel permettant de démarrer
rapidement une nouvelle application avec le SK PHP.

Pour plus d'informations sur son installation, référez vous au fichier
**README** à la racine du projet.

Une fois installé, vous disposerez d'un squelette d'application dans
lequel vous pouvez commencer à développer directement.

Que contient ce projet ?
------------------------

Le Skeleton SK PHP embarque :

- Le framework **Symfony**
- Un **AppBundle** pour votre application
- Les bundles **PHPKCoreBundle** et **PHPKWebProfilerBundle**
- Un contrôleur abstrait à étendre par vos contrôleurs
- Un template de base à étendre par vos vues
- Un fichier **arborescence.yml** à configurer
- Le moteur de template **Twig**
- Doctrine ORM/DBAL
- Swiftmailer
- Monolog

Comment démarrer ?
------------------

Une fois votre projet créé, vous pouvez utiliser la commande
**composer require** pour télécharger les bundles que vous souhaitez.

Arborescence du projet créé
---------------------------

..

    /app

    /bin

    /src

    ----/AppBundle

    /vendor

    /web
