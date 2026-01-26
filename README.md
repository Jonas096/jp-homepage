## Allgemeines

Am Anfang die Berechtigung für alle den jeweiligen Storage setzen

~~~
docker compose exec php chown -R www-data:www-data storage bootstrap/cache
~~~

## Dockerbefehle


Composer ausführen
~~~
docker compose run --rm composer install
~~~

Migrate durchführen
~~~
docker compose exec app php artisan migrate
~~~

Npm install durchführen
~~~
docker compose run --rm npm install
~~~

Vite dev starten
~~~
docker compose run --rm npm run dev
~~~