# app

## InitEnv
```
$ docker-compose up -d
$ docker-compose exec php bash
$ composer create-project laravel/laravel configure
$ php artisan -V
> Laravel Framework 7.25.0
```

## Document

https://readouble.com/laravel/7.x/ja/

### Authentication

https://readouble.com/laravel/7.x/ja/authentication.html

※ Default Authentication
Add `Auth::routes();` web.php

## Connect DB

```
$ docker exec -it db-host bash
$ mysql -u root -p
```