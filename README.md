# SentencePress
## Pré requis
- PHP 8
- Symfony CLI
- Git
- Composer

## Installation

Récupérer le projet avec

```git clone https://github.com/FlorianVDP/SentencePress.git ```

Ensuite pour installer les dépendances du projet:

```composer install```

Mettre en place la bdd en local :

``` docker-compose up -d ```

Remplir le .env.local en fonction des variables dans le docker-compose:

```DATABASE_URL="postgresql://user:mdp@127.0.0.1:5432/name_app"```

Créer la bdd en local :

``` php bin/console doctrine:database:create ```

Faire les migrations :

```php bin/console doctrine:migrations:migrate```

Enfin, lancer le serveur et inscrivez vous:

```symfony server:start -d```

## Acces
Acceder à la Base de donnée depuis le navigateur

```http://127.0.0.1:18080/?pgsql=postgres&username=sentencePress&db=app&ns=public&select=user```