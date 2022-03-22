# Authentification Guide

La sécurité concernant l'authentification est configuré dans le fichier `config/packages/security.yaml`
Vous trouverez plus d'informations concernant ce fichier et ses différentes parties dans la [documentation officielle de Symfony](https://symfony.com/doc/5.4/security.html).

## L'entité User
Avant toute de chose, il est nécessaire d'avoir défini une entité qui representera l'utilisateur connecté. 
On crée une entité en passant par le terminal et la console Symfony :
`php bin/console make:entity`
Cette classe doit implémenter l'interface `UserInterface` et donc implémenter les différentes méthodes définis dans celle-ci.
Dans ce cas-ci, cette classe a déjà été implementée et se situe dans la fichier `src/Entity/User.php`.

## Security - password_hashers:
 lorsque que quelque chose doit être encoder dans l'entité `App\Entity\User` via `UserPasswordEncoderInterface`, dans ce cas-ci cela concerne le mot de passe.
```yaml
# config/packages/security.yaml
security: 
     password_hashers:
        # auto hasher with default options for the User class (and children)
        App\Entity\User: 'auto'
        # auto hasher with custom options for all PasswordAuthenticatedUserInterface instances
        Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface:
            algorithm: 'auto'
            cost:      15
```

## L'entité User
Avant toute de chose, il est nécessaire d'avoir défini une entité qui representera l'utilisateur connecté. 
On crée une entité en passant par le terminal et la console Symfony :
`php bin/console make:entity`
Cette classe doit implémenter l'interface `UserInterface` et donc implémenter les différentes méthodes définis dans celle-ci.
Dans ce cas-ci, cette classe a déjà été implementée et se situe dans la fichier `src/Entity/User.php`.

## Les Providers
Un provider va nous permettre d'indiquer où se situe les informations que l'on souhaite utiliser pour authentifier l'utilisateur, dans ce cas-ci, on indique qu'on recupérera les utilisateurs via Doctrine grâce à l'entité User dont la propriété username sera utilisé pour s'authentifier sur le site.
Attention, on peut indiquer ici la classe User car celle-ci implémente l'interface `UserInterface` !
```yaml
# config/packages/security.yaml
    providers:
        users:
            entity: 
                class: App\Entity\User
                property: email
```


## Les Firewalls
Un firewall va définir comment nos utilisateurs vont être authentifiés sur certaines parties du site.
Le firewall `dev` ne concerne que le développement ainsi que le profiler et ne devra à priori pas être modifié.
Le firewall `main` englobe l'entiéreté du site à partir de la racine défini via `pattern: ^/`, l'accès y est autorisé en anonyme c-à-d sans être authentifié, on y indique que c'est le provider "doctrine" qui sera utilisé.
Afin de s'authenfier, on définit un formulaire de connexion via `form_login:` où sont indiqués le nom des routes correspondant à ce formulaire, la route de vérification du login ainsi que la route vers laquelle l'utilisateur devra être redirigé par défaut après son authentification.
```yaml
# config/packages/security.yaml
 firewalls:
        dev:
            pattern: ^/(_(profiler|wdt)|css|images|js)/
            security: false
        main:
         
            lazy: true
            provider: users
            form_login:
                login_path: login
                check_path: login
             logout:
                path: logout
             remember_me: 
                secret:   '%kernel.secret%'
                lifetime: 86400
                path:    
```

## Les Access_Control
Un access_control va définir les limitations d'accès à certaines parties du site.
Dans ce cas-ci, on indique que :
- L'url /login est accessible sans authentification.
- L'url /admin n'est accessible qu'en étant authentifié avec un utilisateur ayant le rôle "ROLE_ADMIN".
- Tout le reste du site n'est accessible qu'aux utiliseurs authentifiés c-à-d ayant le rôle "ROLE_USER".
```yaml
# config/packages/security.yaml
    access_control:
        - { path: ^/admin, roles: ROLE_ADMIN }
        - { path: ^/login$,    roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: /, roles: PUBLIC_ACCESS }
```

## Les Role_Hierarchy
Un role_hierarchy permet de s'assurer qu'un utilisateur ayant un certain rôle aura automatiquement d'autres rôles.
Dans ce cas-ci, un utiliseur possédant le rôle "ROLE_ADMIN" aura automatiquement le rôle "ROLE_USER".
```yaml
# config/packages/security.yaml
role_hierarchy:
        ROLE_ADMIN: ROLE_USER
```