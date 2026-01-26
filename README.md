## Allgemeines

Am Anfang die Berechtigung für alle den jeweiligen Storage setzen

~~~
docker compose exec php chown -R www-data:www-data storage bootstrap/cache
~~~

## Dockerbefehle


Docker ausführen
~~~
docker compose run --rm composer install
~~~

Docker Container ausführen
~~~
docker compose exec app php artisan migrate
~~~