Symfony Report i MVC
============================

Kolla lokalt:
php -S localhost:8888 -t public
```
Publicera:
dbwebb publishpure report

Samlade dokumentation om kmoms

Om publiceringen slutar i error 500:
----------------------------
Publicera dina filer igen.

Kör sedan kommandot:
dbwebb run "cd www/dbwebb-kurser/mvc/me/report; composer dumpautoload"
Stå i me eller me/report


Uppstart av me/report mhh föreläsning
----------------------------

Stå i mvc:
composer create-project symfony/skeleton me/report
cp example/symfony/.htaccess me/report/public/

stå i: cd me/report
composer require annotations twig webapp


Twig extensions
----------------------------

[Twig Extensions Defined by Symfony](https://symfony.com/doc/current/reference/twig_reference.html)

```
<link rel="stylesheet" href="css/style.css"/>

<li><a href="{{ url("home") }}">Home</a></li>
<li><a href="{{ path("about") }}">About</a></li>

<p><a href="{{ absolute_url("img/mos.png") }}">View the image</p>
```

