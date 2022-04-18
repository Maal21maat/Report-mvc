Symfony Report i MVC
============================
Samlade dokumentation om kmoms, just nu endast uppstart



Uppstart av me/report mhh föreläsning
----------------------------

Stå i mvc:

```
composer create-project symfony/skeleton me/report
cp example/symfony/.htaccess me/report/public/
dbwebb publishpure report
```

Kolla lokalt:
php -S localhost:8888 -t public
```

stå i: cd me/report
composer require annotations twig webapp
```

Kopiera controller with the routes:

Stå i: me/report
cp ../../example/symfony/LuckyControllerTwig.php src/Controller/ReportController.php
cp ../../example/symfony/lucky_number.html.twig templates/about.html.twig
cp ../../example/symfony/lucky_number.html.twig templates/home.html.twig
cp ../../example/symfony/lucky_number.html.twig templates/report.html.twig




Twig extensions
----------------------------

[Twig Extensions Defined by Symfony](https://symfony.com/doc/current/reference/twig_reference.html)

```
<link rel="stylesheet" href="css/style.css"/>

<li><a href="{{ url("home") }}">Home</a></li>
<li><a href="{{ path("about") }}">About</a></li>

<p><a href="{{ absolute_url("img/mos.png") }}">View the image</p>
```

