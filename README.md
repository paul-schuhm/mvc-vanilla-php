# Implémentation MVC en vanilla PHP

Implémentation du pattern MVC en *vanilla* PHP. Le site web expose des articles sur l'URL `/articles?title=titre de l'article`.

- [Implémentation MVC en vanilla PHP](#implémentation-mvc-en-vanilla-php)
  - [Lancer le projet](#lancer-le-projet)
  - [Références utiles](#références-utiles)


## Lancer le projet 

~~~bash
composer install
php -S localhost:5001 index.php
~~~

Ouvrir l'URL `localhost:5001/articles?title=foo` avec votre navigateur favori, ou avec cURL

~~~bash
curl localhost:5001/articles?title=foo
~~~

## Références utiles
