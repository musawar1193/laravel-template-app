# Laravel-Docker plug-and-play

This is a quick plug-and-play setup for your `Laravel-Docker` projects

Comes with:
- web-app: `Laravel/PHP-7.2`
- web-server: `Nginx:alpine`
- database: `Mysql-5.7.22`

## Setup
- `git clone git@github.com:shsma/laravel-docker.git`
- `cd laravel-docker-master`
- `docker-compose up -d`
- `docker exec app composer install`
- `cp .env.example .env`
- `docker-compose exec app php artisan key:generate`
- `docker-compose exec app php artisan migrate`

Now that all containers are up, we can add `127.0.0.1 project.local` to our `/etc/hosts` file

Boom! access `project.local` on your favorite browser

