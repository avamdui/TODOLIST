# TODOLIST

# Avant propos
- Le projet fonctionne sur PHP 8.0.15
- Le projet est basé sur le framework symfony 5.4.4 (Doctrine, Twig et PhpUnit)
- Git du projet : `git clone https://github.com/avamdui/TODOLIST`

# Comment Contribuer au projet

1. Cloner et Installer le repository sur votre serveur (voir le README.md)
  -  Modifier le .env avec vos informations.
  -  Installez les dependances : composer install
  -  Mettre en place la BDD :
      php bin/console doctrine:database:create
       php bin/console doctrine:migrations:migrate

2. Créez une branche à partir de *master* : git checkout -b nom de la branche
3. Ecrivez un Issue sur les modifications que vous allez apporter
4. Ecrivez votre code EN RESPECTANT LES BONNES PRATIQUES
5. Ecrivez des Commit Clairs et precis avant de faire un Push de la branche : git push origin maBranche
6. Mettez a jour vos issues
7. Faites un *Pull Request* et attendez sa validation

# Les bonnes pratiques 

   #  1. le code
    Vous devez respecter :
    - Le PSR 2 au minimum
    - Les standards du code de Symfony (`https://symfony.com/doc/current/contributing/code/standards.html`)
    - Les conventions du code de Symfony (`https://symfony.com/doc/5.2/contributing/code/conventions.html`)

   # 2. les bundles
    - Toute installation de bundle PHP doit se faire avec "Composer OBLIGATOIREMENT"


   # 3. Git
    Vous devez faire les choses dans cet ordre : 
    - Nouvelle branche à partir de master duement nomée
    - Commit Correctement commentés
    - Issue Correctement commentées et documentées
    - pull Request OBLIGATOIRE
    - Seul le chef de projet peu faire un "merge" sur "master" après révision de votre code.
    - Faire un update sur le code principal : git pull origin master

   # 4) Tests unitaires et fonctionnels
    - Toute nouvelle fonctionnalité doit avoir des tests associés
    - Vous devez respecter un taux de couverture au delà de 70%
    - PhpUnit est à votre disposition pour créer vos tests
       * Ecrivez vos tests dans le dossier /test
       * Utiliser MakerBundle's make:test pour creer une squelette de test!
       * Lancer les tests avec la commande vendor/bin/phpunit --coverage-html web/test-coverage pour générer un rapport de couverture 


   # 5) Architecture de fichier
    - Respectez l'architecture de symfony 5 pour vos fichiers PHP ( src\Controller\... )
    - Les vues devront être dans le repertoire templates.
